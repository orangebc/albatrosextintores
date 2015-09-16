<?php
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
include("lib/randcode.php");
$con=bd_qqq();  
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
        $iu=sha1($_POST['Xusr']);
        $psswrd=sha1($_POST['Xpssword']);

        
        $sql_conection=mysql_query("SELECT id_user,password FROM user WHERE id_user='$iu' AND password='$psswrd'",$con);
        $cont = mysql_num_rows($sql_conection);
        echo $cont;

if($cont == 1){
        session_start();
        $_SESSION['usuario']=$alpha;
        $_SESSION['password']=$beta;
        $_SESSION['k']=1;
     printf("<b style='color:green'>Iniciando...</b><br><i class='fa fa-spinner fa-spin'></i>");
              }
else{
     printf("<b style='color:red'>Usuario y/o Contraseña incorrecta</b>");
    }
?>
