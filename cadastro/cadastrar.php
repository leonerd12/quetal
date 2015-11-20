<?php

include_once '../DB/conexao.php';

$nome = $_POST['nome'];
$sNome = $_POST['sNome'];
$data = $_POST['aaaa'] . '-' . $_POST['mm'] . '-' . $_POST['dd'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//$person = $_POST['person'];

$gostos = "";
for ($i = 1; $i < 10; $i++) {
    $gostos .= $_POST[$i];
}

$query = "INSERT INTO usuario (nome, sobrenome, dataNasc, email, senha, gostos) VALUES ('$nome', '$sNome', '$data', '$email', '$senha', '$gostos');";
$result = pg_query($query);

if ($result) {
    header("location: ../index/index.php#four");
} else {
    header("location: cadastro.php");
//        echo pg_errormessage($link);
}

pg_close($link);
?>