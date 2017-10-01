<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
         include("Conexao.php");
        $id = $_GET["id"];
        
        $sql = mysqli_query("select * from carro where id='$id'");
        $exib = mysqli_fetch_assoc($sql);
        
        ?>
        <form method="post" action="alterar.php">
   <table class="forme">
 <tr><td><input type="hidden" class="mod" name="id" id="id"   value="<?php echo $exib["Idcarro"];?>"/></td></tr>
<tr><td><label for="mar"><p>marca &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="marca" id="mar" size="20" maxlength="30" placeholder="coloque a marca do carro" value="<?php echo $exib["Nome_marca"];?>"/></td></tr>
<tr><td><label for="mol"><p>modelo&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="modelo" id="mal" size="20" maxlength="30" placeholder="coloque o modelo do carro" value="<?php echo $exib["Nome_modelo"];?>"/></td></tr>
<tr class="tre"><td><label for="ano"><p>Ano&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="ano" id="ano"size="20" maxlength="30" placeholder="exemplo:2017"value="<?php echo $exib["Cor"];?>"/></tr>  </td>
<tr class="tre"><td><label for="cor"><p>cor&nbsp  &nbsp</p></label></td><td><input type="color"  class="peq"name="cor" id="cor" value="<?php echo $exib["Ano"];?>"/></td></tr>
<tr><td><label for="alc"><p>combustivel &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="combustivel" id="alc" size="20" maxlength="30" placeholder="exemplo : alcool" value="<?php echo $exib["Combustivel"];?>"/></td></tr>
<tr><td><label for="cam"><p>Cambio &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="cambio" id="cam" size="20" maxlength="30" placeholder="Exemplo : manual" value="<?php echo $exib["Cambio"];?>"/></td></tr>
<tr><td><label for="KM"><p>KM&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="KM" id="KM" size="20" maxlength="30" placeholder="12.000 KM" value="<?php echo $exib["KM"];?>"/></td></tr>
<tr><td><label for="val"><p>valor&nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="valor" id="val" size="20" maxlength="30" placeholder="Exemplo: 120.000" value="<?php echo $exib["Valor"];?>"/></td></tr>
<tr><td><label for="pot"><p>potencia &nbsp  &nbsp</p></label></td><td><input type="text" class="mod"name="potencia" id="pot" size="20" maxlength="30" placeholder="2.0" value="<?php echo $exib["Potencia"];?>"/></td></tr>

</table>
            <button type="submit">editar</button>
        </form>
    </body>
</html>