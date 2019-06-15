<?php

require_once("config.php");

$sql = new SqL();

$usuaros = $sql->("SELECT * FROm tb_usuarios");

echo json_encode($usuarios);

?>