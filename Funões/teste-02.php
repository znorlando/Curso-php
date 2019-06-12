<?php

function ola($texto, $periodo="Bom dia"){

    return "Olá $texto! $periodo! <br>";

}

echo ola("Mundo");
echo ola("","Bom dia");
echo ola("Orlando");
echo ola("João");

?>