<?php

 include("Conexao.php");
$id=$_GET["Idcarro"];
$sql = mysqli_query("delete from carro where id='$id'");
if($sql){
    
 echo "removido!! <br> <a href='javascript:history.back(-1);'>voltar</a>"  ; 
}else{
    
    echo mysqli_error(   );
}
?>