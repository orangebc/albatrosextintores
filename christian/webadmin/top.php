<?php
include("../lib/randcode.php");
$con=bd_qqq();
$sel_sql=mysql_query("SELECT * FROM vista_general_top",$con);
$stlo="width:100px;height:50px; text-align:center; color:white;";
?>
<html>
    <head>
          <link rel="stylesheet" type="text/css" href="../css/DragDropInteractions/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
          <script src="//code.jquery.com/jquery-1.10.2.js"></script>
          <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript">
var contador = 0;
function maxtop() {
for (var i=0;i < document.forms["to_top_form"].elements.length;i++) {
inpt = document.forms[0].elements[i]; 
if (inpt.checked) { 
contador++;
} 
} 
if(contador != 3) {
   if( contador < 8 ){var control="te faltan " + (8 -contador) ;}
   if( contador > 8 ){var control="te sobran " + (contador- 8) ;}
   //alert("Deben de ser 8 articulos exactamente, "+control);

    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height:250,
      width:500,
      modal: true,
      buttons: {
        "Aceptar": function() {
          $( this ).dialog( "close" );
        }
      }
    });

/*$("#des").append("<div id='dialog-confirm' title='No se puede actualizar el TOP'><span><p>Deben de ser 8 articulos exactamente</p></span></div>");*/
contador = 0;
return false;
}
}
</script>
    </head>
<body>
      <form action="" method="post" name="to_top_form" onsubmit="return maxtop();">
           <table border="1" cellmargin="0">
                  <tr><td>Seleccionar</td><td>Nombre</td><td>Clave</td><td>Descripcion</td><td>Estado</td></tr>
             <?php
                  while($r_sql=mysql_fetch_array($sel_sql)){
                       if($r_sql['to_top'] == 1){$status="<div style='".$stlo." background-color:red;'>En el TOP</div>";}
                       if($r_sql['to_top'] == 0){$status="<div style='".$stlo." background-color:green;'>Disponible</div>";}
                            echo"<tr><td><input type='checkbox' name='to_top[]' value='".$r_sql['id_products']."'></td>
                            <td>".$r_sql['name']."</td><td>".$r_sql['clave']."</td><td>".$r_sql['description']."</td><td>".$status."</td></tr>";
                                                           }
             ?>
           </table>
      <input type="submit" value="Guardar el TOP">
      <input type="button" value="Reiniciar el TOP">
      </form>

<div id="dialog-confirm" title="Error al actualizar el TOP">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>No puedes actualizar el TOP, deben de ser 8 articulos exactamente</p>
</div>

</body>  
</html>
<?php
$checkboxes = isset($_POST['to_top']) ? $_POST['to_top'] : array();
foreach($checkboxes as $value) {
        $contop=$contop+1;
        $edit_to_top=mysql_query("UPDATE products SET to_top=1 WHERE id_products=$value",$con);
                
                               }
if($_POST['to_top']){
echo "Generando top <i class='fa fa-cog fa-spin' style='color:green; font-size:1em;'></i>
      <meta http-equiv='Refresh' content='4;url=top.php'>";
                    }
?>

