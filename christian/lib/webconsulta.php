<?php
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "CaptainOosaka1"; 
  $bd_base = "albatros"; 
//-----------------------------------------------------------------------------------------------------------------------------------------------
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
session_start();
date_default_timezone_set('AMERICA/Mexico D.F');
//-----------------------------------------------------------------------------------------------------------------------------------------------
include("randcode.php");
$folium=createfolio();
$rand=randcod();
//-----------------------------------------------------------------------------------------------------------------------------------------------
  
  $cat_7=date("Y-m-d H:i:s");

  $reg=$_POST["data"];
  $sessio_shopper=$_SESSION['id'];

$a=1;
for($i=0;$i<count($reg);$i++)
{
 
 $sql="SELECT * FROM products WHERE id_products=$reg[$i][0]";
 mysql_query($sql,$con);

echo $i;
 }
?>
