<?php

include_once '../DB/conexao.php';

$nome = $_POST['nome'];
$sNome = $_POST['sNome'];
$data = $_POST['aaaa'] . '-' . $_POST['mm'] . '-' . $_POST['dd'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT id FROM usuario WHERE email = '$email'";
$result = pg_query($query);

if (pg_num_rows($result) > 0) {
    echo json_encode(array("sucesso" => false, "mailError" => true), JSON_FORCE_OBJECT);
} else {
    $query1 = "INSERT INTO usuario (nome, sobrenome, dataNasc, email, senha) VALUES ('$nome', '$sNome', '$data', '$email', '$senha') RETURNING id;";
    $result1 = pg_query($query1);

    if (is_resource($result1)) {
        $obj = pg_fetch_object($result1);
        $last_id = $obj->id;
    }

    for ($i = 1; $i < 10; $i++) {
        if (isset($_POST[$i]) && $_POST[$i] === true) {
//        echo $_POST[$i];
            $query2 = "INSERT INTO us_int (id_us, id_int) values ($last_id, $i);";
            $result2 = pg_query($query2);
        }
    }


    if ($result1 && $result2) {
        echo json_encode(array("sucesso" => true, "mailError" => false), JSON_FORCE_OBJECT);
    } else {
        echo json_encode(array("sucesso" => falseS, "mailError" => false), JSON_FORCE_OBJECT);
    }
}

pg_close($link);
