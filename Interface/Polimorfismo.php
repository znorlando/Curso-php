<?php

abstract class Animal {

    public function falar(){

        return "Son";

    }

    public function mover(){

        return "Anda";

    }

}

class Cachorro extends Animal {

    public function falar(){

        return "Late";

    }

}

class Gato extends Animal {

    public function falar(){

        return "Mia";

    }

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo"---------<br/>";

$garfield= new Gato();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

?>