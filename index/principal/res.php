<?php

session_start();

$f1 = $_GET['f1'];
$f2 = $_GET['f2'];
$f3 = $_GET['f3'];
$array_resultado = array();
echo "filtro: " . $f1 . " | filtro: " . $f2 . "<br/>";

include_once '../DB/conexao.php';

$query = "SELECT A.id, A.nome, A.tipo, A.image_path FROM empresa A INNER JOIN emp_int B ON A.id = B.id_emp INNER JOIN interesse C ON C.id = B.id_int WHERE C.id IN (SELECT A.id FROM interesse A INNER JOIN us_int B ON A.id = B.id_int INNER JOIN usuario C ON C.id = B.id_us WHERE C.id = " . $_SESSION['id'] . ") AND A.id IN (SELECT A.id FROM fil_emp b INNER JOIN empresa a ON a.id = b.id_emp WHERE b.id_fil = $f1 OR b.id_fil = $f2 GROUP BY (A.id) HAVING COUNT(A.id)>1 ORDER by A.id) GROUP BY A.id ORDER by A.id;";
echo "<hr>Filtragem: <br/>";
$result = pg_query($query);
$i = 0;
while ($linha = pg_fetch_assoc($result)) {
    echo $linha['id'] . " - " . $linha['nome'] . " - " . $linha['tipo'] . "<br/>";
    $id = $linha['id'];
    $nome = $linha['nome'];
    $tipo = $linha['tipo'];
    $imagem = $linha['image_path'];
    $empresa[$i] = array($id, $nome, $tipo, $imagem);
    $i++;
}
//die();
//for ($x = 0; $x < count($empresa); $x++) {
//    echo $empresa[$x][1] . "<hr>";
//}
if ($f3 == 1) {
    do {
        $a = rand(1, 100);
        for ($x = 0; $x < count($empresa); $x++) {
            if ($empresa[$x][0] == $a) {
                $e1 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2], $empresa[$x][3]);
            }
        }
    } while (!isset($e1));
    array_push($array_resultado, $e1);

    echo '<br><hr>Resultado<br>';
    echo $e1[2] . " - <b>" . $e1[1] . "</b> | ";
} else if ($f3 == 2) {
    do {
        $a = rand(1, 100);
        $b = rand(1, 100);
        if ($a != $b) {
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $a) {
                    $e1 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2], $empresa[$x][3]);
                }
            }
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $b) {
                    $e2 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2], $empresa[$x][3]);
                }
            }
        }
    } while (!isset($e1) || !isset($e2) || $e1[2] == $e2[2]);
    array_push($array_resultado, $e1);
    array_push($array_resultado, $e2);


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
                    $e1 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2], $empresa[$x][3]);
                }
            }
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $b) {
                    $e2 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2], $empresa[$x][3]);
                }
            }
            for ($x = 0; $x < count($empresa); $x++) {
                if ($empresa[$x][0] == $c) {
                    $e3 = array($empresa[$x][0], $empresa[$x][1], $empresa[$x][2], $empresa[$x][3]);
                }
            }
        }
    } while (!isset($e1) || !isset($e2) || !isset($e3) || $e1[2] == $e2[2] || $e1[2] == $e3[2] || $e2[2] == $e3[2]);

    array_push($array_resultado, $e1);
    array_push($array_resultado, $e2);
    array_push($array_resultado, $e3);
    echo '<br><hr>Resultado<br>';
    echo $e1[2] . " - <b>" . $e1[1] . "</b> | " . $e2[2] . " - <b>" . $e2[1] . "</b> | " . $e3[2] . " - <b>" . $e3[1];
} else {
    $resultado = "Não encontramos a melhor opção.<br/> Entre em contato conosco!";
}


$emp = array();
for ($i = 0; $i < $f3; $i++) {
    if ($array_resultado[$i][2] == 'cinema') {
        $emp[0] = $array_resultado[$i];
    } elseif ($array_resultado[$i][2] == 'restaurante') {
        $emp[1] = $array_resultado[$i];
    } elseif ($array_resultado[$i][2] == 'passeio') {
        $emp[2] = $array_resultado[$i];
    } elseif ($array_resultado[$i][2] == 'balada') {
        $emp[3] = $array_resultado[$i];
    } elseif ($array_resultado[$i][2] == 'motel') {
        $emp[4] = $array_resultado[$i];
    }
}
echo"<hr>";
for ($i = 0; $i < 5; $i++) {
    if (isset($emp[$i])) {
        echo $emp[$i][2];
        echo $emp[$i][1] . "<br/>";
    }
}