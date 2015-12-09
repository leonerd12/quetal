<?php

include_once '../index/DB/conexao.php';

if (empty($_POST['email']) || empty($_POST['senha'])) {
    //Login ou senha em branco
    //header("location:index.php#four");
    echo pg_errormessage($link);
} else {
    //Teste de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $query = "SELECT * FROM usuario WHERE email = '$email';";
    $result = pg_query($query);

    if (pg_num_rows($result) > 0) {
        while ($linha = pg_fetch_assoc($result)) {
            if ($senha == $linha['senha']) {
                //Acesso Permitido
                session_start();
                $_SESSION['id'] = $linha['id'];
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['sNome'] = $linha['sobrenome'];
                $_SESSION['email'] = $linha['email'];
                $_SESSION['senha'] = $linha['senha'];
                $_SESSION['logado'] = 1;
                echo json_encode(array("sucesso" => true),JSON_FORCE_OBJECT);
                //$_SESSION['hora'] = time();
                //$_SESSION['tempolimite'] = 600;
                header("location: principal/");
//                break;
            } else {
                //Usuario ou senha invalido
                //header("location:index.php#four");
                echo json_encode(array("sucesso" => false, "erroSenha" => true));
//                echo pg_errormessage($link);
            }
        }
    } else {
        //header("location: index.php?evento=6#cadastro");
        echo json_encode(array("sucesso" => false, "noMail" => true), JSON_FORCE_OBJECT);
//        echo pg_errormessage($link);
    }
}
pg_close($link);