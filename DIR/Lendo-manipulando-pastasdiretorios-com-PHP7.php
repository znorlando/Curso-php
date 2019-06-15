<?php

$nome = "images";

if (!is_dir($nome)) {

    mkdir($nome);
    echo "Diretório $nome creido com sucesso";

}   else {

    rmdir($nome);
    echo "já existe o diretório: $nome foi removido";

}


?>