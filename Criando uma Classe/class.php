<?php

class Pessoa {

public $nome;

public function falar(){

    return "O meu nome é ".$this->nome;

}
    
}

$orlando = new Pessoa();
$orlando->nome = "Orlando Daniel";
echo $orlando->falar();

?>