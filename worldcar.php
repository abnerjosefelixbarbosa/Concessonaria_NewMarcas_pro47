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
   $(".cancelar").fadeIn(50);
   
});

});
$('.segundo').click(function(){
$('.cd').fadeOut(50, function(){
   
   $(".list").fadeIn(50);
   $(".cada").fadeOut(50);
   
});

});
$('.cancelar').click(function(){
    $('.cada').fadeOut(50, function(){
   
   $(".cd").fadeIn(50);
   $(".cancelar").fadeOut(50);
  
   
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
.cancelar{
  display:none;
  position:absolute;
width:97px;
height:40px;
margin-top: -42px;
border:2px solid #BEBEBE;
margin-left:160px;
border-radius:10%;  
}

</style>
</head>
<body>
<header>
<table>
<tr><td><button class="primeiro">cadastrar</button></td></td><td><a href="listar.php"><button class="segundo">consultar</button></a></td></tr>
</table>

</header>
<div class="menu">


</div>



<div class="cada">
<h1>Cadastro</h1>
<form id="Cadastro"  name="Cadastro" method="post" action="cadastrar.php" onsubmit="">
<table class="forme">
<tr><td><label for="mar"><p>Marca &nbsp  &nbsp</p></label></td><td><input type="text" class="mod" name="Marca" id="mar" size="20" maxlength="30" placeholder="coloque a marca do carro"/></td></tr>
<tr><td><label for="mol"><p>Modelo&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="Modelo" id="mal" size="20" maxlength="30" placeholder="coloque o modelo do carro"/></td></tr>
<tr class="tre"><td><label for="Ano"><p>Ano&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="Ano" id="ano"size="20" maxlength="30" placeholder="exemplo:2017"/></tr>  </td><tr class="tre"><td><label for="Cor"><p>Cor&nbsp  &nbsp</p></label></td><td><input type="color"  class="peq"name="Cor" id="Cor"/></td></tr>
<tr><td><label for="alc"><p>Combustivel &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="Combustivel" id="alc" size="20" maxlength="30" placeholder="exemplo : alcool"/></td></tr>
<tr><td><label for="cam"><p>Cambio &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="Cambio" id="cam" size="20" maxlength="30" placeholder="Exemplo : manual"/></td></tr>
<tr><td><label for="KM"><p>KM&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="KM" id="KM" size="20" maxlength="30" placeholder="12.000 KM"/></td></tr>
<tr><td><label for="val"><p>Valor&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="Valor" id="val" size="20" maxlength="30" placeholder="Exemplo: 120.000"/></td></tr>
<tr><td><label for="pot"><p>Potencia &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="Potencia" id="pot" size="20" maxlength="30" placeholder="2.0"/></td></tr>

</table>

    <button type="submit" class="enviar">enviar</button>




</form>

</div>
    <button class="cancelar">cancelar</button>

<div class="cd">

<img src="carro.png"/>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

</script>
</body>

</html>