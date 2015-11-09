<?php

include_once '../DB/conexao.php';

$nome = $_POST['nome'];
$sNome = $_POST['sNome'];
$data = $_POST['aaaa'] . '-' . $_POST['mm'] . '-' . $_POST['dd'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];

$query = "INSERT INTO usuario (nome, sobrenome, dataNasc, email, senha) VALUES ('$nome', '$sNome', '$data', '$email', '$senha');";
$result = pg_query($query);

if ($result) {
    header("location: ../index/index.php#four");
} else {
    header("location: cadastro.php");
//        echo pg_errormessage($link);
}

pg_close($link);
?>