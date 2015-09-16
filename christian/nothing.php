<!DOCTYPE html5>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||--> 
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||--> 
<!--OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||--> 
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||--> 

<form action="" method="post"><input type="text" name="correo"><br><input type="text" name="asunto"><br><input type="submit" value="mandar"></form>
<br>


<?php
$correo=$_POST['correo'];
$asunto=$_POST['asunto'];


if(empty($correo) || empty($asunto)){echo "Evia un correo";}

else{
// Varios destinatarios
$para  = 'radio-phoenix@hotmail.com' . ', ';
$para .= 'ing.chris.ruiz.p@gmail.com' . ', '; 
$para .= 'web@orangeboutiquecreativa.com'; 
// título
$título = '¡Grandes descuentos este mes!';

// mensaje
$mensaje = "
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>
</head>

<body>
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td align='center' valign='top' bgcolor='#797979' style='background-color:#797979;'><br>
    <br>
    <table width='600' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td colspan='2' align='left' valign='top' bgcolor='#2a2a2a' style='background-color:#2a2a2a; padding:10px; font-family:Georgia, 'Times New Roman', Times, serif; color:#43c1d7; font-size:60px;'>My Blog</td>
        </tr>
      <tr>
        <td width='201' align='center' valign='top' style='padding:12px; background-color:#ffffff;' bgcolor='#ffffff;'><table width='100%' border='0' cellspacing='0' cellpadding='4' style='margin-bottom:20px;'>
          <tr>
            <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#000000;'><b>In This Issue</b></td>
          </tr>
          <tr>
            <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'><a href='#' style='color:#000000; text-decoration:underline;'>Lorem ipsum dolor si</a>t <br>
              <a href='#' style='color:#000000; text-decoration:underline;'>amet, consectr adipiscing</a><br>
              <a href='#' style='color:#000000; text-decoration:underline;'>vitae nibh pulvinar</a><br>
              <a href='#' style='color:#000000; text-decoration:underline;'>Aliquam erat volutpat</a></td>
          </tr>
        </table>
          <table width='100%' border='0' cellspacing='0' cellpadding='4' style='margin-bottom:20px;'>
            <tr>
              <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#000000;'><b>Other News</b></td>
            </tr>
            <tr>
              <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'>
              <div style='color:#43c1d7; font-size:19px;'><b>Lorem ipsum dolor sit amet, consectetur</b><br>
              </div>
             <div style='color:#6e6e6e;'> adipiscing elit. Vestibulum magna enim, volutpat nec imperdiet id, tempor venenatis eros. Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim. Morbi eleifend feugiat</div> </td>
            </tr>
          </table>
          <table width='100%' border='0' cellspacing='0' cellpadding='4' style='margin-bottom:20px;'>
            <tr>
              <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#000000;'><b>Follow Us On</b></td>
            </tr>
            <tr>
              <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td width='33%' align='left' valign='middle'><img src='images/tweet48.png' width='48' height='48'></td>
                  <td width='34%' align='left' valign='middle'><img src='images/in48.png' width='48' height='48'></td>
                  <td width='33%' align='left' valign='middle'><img src='images/face48.png' width='48' height='48'></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        <td align='left' valign='top' style='background-color:#e4e4e4; padding:10px;' bgcolor='#e4e4e4;'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; color:#6e6e6e;'>
            <div style='font-size:24px;'><b>Lorem ipsum dolor sit </b></div>
            <div style='font-size:14px;'><br>
              <b>consectetur adipiscing elit. Vestibulum magna enim, volutpat nec imperdiet id, tempor venenatis eros.</b></div>
               <div><br>
                 <img src='images/mainpic.jpg' width='349' height='161' style='display:block;'></div>
               <div style='font-size:11px;'><br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna enim, volutpat nec imperdiet id, tempor venenatis eros. Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim. Morbi eleifend feugiat turpis non placerat. Etiam sed tellus ac lectus lacinia molestie nec eu nisl. <br>
              <br>
              <br>
               </div>
               <div style='font-size:16px; color:#0cade3;'><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna enim, volutpat nec imperdiet id</b></div>
               <div style='font-size:11px;'><br>
                 Yempor venenatis eros.Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat. Aliquam erat volutpat. Nunc ac justo enim. Morbi eleifend feugiat turpis non placerat. Etiam sed tellus ac lectus lacinia molestie nec eu nisl. <br>
  <br>
               </div></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <br>
    <br></td>
  </tr>
</table>
<table border='0' cellspacing='0' cellpadding='0' class='responsive-table'>
	<tr>
		<td align='center'><a href='http://alistapart.com' target='_blank' style='font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #666666; text-decoration: none; background-color: #5D9CEC; border-top: 15px solid #5D9CEC; border-bottom: 15px solid #5D9CEC; border-left: 25px solid #5D9CEC; border-right: 25px solid #5D9CEC; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;' class='mobile-button'>Learn More →</a></td>
	</tr>
</table>
</body>
</html>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'From: Albatros Extintores <no-reply@albatrosextintores.com.mx>' . "\r\n";
$cabeceras .= 'Notificacion de Pago' . "\r\n";
// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
echo "enviado";
}
?>