<?php
//Configuracion de la conexion a base de datos
date_default_timezone_set('AMERICA/Mexico D.F');
//-----------------------------------------------------------------------------------------------------------------------------------------------
session_start();
$sessio_shopper=$_SESSION['id'];

//-----------------------------------------------------------------------------------------------------------------------------------------------
  
if($sessio_shopper != ""){

include("randcode.php");
$folium=createfolio();
$rand=randcod();
$con=bd_qqq(); 
  $cat_7=date("Y-m-d H:i:s");
  $reg=$_POST["data"];


 $sqlfolium="INSERT INTO folium(id_folio,key_pago,active,deposit) VALUES ('$folium','$rand',1,'0')";
 mysql_query($sqlfolium,$con);

$a=1;
for($i=0;$i<count($reg);$i++)
{
 
 $sql="INSERT INTO e_cart(folio,product,client,date_agree,cant) VALUES ('$folium','".$reg[$i][0]."','".$sessio_shopper."','$cat_7',".$reg[$i][1].")";
 mysql_query($sql,$con);
 }

$sql_user=mysql_query("SELECT * FROM user WHERE id_user='$sessio_shopper'",$con);
          $sql_user_unity=mysql_fetch_object($sql_user);
$sql_folio_query=mysql_query("SELECT * FROM vista_general_compras WHERE folio=$folium",$con);
//---------------------------------------------------------------Correo Cliente---------------------------------------------------------------  

$para_cliente  = $sql_user_unity -> email;
$para_admin    = 'web@orangeboutiquecreativa.com';
// título
$titulo = 'Compra Realizada';
$mensaje  ='
<style>
.b1{color:#fff;background-color:#333;}
.b2{color:#fff;background-color:#585858;}
.b3{color:#000;background-color:#DADADA;}
.b4{color:#000;background-color:#f0f0f0;}
.fondo{background-color:#333;text-align:left;}
</style>
';
$mensaje .='<div width=450 class=fondo><img src=http://www.orangeboutiquecreativa.com/albatros/images/logo.png width=350></div>';
$mensaje .='<table width=900><tr><td class=b1>Nombre</td><td class=b2>clave</td><td class=b1>Descripcion</td><td class=b2>Cantidad</td><td class=b1>Precio Normal</td><td class=b2>Total</td></tr>';
while($row_folio_query=mysql_fetch_array($sql_folio_query)){
$total=$row_folio_query['cant'] * $row_folio_query['precio_normal'];
$mensaje .= 
             '<tr><td class=b3>'.$row_folio_query['name'].'</td><td class=b4>'.$row_folio_query['clave'].'</td><td class=b3>'.$row_folio_query['description'].'</td><td class=b4>'.$row_folio_query['cant'].'</td><td class=b3>$'.number_format($row_folio_query['precio_normal']).'</td><td class=b4>$'.number_format($total).'</td></tr>';
$complete_total=$complete_total+$total;
                                                           }
$mensaje .='</table>';
$mensaje .='Precio Total de la compra= $'.number_format($complete_total) . "\r\n"; 
$mensaje .='Tiene 48 Horas a Partir de ahora para notificar su pago en la seccion <a href="http://www.orangeboutiquecreativa.com/albatros/notificacion.html">NOTIFICAR MI PAGO</a>' . "\r\n"; 
$mensaje .='Tu llave es <b>'.$rand.'</b>' . "\r\n"; 
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

printf("<div class='Xnotice'>Compra realizada,se ha mandado un correo a tu cuenta</div>");

}

else {echo "<div style='color:red;'>Necesita iniciar sesion</div>";}
?>
