<?php

    interface Veiculo {

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }

    class Civic implements Veiculo {

        public function acelerar($velocidade){

            echo "<br> O veiculo acelerou até " . $velocidade . " Km/h";
        }

        public function frenar($velocidade){

            echo "<br> O veiculo frenou até " . $velocidade . " Km/h";
        }

        public function trocarMarcha($marcha){

            echo "<br> O veiculo engatou " . $marcha . "ª" . " marcha "; 
        }
    }

    $carro = new Civic();
    
    $carro -> acelerar(100);
    $carro -> frenar(5);
    $carro -> trocarMarcha(1);
?>