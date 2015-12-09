<?php
session_start();

include_once '../DB/conexao.php';

$f1 = $_GET['f1'];
$f2 = $_GET['f2'];
$f3 = $_GET['f3'];
$array_resultado = array();

echo "filtro: " . $f1 . " | filtro: " . $f2 . "<br/><br/>";

$q = "SELECT A.id, A.nome, A.tipo FROM empresa A INNER JOIN emp_int B ON A.id = B.id_emp INNER JOIN interesse C ON C.id = B.id_int WHERE C.id IN (SELECT A.id FROM interesse A INNER JOIN us_int B ON A.id = B.id_int INNER JOIN usuario C ON C.id = B.id_us WHERE C.id = ".$_SESSION['id'].") GROUP BY A.id ORDER BY A.id;";
$r = pg_query($q);
while ($l = pg_fetch_assoc($r)) {
    echo $l['id'] . " - " . $l['nome'] . " - " . $l['tipo'] . "<br/>";
}

$query = "SELECT a.id, a.nome, a.tipo, a.image_path FROM fil_emp b INNER JOIN empresa a ON a.id = b.id_emp WHERE b.id_fil = $f1 OR b.id_fil = $f2 GROUP BY (A.id) HAVING COUNT(A.id)>1 ORDER by A.id;";
echo "<hr/>Filtragem: <br/>";
$result = pg_query($query);
while ($linha = pg_fetch_assoc($result)) {
    echo $linha['id'] . " - " . $linha['nome'] . " - " . $linha['tipo'] . "<br/>";
}


$qu = "SELECT A.id, A.nome, A.tipo FROM empresa A INNER JOIN emp_int B ON A.id = B.id_emp INNER JOIN interesse C ON C.id = B.id_int WHERE C.id IN (SELECT A.id FROM interesse A INNER JOIN us_int B ON A.id = B.id_int INNER JOIN usuario C ON C.id = B.id_us WHERE C.id = ".$_SESSION['id'].") AND A.id IN (SELECT A.id FROM fil_emp b INNER JOIN empresa a ON a.id = b.id_emp WHERE b.id_fil = $f1 OR b.id_fil = $f2 GROUP BY (A.id) HAVING COUNT(A.id)>1 ORDER by A.id) GROUP BY A.id ORDER by A.id;";
echo "<hr/>Final: <br/>";
$re = pg_query($qu);
while ($li = pg_fetch_assoc($re)) {
    echo $li['id'] . " - " . $li['nome'] . " - " . $li['tipo'] . "<br/>";
}

