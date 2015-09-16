<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "CaptainOosaka1"; 
  $bd_base = "albatros"; 
 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 
//consulta todos los empleados
$sql=mysql_query("SELECT * FROM products",$con); 
/*
+---------------+-------------+------+-----+---------+----------------+
| Field         | Type        | Null | Key | Default | Extra          |
+---------------+-------------+------+-----+---------+----------------+
| id_products   | int(11)     | NO   | PRI | NULL    | auto_increment |
| image         | text        | NO   |     | NULL    |                |
| description   | text        | NO   |     | NULL    |                |
| precio_normal | float       | NO   |     | NULL    |                |
| promo         | float       | NO   |     | NULL    |                |
| clave         | varchar(45) | NO   |     | NULL    |                |
| date_agree    | varchar(45) | NO   |     | NULL    |                |
| name          | varchar(45) | NO   |     | NULL    |                |
+---------------+-------------+------+-----+---------+----------------+
*/
  while($row = mysql_fetch_array($sql)){
       printf("

     <div class='mod_box'>
          <div class='image_prop' style='background-image:url(images/tmp/".$row['image'].");'></div>
          <div class='title'>".$row['name']."</div>
          <div class='text'>".$row['description']."</div>
          <div class='price'><b>PRECIO NORMAL</b><br>".$row['precio_normal']."</div>
          <div class='prom'><b>PRECIO PROMOCION</b><br>".$row['promo']."</div>
         <div class='key'><b>CLAVE DEL PRODUCTO</b><br>".$row['clave']."</div>
          <div class='info' id='open'>VER MAS INFORMACION<br><img src='../albatros/images/icons/ICONVERMAS.png' class='plus_icon'></div>
     </div>

             ");
  }
printf("</div>");
?>
</table>
