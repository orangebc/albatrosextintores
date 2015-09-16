<?php
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
include('randcode.php');
$con=bd_qqq();
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
        $iu=sha1($_POST['Xmail']);
        $psswrd=$_POST['Xkey'];
        $depc=$_POST['Xdep'];
	
        
        $sql_conection=mysql_query("SELECT * FROM vista_general_folio WHERE user='$iu' AND keyp='$psswrd'",$con);
        $cont = mysql_num_rows($sql_conection);

if($cont != 0 && $depc !=""){

        $apro_data=mysql_query("UPDATE folium SET deposit='$depc' WHERE key_pago='$psswrd'",$con);
        printf("<b style='color:Green'>Espere la aprobacion de la compra...</b>");

              }
else{
     printf("<b style='color:red'>Llave y/o Contraseña incorrecta</b>");
    }
?>
