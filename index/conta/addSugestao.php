<?php

session_start();
include_once '../DB/conexao.php';

$id1 = $_GET['id1'];

if (isset($_GET['id2'])) {
    $id2 = $_GET['id2'];
}
if (isset($_GET['id3'])) {
    $id3 = $_GET['id3'];
}


if (!isset($id2) && !isset($id3)) {
    $query = "INSERT INTO us_sugestao (emp1, id_us) VALUES ($id1, " . $_SESSION['id'] . ");";
} else if (!isset($id2)) {
    $query = "INSERT INTO us_sugestao (emp1, emp3, id_us) VALUES ($id1, $id3, " . $_SESSION['id'] . ");";
} else if (!isset($id3)) {
    $query = "INSERT INTO us_sugestao (emp1, emp2, id_us) VALUES ($id1, $id2, " . $_SESSION['id'] . ");";
} else {
    $query = "INSERT INTO us_sugestao (emp1, emp2, emp3, id_us) VALUES ($id1, $id2, $id3, " . $_SESSION['id'] . ");";
}

$result = pg_query($query);

if ($result) {
    header("location: /quetal/index/conta/");
} else {
    pg_errormessage($link);
}

pg_close($link);
