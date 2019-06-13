<?php

Interface veiculo {
    
    public function acelerar($velociudade);
    public function frenar($velocidade);
    public function trocarMacha($macha);

}

class Civic implements Veiculo {

    public function acelerar($velocidade)
    {

        echo "O veiculo acelerou até" . $velocidade ." Km/h";

    }

    public function frenar($velocidade)
    {

        echo "o veiculo frenou até " . $velocidade . " Km/";

    }

    public function trocarMacha($marcha)
    {

        echo "O veiculo engatou a macha " . $marcha;

    }
   
}

$carro = new Civic();

$carro->trocarMacha(1);

?>