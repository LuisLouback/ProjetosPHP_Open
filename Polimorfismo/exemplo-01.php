<?php

    abstract class Animal {

        public function Falar(){

            return "<br>Som";

        }

        public function Mover(){

            return "<br>Andou<br>";

        }
    }

    class Cachorro extends Animal {

        public function Falar(){

            return "<br>Late !";

        }

    }

    class Gato extends Animal {

        public function Falar(){

            return "<br>Mia !";
        }
    }

    class Passaro extends Animal {

        public function Falar(){

            return "<br>Cante !<br>";
        }

        public Function Mover(){
        
            return "Voou e ". parent::Mover();
        }
    }

    $Lilo = new Passaro();

    echo $Lilo -> Falar();
    echo $Lilo -> Mover();

    echo "==============================";

    $Maeve = new Gato();

    echo $Maeve -> Falar();
    echo $Maeve -> Mover();

    echo "==============================";

    $pluto = new Cachorro();

    echo $pluto -> Falar();
    echo $pluto -> Mover();


?>