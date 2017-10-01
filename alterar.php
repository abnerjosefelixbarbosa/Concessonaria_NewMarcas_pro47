<?php

include("Conexao.php");
$id=$_POST["id"];
$marca =$_POST["marca"];
$modelo=$_POST["modelo"];
$ano=$_POST["ano"];
$combustivel=$_POST["combustivel"];
$cambio=$_POST["cambio"];
$km=$_POST["KM"];
$valor=$_POST["valor"];
$potencia=$_POST["potencia"];
$cor=$_POST["cor"];

$sql= mysqli_query("update carro set Nome_marca='$marca',Nome_modelo='$modelo',Cor='$cor',Ano='$ano',Valor='$valor',KM='$km',Combustivel='$combustivel',Pontencia='$potencia',Cambio='$cambio' where id='$id'");
if($sql){
    
     echo "Alteradoo!! <br> <a href='javascript:history.back(-1);'>voltar</a>"  ; 
    exit;
}else{
     echo mysqli_error( );
    exit;
}

?>