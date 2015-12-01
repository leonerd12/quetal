<?php

session_start();

$f1 = $_GET['f1'];
$f2 = $_GET['f2'];
$f3 = $_GET['f3'];
echo "filtro: " . $f1 . " | filtro: " . $f2 . "<br/>";

include_once '../DB/conexao.php';

$query = "SELECT empresa.id, empresa.nome, empresa.tipo FROM fil_emp inner join empresa on empresa.id = fil_emp.id_emp WHERE id_fil = $f1 OR id_fil = $f2 GROUP BY (empresa.id) HAVING COUNT(empresa.id)>1 ORDER by empresa.nome;";
echo "Filtragem: <br/>";
$result = pg_query($query);
$i = 0;
while ($linha = pg_fetch_assoc($result)) {
    echo $linha['id'] . " - " . $linha['nome'] . " - " . $linha['tipo'] . "<br/>";
    $id = $linha['id'];
    $nome = $linha['nome'];
    $tipo = $linha['tipo'];
    $empresa[$i] = array($id, $nome, $tipo);
    $i++;
}

//for ($x = 0; $x < count($empresa); $x++) {
//    echo $empresa[$x][1] . "<hr>";
//}
if ($f3 == 1) {
    do {
        $a = rand(1, 100);
        for ($x = 0; $x < count($empresa); $x++) {
            if ($empresa[$x][0] == $a) {
                $e1 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2]);
            }
        }
    } while (!isset($e1));

    echo '<br><hr>Resultado<br>';
    echo $e1[2] . " - <b>" . $e1[1] . "</b> | ";
    
} else if ($f3 == 2) {
    do {
        $a = rand(1, 100);
        $b = rand(1, 100);
        if ($a != $b) {
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $a) {
                    $e1 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2]);
                }
            }
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $b) {
                    $e2 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2]);
                }
            }
        }
    } while (!isset($e1) || !isset($e2) || $e1[2] == $e2[2]);


    echo '<br><hr>Resultado<br>';
    echo $e1[2] . " - <b>" . $e1[1] . "</b> | " . $e2[2] . " - <b>" . $e2[1] . "</b> | ";
    
} else if ($f3 == 3) {
    do {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $c = rand(1, 100);
        if ($a != $b && $a != $c && $b != $c) {
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $a) {
                    $e1 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2]);
                }
            }
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $b) {
                    $e2 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2]);
                }
            }
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $c) {
                    $e3 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2]);
                }
            }
        }
    } while (!isset($e1) || !isset($e2) || !isset($e3) || $e1[2] == $e2[2] || $e1[2] == $e3[2] || $e2[2] == $e3[2]);

    echo '<br><hr>Resultado<br>';
    echo $e1[2] . " - <b>" . $e1[1] . "</b> | " . $e2[2] . " - <b>" . $e2[1] . "</b> | " . $e3[2] . " - <b>" . $e3[1];
}

pg_close($link);
?>