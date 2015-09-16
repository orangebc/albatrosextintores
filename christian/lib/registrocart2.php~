<?php  
 include("randcode.php");
$con=bd_qqq(); 

$php_Save1=$_POST['Ajax_Save_1'];
$php_Save2=$_POST['Ajax_Save_2'];
$php_Save3=$_POST['Ajax_Save_3'];
$php_Save4=$_POST['Ajax_Save_4'];
$php_Save5=$_POST['Ajax_Save_5'];
$php_Save6=$_POST['Ajax_Save_6'];
$php_Save7=$_POST['Ajax_Save_7'];
$sha_id=sha1($php_Save1);
$sha_password=sha1($php_Save6);
$dash=date("Y-m-d H:i:s");

if($php_Save6 != $php_Save7){
              echo "<b style='color:red;'>Las Contraseñas no coinciden, favor de verificarlas</b>";
                            }

else{
    $sql="INSERT INTO user(id_user,nombre,ap_pat,ap_mat,email,empresa,date_ingreso,password,privilegios,activity) 
          VALUES ('$sha_id','$php_Save2','$php_Save3','$php_Save4','$php_Save1','$php_Save5','$dash','$sha_password',5,5)";
          mysql_query($sql,$con) or die('Error, este correo ya esta en el sistema');
             echo "<b style='color:Green;'>Creando Perfil, Espere por favor</b>";
             $cd=createdir($sha_id);
             echo $cd;
       
    }
?>
