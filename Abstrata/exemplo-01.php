<?php
    
    interface Veiculo {

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }

    abstract class Automovel implements Veiculo {

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


    class Porshe extends Automovel {

        public function cantaPneu ($acelerar){

            
        }

    }
    
    //Uma Claase Abstrata não pode ser instânciada

    //  Errado ->  $carro = new Automovel();

    /* Para isso cria-se uma nova classe que ela extede (extends) da classe abstrata que implementa (implements) uma interface (inteface) */
    
    
    $carro = new Porshe();

    $carro -> acelerar(250);
?>