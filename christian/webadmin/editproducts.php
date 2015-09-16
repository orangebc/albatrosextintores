<?php 
session_start();
include("lock.php");
?>
<?php
include("../lib/randcode.php");
$con=bd_qqq(); 
$sel_sql=mysql_query("SELECT * FROM vista_general_products",$con);
?>
<!DOCTYPE html>
<html>
      <head>
           <link rel="stylesheet" type="text/css" href="../css/DragDropInteractions/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
           <title>Editar articulos</title>
           <script src="jquery-1.10.2.js"></script>
           <link href="../css/popup.css" rel="stylesheet" type="text/css">
           <script src="js/jquerywindows.js"></script>
      </head>
      <body>
           <table border="1">
                  <tr><td>Eliminar</td><td>Editar</td><td>Nombre</td><td>Clave</td><td>Descripcion</td></tr>
             <?php
                  while($r_sql=mysql_fetch_array($sel_sql))
                  {echo"<tr><td><button OnClick='dexce(".$r_sql['id_products'].");'>Editar</button></td>
                            <td><button Onclick='deleteproduct(".$r_sql['id_products'].");'>Eliminar</button></td><td>".$r_sql['name']."</td><td>".$r_sql['clave']."</td><td>".$r_sql['description']."</td></tr>";}
             ?>
           </table>

<div id="yesok"></div>
<div id="yesok1"></div>
      </body>

</html>

