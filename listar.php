<!DOCTYPE html>

<html lang="pt-br">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>cadastro</title>
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.primeiro').click(function(){
$(".cd").fadeOut(50, function(){
   
   $(".cada").fadeIn(50);
   $(".list").fadeOut(50);
   
});

});
$('.segundo').click(function(){
$('.cd').fadeOut(50, function(){
   
   $(".list").fadeIn(50);
   $(".cada").fadeOut(50);
   
});

});

});
</script>

<style>
html::-webkit-scrollbar {width:22px; height:auto;background: #FFF;}
html::-webkit-scrollbar-corner { background: #FFF;}
html::-webkit-scrollbar-button:vertical {height:1px;display:block;}
html::-webkit-scrollbar-button:horizontal {width:1px;display:block;}
html::-webkit-scrollbar-thumb:vertical {background-color: #2F4F4F;border: 1px solid  #2F4F4F;border-right:none;-webkit-border-radius: 8px;}
html::-webkit-scrollbar-thumb:horizontal {background-color:#2F4F4F;border: 1px solid #2F4F4F;border-bottom:#2F4F4F;}
html::-webkit-scrollbar-thumb  {background-color:#2F4F4F;}
html::-webkit-scrollbar-thumb:hover {background-color:#BEBEBE;border: 1px solid  #BEBEBE;}
html::-webkit-scrollbar-track-piece {background: none;}
html::-webkit-scrollbar:vertical {border-left: 1px solid #BEBEBE;}
html::-webkit-scrollbar:horizontal {border-top: 1px solid #BEBEBE;}

*{margin:0; padding:0;font-size:100%; border:none;outline:none;font-weight:300;box-sizing:border-box;font-family: 'lato',sans-serif;}

a{
 text-decoration:none;
}
ul{
 list-style:none;   
}
img{
 max-width: 100%;
}
header{
width:100%;
height:100px;

background:#2F4F4F;
float:left;


}
.cd{
display:block;
}
.cd img{
 left:50%;
 right:50%;
 margin-top:10%;
 margin-left:15%;

}
.menu{
width:100%;
height:150px;

background:#BEBEBE;



}
button{
height:100px;
width:112px; 
cursor:pointer;
color:#fff;
text-transform: uppercase;
border-right:6px solid #BEBEBE;
background:#5F9EA0;



}
button:hover{
background:#2F4F4F;
    
}

.cada{
display:none;
border:2px solid #2F4F4F;
height:auto;
width:1190px;
margin-top:5px;
margin-left:5%;

}
.cada h1{
font-size:30px;
background:#2F4F4F;
text-align:center;
color:#fff;

}
#cadastro{
padding:5%;

}
.forme{
font-size:20px;
color:#000000;

}


input{
border:1px solid #BEBEBE;
padding-left:10px;
}
.mod{
width:900px;


}

.peq{

width:200px;
}
.list{
display:none;
float:center;
margin-top:10px;
margin-left:590px;
width:80px;
height:30px;
background:#5F9EA0;
border:2px solid #BEBEBE;
border-radius:10%;
color:#fff;
}
.list:hover{
cursor:pointer;
color:#fff;
}
.enviar{
position:relative;
width:80px;
height:40px;
margin-top:10px;
border:2px solid #BEBEBE;
margin-left:03px;
border-radius:10%;


}

</style>
</head>
<body>
<header>
<table>
<tr><td><a href="worldcar.php"><button class="primeiro">cadastrar</button></a></td><td><a href="listar.php"><button class="segundo">consultar</button></a></td></tr>
</table>

</header>
<div class="menu">


</div>
    <div class="list">
        
        <?php
        include("Conexao.php");
        
        $sql = mysqli_query("select  *  from carro order by nome asc");
        
        while($exib = mysqli_fetch_assoc($sql)){
          
          echo "<href ='editar.php?&id=".$exib['Idcarro']."'>ALTERAR</a>"  ;
          echo $exib["Idcarro"]." l ";
           echo $exib["Nome_marca"]." l "; 
            echo $exib["Nome_modelo"]." l "; 
             echo $exib["Cor"]." l ";
            echo $exib["Valor"]." l ";
            echo $exib["KM"]." l "; 
           echo $exib["Combustivel"]." l "; 
          echo $exib["Potencia"]." l "; 
          echo $exib["Cambio"]." l ";echo "<href = 'apagar.php?&id=".$exib['Idcarro']."'>REMOVER</a>";
          
          
          
          
          
            
        }
        
        
        ?>
        
        
        
        
    </div>








<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

</script>
</body>

</html>

