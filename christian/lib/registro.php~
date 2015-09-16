<?php
 
//Configuracion de la conexion a base de datos
include("randcode.php");
$con=bd_qqq();  
date_default_timezone_set('UTC');
//variables POST
  $cat_2=$_POST['name'];
  $cat_3=$_POST['description'];
  $cat_4=$_POST['precio_normal'];
  $cat_5=$_POST['promo'];
  $cat_6=$_POST['clave'];
  $type_p= 1
  $cat_7=date("Y-m-d");


 
$file_up = "images/catalogue/";
$file_up = $file_up . basename($_FILES['image']['name']); 

if (move_uploaded_file($_FILES['image']['tmp_name'],$file_up)){    

    $sql="INSERT INTO products(image,description,precio_normal,tipo_producto,promo,clave,date_up_item,name) VALUES ('$file_up','$cat_3',$cat_4,$type_p,'$cat_5','$cat_6', '$cat_7','$cat_2')";
    mysql_query($sql,$con) or die('Error. '.mysql_error());
                                                              
                                                              }

?>
