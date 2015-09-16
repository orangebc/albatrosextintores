<?php
 include('../lib/randcode.php');
$con=bd_qqq(); 
date_default_timezone_set('UTC');
//variables POST
       $cat_2=$_POST['name'];
       $cat_3=$_POST['description'];
       $cat_4=$_POST['precio_normal'];
       $cat_5=$_POST['promo'];
       $cat_6=$_POST['clave'];
       $cat_8=$_POST['cantidad'];
       $cat_7=date("Y-m-d");


$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile']['size'];
echo $_FILES['uploadedfile']['name'];
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

     $sql="INSERT INTO products(image,description,tipo_producto,precio_normal,promo,clave,date_up_item,name) VALUES ('$file','$cat_3',$cat_8,   $cat_4,'$cat_5','$cat_6', '$cat_7','$cat_2')";
    mysql_query($sql,$con) or die('Error. '.mysql_error());


echo " Ha sido subido satisfactoriamente";
}
else{
echo "Error al subir el archivo";
}

}else{echo $msg;}

?>
