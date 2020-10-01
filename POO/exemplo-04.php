<?php

    class Endereco{

        private $logradouro, $numero, $cidade;
           
        public function __construct($a, $b, $c){
            
            $this -> logradouro = $a;
            $this -> numero = $b;
            $this -> cidade = $c;
        }

        public function __destruct(){

            //var_dump("DESTRUIDO !");
            
        }

        public function __toString(){
            
            return $this -> logradouro.", ".$this -> numero." - ".$this -> cidade;
        }
    }

    $meuEndereco = new Endereco("Rua Conde Vaz de Oliveira ","315 ","Lagoa Santa");

    //var_dump($meuEndereco);

    //unset($meuEndereco);

    echo $meuEndereco;
?>