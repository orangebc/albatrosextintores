<?php
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "CaptainOosaka1"; 
  $bd_base = "albatros"; 

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
        $mail_f=$_POST['Xusr'];
        $iu=sha1($mail_f);
        $psswrd=sha1($_POST['Xpssword']);
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con);
        
        $sql_conection=mysql_query("SELECT id_user,password FROM user WHERE id_user='$iu' AND password='$psswrd'",$con);
        $cont = mysql_num_rows($sql_conection);

if($cont == 1){
        session_start();
        $_SESSION['id']=$iu;
        $_SESSION['psswrd']=$psswrd;
        //$_SESSION['mail']=$mail_f;
        $s_user=mysql_query("SELECT id_user FROM user WHERE id_user='$iu' AND password='$psswrd'",$con);
        $su=mysql_fetch_object($s_user);
        $asdf=$su->id_user;
        $_SESSION['id_compras']=$asdf;

        $_SESSION['keyuser']='14bc597071973971238909871896093e71171fbb';
     printf("<b style='color:green; font-size:2em;'>Iniciando</b><br>
             <i class='fa fa-cog fa-spin' style='color:green; font-size:2em;'></i>
                <script>
                        timer = setTimeout('temporizador()', 4000);
                        function temporizador() {
                        $(document).ready(function() {
                                    location.reload();
                                                     });
                                                }
                </script>
            ");
              }
else{
     printf("<b style='color:red'>Usuario y/o Contraseña incorrecta</b>");
    }
?>
