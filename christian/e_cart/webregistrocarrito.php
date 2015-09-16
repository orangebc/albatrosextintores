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

 $sqlfolium="INSERT INTO folium(id_folio,key_pago,active) VALUES ('$folium','$rand',0)";
 mysql_query($sqlfolium,$con);
//-----------------------------------------------------------------------------------------------------------------------------------------------
  
  $cat_7=date("Y-m-d H:i:s");

  $reg=$_POST["data"];
  $sessio_shopper=$_SESSION['id'];

$a=1;
for($i=0;$i<count($reg);$i++)
{
 
 $sql="INSERT INTO e_cart(folio,product,client,date_agree,cant) VALUES ('$folium','".$reg[$i][0]."','".$sessio_shopper."','$cat_7',".$reg[$i][1].")";
 mysql_query($sql,$con);
 }
//---------------------------------------------------------------Correo Cliente---------------------------------------------------------------  

$para_cliente  = 'radio-phoenix@hotmail.com';
$para_admin    = 'web@orangeboutiquecreativa.com';
// título
$titulo = 'Compra Realizada';

// mensaje
/*$mensaje = 
           $sql_mail=mysql_query("SELECT * FROM vista_productos WHERE folio='FA00001'",$con);
                 while($row_mail = mysql_fetch_array($sql_mail)){
$row_mail['name'];  $row_mail['precio_normal']; $row_mail['cant'];  $des=$row_mail['cant'];
                                                                };*/
$mensaje="enviado";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'From: Albatros <no-reply@albatrosextintores.com.mx>' . "\r\n";
$cabeceras .= 'Compra Realizada' . "\r\n";
// Enviarlo
$F_cilente=mail($para_cliente, $titulo, $mensaje, $cabeceras);
$F_admin  =mail($para_admin, $titulo, $mensaje, $cabeceras);
//echo "<script>window.history.go(-1)</script> ";

//----------------------------------------------------------------------------------------------------------------------------------------------

       // printf("<div class='Xnotice'>Se ha mandado un correo a tu cuenta</div>");

?>
