<?php
function ola($texto = "Mundo" , $periodo = "Bom Dia"){

    return "Olá $texto ! $periodo <br>";

}

echo ola("João","Boa Noite");
echo ola("Luis");

?>