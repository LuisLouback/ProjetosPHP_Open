<?php

    class Pessoa{

        public $nome = "Luis Augusto";
        protected $idade = 20;
        private $senha = "12345";

        public function verDados(){

            echo $this -> nome . "<br>";
            echo $this -> idade . "<br>";
            echo $this -> senha . "<br>";


        }


    }

    $objeto = new Pessoa();

    //echo $objeto -> nome . "<br>";
    $objeto -> verDados();
?>