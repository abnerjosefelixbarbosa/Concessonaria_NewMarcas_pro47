<?php
require_once 'Carro.php';
$server = "localhost";
$banco = "concessionaria";
$usuario= "root";
$senha = "";
$bd = mysqli_connect($server,$usuario, $senha);
 if(!$bd){
 die('nao conectado:' . mysql_error());   
     
   } else{
       echo "conectado";
   } 
 
$db= mysqli_select_db($bd, $banco);
if(!$db){
   die('nao posso usar esse banco!!:'  ); 
   
}else{
    echo "pode usar";
}
