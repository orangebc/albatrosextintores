<?php
session_start();
include("lock.php");
include("../lib/randcode.php");
$con=bd_qqq();
?>
<link rel="stylesheet" type="text/css" href="../css/DragDropInteractions/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<?php      
$Xname=$_POST['Pname'];
$Xclave=$_POST['Pclave'];
$Xpn=$_POST['Ppn'];
$Xpp=$_POST['Ppp'];
$Xdes=$_POST['Pdes'];
$Xh_id=$_POST['h_id'];

$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile']['size'];
$_FILES['uploadedfile']['name'];
$file=$_FILES['uploadedfile']['name'];
if ($_FILES['uploadedfile']['size']>1000000)
{$msg=$msg."El archivo es mayor que 1Mb, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/gif"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES['uploadedfile']['name'];
$add="../images/catalogue/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){

$sel_update=mysql_query("UPDATE products SET image ='".$file."' ,name='".$Xname."', clave='".$Xclave."', precio_normal=".$Xpn.", promo=".$Xpp.", description='".$Xdes."' WHERE id_products=".$Xh_id." ",$con);
     printf("<b style='color:green; font-size:2em;'>Aplicando Cambios <i class='fa fa-cog fa-spin' style='color:green; font-size:1em;'></i></b>
             <meta http-equiv='Refresh' content='3;url=editproducts.php'>");
}
else{
echo "Error al subir el archivo";
}

}else{echo $msg;}










?>
