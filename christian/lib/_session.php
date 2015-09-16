<?php
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
include("randcode.php");
$con=bd_qqq(); 
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
        $mail_f=$_POST["Xusr"];
        $iu=sha1($mail_f);
        $psswrd=sha1($_POST["Xpssword"]);
        
        $sql_conection=mysql_query("SELECT id_user,password FROM user WHERE id_user='$iu' AND password='$psswrd'",$con);
        $cont = mysql_num_rows($sql_conection);

if($cont == 1){
        session_start();
        $_SESSION["id"]=$iu;
        $_SESSION["psswrd"]=$psswrd;
        //$_SESSION['mail']=$mail_f;
        $s_user=mysql_query("SELECT id_user FROM user WHERE id_user='$iu' AND password='$psswrd'",$con);
        $su=mysql_fetch_object($s_user);
        $_SESSION["id"]=$su->id_user;
      //  $_SESSION['id_compras']=$asdf;

       // $_SESSION['keyuser']='14bc597071973971238909871896093e71171fbb';
     printf("<b style='color:green; font-size:2em;'>Iniciando</b><br>
             <i class='fa fa-cog fa-spin' style='color:green; font-size:2em;'></i>
             <meta http-equiv='Refresh' content='3;url=webcart.php'>
            ");
              }
else{
     printf("<b style='color:red'>Usuario y/o Contraseña incorrecta</b>");
    }
?>
