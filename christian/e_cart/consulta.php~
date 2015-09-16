<?php
 
//Configuracion de la conexion a base de datos
/*
  $bd_host = "localhost"; 
  $bd_usuario = "orangebo"; 
  $bd_password = "32aNa8Vnu9"; 
  $bd_base = "orangebo_albatros"; 
 */
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "CaptainOosaka1"; 
  $bd_base = "albatros"; 
  $cont=0;

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 
//consulta todos los empleados
$sql=mysql_query("SELECT * FROM products",$con); 

printf("<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;'>

        <link href='css/stylebox.css' rel='stylesheet' type='text/css'>
        <div class='cont_box'>");
/*
albatros
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
  $cont=$cont+1;
       printf("
     <div class='mod_box'>
          <div class='image_prop' alt='".$row['clave']."'style='background-image:url(images/catalogue/".$row['image'].");'></div>
          <div class='title'>".$row['name']."</div>
          <div class='text'>".$row['description']."</div>
          <div class='price'><b>PRECIO NORMAL</b><br>".$row['precio_normal']."</div>
          <div class='prom'><b>PRECIO PROMOCION</b><br>".$row['promo']."</div>
          <div class='key grid__item'><b>CLAVE DEL PRODUCTO</b><br><div>".$row['clave']."</div></div>
          <div class='price'style='font-size:1em;'><div class='fa fa-shopping-cart a' id='".$row['id_products']."'></div><br><b>Agregar al carrito</b>
          </div>
          <div class='info' id='open'>VER MAS INFORMACION<br><img src='images/icons/ICONVERMAS.png' class='plus_icon'></div>
     </div>

             ");
  }
printf("</div>");
?>
