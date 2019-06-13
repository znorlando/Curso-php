<?php

$qualAsuaidade = 125;

$idadeCrianca = 13;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualAsuaidade < $idadeCrianca) {

    echo "Crianca";

} else if ($qualAsuaidade < $idadeMaior) {

    echo "Adolecente";

} else if ($qualAsuaidade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "Idoso";

}

echo "<br>";

echo ($qualAsuaidade < $idadeMaior)?"menor de idade":"maior de idade";

?>