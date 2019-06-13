<?php

class Endereco {

private $logradoro;
private $numero;
private $cidade;

public function __construct($a, $b, $c){

    $this->logradoro = $a;
    $this->numero = $b;
    $this->cidade = $c;

}

public function __destruct(){

    var_dump("DESTRUCT");

}

public function __toString(){

    return $this->Logradoro.",".$this->numero.",".$this->cidade;

}

}


?>