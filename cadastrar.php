<?php
require_once 'Controle.php';
require_once 'Carro.php';
 include("Conexao.php");
$marca =$_POST["Marca"];
$modelo=$_POST["Modelo"];
$ano=$_POST["Ano"];
$combustivel=$_POST["Combustivel"];
$cambio=$_POST["Cambio"];
$km=$_POST["KM"];
$valor=$_POST["Valor"];
$potencia=$_POST["Potencia"];
$cor=$_POST["Cor"];


if(empty($marca) or empty($modelo) or empty($ano) or empty($combustivel)or empty($cambio) or empty($km) or empty($valor) or empty($potencia)){
    
   echo "Ola!! sinto ao lhe informar que ha um campo em branco , por favor preencha todos os campos ,"; 
   exit;
}else{
    

$Car= new Carro($valor,$km,$modelo,$cor,$ano,$potencia,$cambio,$combustivel,$marca);

 //o senhor pode tirar esse objeto da class controle e ai ele vai enviar pra class carro ligar diretamente pq ta dando erro !!
  
$Con =new Controle($Car);


}




?>

