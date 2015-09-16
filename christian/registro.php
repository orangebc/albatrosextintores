<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "CaptainOosaka1"; 
  $bd_base = "albatros"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
date_default_timezone_set('UTC');
//variables POST
  $cat_2=$_POST['name'];
  $cat_3=$_POST['description'];
  $cat_4=$_POST['precio_normal'];
  $cat_5=$_POST['promo'];
  $cat_6=$_POST['clave'];
  $cat_7=date("Y-m-d");

//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
 
    //obtenemos el archivo a subir
    $file = $_FILES['image']['name'];
    $sql="INSERT INTO products(image,description,precio_normal,promo,clave,date_agree,name) VALUES ('$file','$cat_3',$cat_4,'$cat_5','$cat_6', '$cat_7','$cat_2')";
    mysql_query($sql,$con) or die('Error. '.mysql_error());
     
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['image']['tmp_name'],"tmp/".$file))
    {
       sleep(3);//retrasamos la petición 3 segundos
       echo $file;//devolvemos el nombre del archivo para pintar la imagen
    }
}

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
//registra los datos del empleados


 

?>
