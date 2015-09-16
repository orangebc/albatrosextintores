<?php
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
include("../lib/randcode.php");
$con=bd_qqq();
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
        $iu=sha1($_POST['Xusr_admin']);
        $psswrd=sha1($_POST['Xpssword_admin']);

/*
admin_session
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_admin     | char(50)    | NO   | PRI | NULL    |       |
| name_admin   | varchar(45) | NO   |     | NULL    |       |
| psswrd_admin | char(50)    | NO   |     | NULL    |       |
| date_up      | varchar(45) | NO   |     | NULL    |       |
| admin_active | varchar(45) | NO   |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
*/
        $sql_conection=mysql_query("SELECT id_admin,psswrd_admin FROM admin_session WHERE id_admin='$iu' AND psswrd_admin='$psswrd'",$con);
        $cont = mysql_num_rows($sql_conection);

if($cont == 1){
        session_start();
        $_SESSION['id_admin']=$iu;
        $_SESSION['psswrd_admin']=$psswrd;
        //$_SESSION['mail']=$mail_f;
        $s_user=mysql_query("SELECT id_user FROM user WHERE id_user='$iu' AND password='$psswrd'",$con);
        $su=mysql_fetch_object($s_user);
        $asdf=$su->id_user;
        $_SESSION['id_compras']=$asdf;
        $del1=$_SERVER['SERVER_NAME'];
        $del2=$_SERVER['HTTP_USER_AGENT'];
/*
mysql> describe admin_log;
+--------------+-------------+------+-----+---------+----------------+
| Field        | Type        | Null | Key | Default | Extra          |
+--------------+-------------+------+-----+---------+----------------+
| id_log       | int(11)     | NO   | PRI | NULL    | auto_increment |
| log_ip       | varchar(45) | NO   |     | NULL    |                |
| log_ad       | char(50)    | NO   |     | NULL    |                |
| log_software | text        | NO   |     | NULL    |                |
+--------------+-------------+------+-----+---------+----------------+

*/

       $sql_log="INSERT INTO admin_log(log_ip,log_ad,log_software) VALUES ('$del1','$iu','$del2')";
       mysql_query($sql_log,$con);

     printf("<b style='color:green; font-size:2em;'>Iniciando    <i class='fa fa-cog fa-spin' style='color:green; font-size:1em;'></i></b>
             <meta http-equiv='Refresh' content='3;url=principal.php'>
            ");
              }
else{
     printf("<div class='Xde'><b style='color:red' font-size:2em;>Usuario y/o Contraseña incorrecta</b><div>");
    }
?>
