<!DOCTYPE html>
<html>
<title>Administracion de usuarios</title>
    <head>
       <meta charset="UTF-8">
       <script src="ajaxadmin.js" type="text/javascript"></script>
       <script src="jquery-1.10.2.js"></script>
       <link href="../css/popup.css" rel="stylesheet" type="text/css">
             <script>
$(document).ready(function(){
	  $('#closecart').click(function(){
		$('#ch_pss').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
	                                  });
                             });
             </script>
       <style>
            .boton_user{
                   float:left;
                   background-color:#006b6b;
                   color:white;
                   overflow:hidden;
                   margin:2px 2px 2px 2px;
                   padding:2px 2px 2px 2px;
                   cursor:pointer;
                       }
            .box{
                   background-color:#006b6b;
                   color:white;
                   overflow:hidden;
                   margin:2px 2px 2px 2px;
                   padding:2px 2px 2px 2px;
                   cursor:pointer;
                       }
       </style>
    </head>
    <body>
<div>
        <div class='boton_user' OnClick="show_users(X=1);">Usuarios</div>
        <div class='boton_user' OnClick="show_users(X=2);">Administradores</div>
        <div class='boton_user' OnClick="show_users(X=3);">salir</div>
</div>
             <div class='box' id="result_user"></div>
<!--=========================================================================================================================================-->
<div class="popup" id="ch_pss" style="display: none;">
    <div class="content-popup">
            <div class="close" id="closecart"><img src="./ecart_files/close.png"></div>
        <div>
              <fieldset style="margin-top:50px;">
               <legend>Cambiar Contraseña.</legend>
                  <form name="npss" onsubmit="new_password(); return false">
                        <input type="password" name="psswrd_a" placeholder="Nueva Contraseña">
                        <input type="password" name="psswrd_b" placeholder="Confirmar Contraseña">
                        <br><input type="submit" value="Guardar Usuario">
                  </form>
                  <div id="approved"></div>
               </fieldset>
        </div>
    </div>
</div>
<div class="popup-overlay"></div>
<!--=========================================================================================================================================-->
    </body>
</html>
