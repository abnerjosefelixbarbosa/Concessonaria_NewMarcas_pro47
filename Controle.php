<?php
 include("Conexao.php");
require_once 'Carro.php';

class Controle {
   
 
 public function Controle(Carro $car )  {
     
     if(mysqli_query("inser into carro (Nome_marca,Nome_modelo,Cor,Ano, Valor,KM,Combustivel,Potencia,Cambio) values ('$car.getMarca()','$car.getNome_Modelo()','$car.getCor()','$car.getAno()','$car.getValor()','$car.getKm()','$car.getCombustivel()','$car.getPotencia()','$car.getCambio()')")){
         
        echo "Cadastrado com sucesso!! <br> <a href='javascript:history.back(-1);'>voltar</a>" ;
        exit;
     }else{
       echo mysql_error() ;
       exit;
     }
 }
    
}
