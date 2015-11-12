<?php

include_once '../DB/conexao.php';

if (empty($_POST['email']) || empty($_POST['senha'])) {
    //Login ou senha em branco
    //header("location:index.php#four");
    echo pg_errormessage($link);
} else {
    //Teste de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $query = "SELECT * FROM usuario;";
    $result = pg_query($query);

    if (pg_num_rows($result) > 0) {
        while ($linha = pg_fetch_assoc($result)) {
            if ($senha == $linha['senha'] && $email == $linha['email']) {
                //Acesso Permitido
                session_start();
                $_SESSION['id'] = $linha['id'];
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['sNome'] = $linha['sobrenome'];
                $_SESSION['email'] = $linha['email'];
                $_SESSION['senha'] = $linha['senha'];
                $_SESSION['logado'] = 1;
                //$_SESSION['hora'] = time();
                //$_SESSION['tempolimite'] = 600;
                header("location: ../principal/principal.php");
                break;
            } else {
                //Usuario ou senha invalido
                //header("location:index.php#four");
                echo pg_errormessage($link);
            }
        }
    } else {
        //header("location: index.php?evento=6#cadastro");
        echo pg_errormessage($link);
    }
}

pg_close($link);
?>