<!DOCTYPE html5>
<html>
<header>
<title></title>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Raleway:800,400' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script> 
<link href="css/styleheader.css" rel="stylesheet" type="text/css">
<link href="http://www.justinaguilar.com/animations/css/animations.css" rel="stylesheet" type="text/css">
<link href="css/stylebox.css" rel="stylesheet" type="text/css">
<link href="css/popup.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/icons/logo.png" type="image/png" />
<title>
</title>
<script>
    $(document).ready(function()
		{ 
        /*-------------------Abrir------------------------------*/
		$("#boton_menu_open").click(function () {
                        $('#scroll_menu').slideDown('down');
                        $('#boton_menu_close').show();
                        $('#boton_menu_open').hide();
			});
        /*-------------------Cerrar------------------------------*/
        $("#boton_menu_close").click(function () {
                        $('#scroll_menu').slideUp('down');
                        $('#boton_menu_close').hide();
                        $('#boton_menu_open').show();
			});
        /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    $('#open').click(function(){
		$('#popup').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
        $("body").css("overflow", "hidden");
	});
	
	$('#close').click(function(){
		$('#popup').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
	});
        
        /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
         
});
</script>



<style>
.sepdor{width:100%; height:auto; background-color:#fff;overflow: hidden;}
body{
margin:0px 0px 0px 0px;
width: 100%;
height: auto;
background-color: #fff;
}

</style>
</header>
<body>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Cabecera+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div id="hcont">
     <div class="icon_logo"><img src="images/logo.png" class="images_logo_type"></div>

     <div class="menu_head">
          <a href="index.html"><div class="h_optios">
              <b>INICIO <br> BIENVENIDO</b>
              </div></a>           
          <div class="h_optios">
                 CATALOGO PUBLICO<br> GENERAL DF.
          </div>   
          <div class="h_optios">
                 CATALOGO<br>DISTRIBUIDORES
          </div> 
          <a href="pagos.html"><div class="h_optios">
                 FORMA Y DATOS <br> PARA PAGO
              </div></a> 
          <a href="notificacion.html"><div class="h_optios">
                 NOTIFICAR <br> MI PAGO
              </div></a> 
          <a href="somos.html"><div class="h_optios">
                 QUIENES <br> SOMOS
              </div> </a>
          <div class="h_optios">
                 ¿REQUIERES <br> ASCESORIA?
          </div> 
          <div class="h_optios">
                 CONTACTO <br> ESCRIBENOS
          </div>   
     </div>

</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<div id="hcont_nav">
     
     <div class="icon_logo"><img src="images/logo.png" class="images_logo_type" heigth="200"></div>
    <!-- Abrir --><div class="bmenu" id="boton_menu_open"><img class="image_bmenu" src="images/icons/bmenu.png" width="auto"></div>
    <!-- Cerrar --><div class="bmenu" id="boton_menu_close" style="display:none;"><img class="image_bmenu" src="images/icons/bmenu.png" width="auto"></div>
    
    <div class="menu_head" id="scroll_menu" style="display:none;">
          <div class="h_optios">INICIO</div><a href="index.html"><div class="h_optios_nav"><b style="font-size:3em;">►</b></div></a>         
          <div class="h_optios">QUIENES SOMOS</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div>
          <div class="h_optios">CATALOGO</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div> 
          <div class="h_optios">FORMA DE PAGO</div><a href="pagos.html"><div class="h_optios_nav"><b style="font-size:3em;">►</b></div></a>  
          <div class="h_optios">FORMA DE ENVIO</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div>  
          <div class="h_optios">SER DISTRIBUIDOR</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div>  
          <div class="h_optios">REQUIERO ASESORIA</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div>  
          <div class="h_optios">CONTACTO</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div>  
          <div class="h_optios">SIGUENOS</div><div class="h_optios_nav"><b style="font-size:3em;">►</b></div>    
     </div>

</div>
<!----------------------------------------------------------------------------------------------------------------------->
<div class="port">
    <div class="bann_text">
        <a class="ban_title">EQUIPOS CONTRA INCENDIOS</a><br>
        <a class="ban_subtitle">PÚBLICO EN GENERAL Y DISTRIBUIDORES</a>
    </div>
</div>
<div class="sepdor">
    <div class="banners_rows"><img src="images/icons/BULLETVENTAPUBLICO.png" class="bullet_image"></div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++Fin Cabecera+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
     <div class="cont_box">
          <?php include('lib/consulta_top.php')?>
     </div>
    </div>
<div class="banner_info">
    <div id="ob_text" class="banner_text">
        <p class="banner_font">La empresa mas confiable en la República Mexicana para hacerte llegar todo lo que necesitas para recargar y vender   equipo contra incendios</p><h1 class="banner_font_h1">27 AÑOS NOS RESPALDAN</h1>
    </div>
</div>
<div class="sepdor">
    <div class="banners_rows"><img src="images/icons/BULLETPORQUESOMOS.png" class="bullet_image"></div>
<div class="somos_cont">
    <div id="object1" class="s_cont"><div class="s_image"><img class="icon_somos" src="images/icons/ICONAMPLIOCATALOGO.png"></div><div class="s_text">  
        <h3 class="subtitle">AMPLIO<br>CATALOGO</h3>
        Tenemos un catalogo completo con productos que cumplen las normas vigentes.
        </div></div>
    <div id="object2" class="s_cont"><div class="s_image"><img class="icon_somos" src="images/icons/ICONLOGISTICA.png"></div><div class="s_text">
        <h3 class="subtitle">LOGISTICA<br>PARA ENVIOS</h3>Trabajamos con las lineas de transporte lideres en Mexico asegurando una entrega puntual en tu domicilio.</div></div>
    <div id="object3" class="s_cont"><div class="s_image"><img class="icon_somos" src="images/icons/ICONSEGURIDAD.png"></div><div class="s_text">  
        <h3 class="subtitle">SEGURIDAD,<br>CONFIABILIDAD</h3>Nos aseguramos que nuestros clientes reciban de manera puntual y adecuada su pedido.</div></div>
    <div id="object4" class="s_cont"><div class="s_image"><img class="icon_somos" src="images/icons/ICONCALIDAD.png"></div><div class="s_text">
        <h3 class="subtitle">CALIDAD<br>GARANTIZADA</h3>
        supervisamos que cada refaccion o producto enviado cumplan con altos estandares de calidad y certificacion.</div></div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------footer -->
<div class="footer">
    <div class="cont_footer">
        <div class="cols_footer">
            <div class="rows_col1_footer"><br>01 (55) 1054.5208<br>01 (55) 1054.5209</div><div class="rows_col2_footer"><img src="images/icons/ICONTEL.png" class="image_icon_footer"></div>
            <div class="rows_col1_footer"><br>Enviar<br>Un Mail</div><div class="rows_col2_footer"><img src="images/icons/ICONMAIL.png" class="image_icon_footer"></div>
            <div class="rows_col1_footer rc1f"><br>albatrosextintores</div><div class="rows_col2_footer rc2f"><img src="images/icons/ICONFACE.png" class="image_icon_footer"></div>
            <div class="rows_col1_footer rc1f"><br>@albatrosextintor</div><div class="rows_col2_footer rc2f"><img src="images/icons/ICONTWITTER.png" class="image_icon_footer"></div>
        </div>
        <div class="cols_footer"><img src="images/logo.png" class="logo_footer"></div>
        <div class="cols_footer center">
            <h3>VENTA AL PUBLICO<br>APLICA SOLO EN<br>DISTRITO FEDERAL</h3>
            <p>Venta de equipo armado, solo en el Distrito Federal. Consulata con nuestros asesores entregas a domicilio o entregas en tienda</p>
        </div>
        <div class="cols_footer center">
            <h3>VENTA DE DISTRIBUDORES<br>EN TODA LA REPUBLICA<br>MEXICANA</h3>
            <p>Realizamos los envios a toda la Republica Mexicana atraves de nuestros socios transportistas o a traves de la linea de tu preferencia</p>       
        </div>
    </div>
</div>
    <div class="firma"><img src="images/icons/FIRMAOBC.png" class="img_firma" style="display:none;"></div>
<!------------------------------------------------------------------------------------------------------------fin footer-->

<div id="popup" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close"><img src="http://cespage.com/silverlight/appbar/dark/close.png"/></a></div>
<div class="popup" id="ppcart" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="http://201.152.140.32/cosmos/ecart.php#" id="closecart"><img src="./ecart_files/close.png"></a></div>
        <div>
             <div id="resultado"></div>
        </div>
    </div>
</div>
        <div>
<!-------------------------------------------------------------------------------------------------------------------------------------------->
             <fieldset style="margin-top:50px;">
               <legend>Ya tienes cuenta? Ingresa para comprar.</legend>
                  <form name="old_user" onsubmit="loginuser(); return false">
                        <input type="email" name="ml" placeholder="Email"/>
                        <input type="password" name="psswrd" placeholder="Contraseña"/><br>
                        <input type="submit"   value="Entrar"/>
                  </form>
                  <div id='cargando'></div>
               </fieldset>
<!-------------------------------------------------------------------------------------------------------------------------------------------->
             <fieldset style="margin-top:25px;">
               <legend>Registra una cuenta para comprar</legend>
                  <form name="new_user" onsubmit="SaveNewUser(); return false">
                        <input type="email" name="ml" placeholder="Email"/>
                        <input type="text" name="nm" placeholder="Nombre"/><br>
                        <input type="text" name="p_pt" placeholder="Apellido Paterno"/>
                        <input type="text" name="p_mt" placeholder="Apellido Materno"/><br>
                        <input type="text" name="mprs" placeholder="Empresa"/>
                        <input type="password" name="psswrd" placeholder="Contraseña"/><br>
                        <input type="password" name="psswrd_confirm" placeholder="Confirmar Contraseña"/>
                        <input type="submit"   value="Guardar Contacto"/>
                  </form>
                  <div id='resultado'></div>
               </fieldset>

<!-------------------------------------------------------------------------------------------------------------------------------------------->
        </div>
    </div>
</div>
<div class="popup-overlay"></div>
<!----------------------------------------------------------------------------------------------------------------------->
<script src="src/jquery.backstretch.js"></script>
<script>
        $.backstretch([
          "images/backgrounds/BANNER1.jpg",
          "images/backgrounds/BANNER2.jpg",
		  "images/backgrounds/BANNER1.jpg",
          "images/backgrounds/BANNER2.jpg",
               ], {
            fade: 750,
            duration: 2000
        });
    </script>
<script>
    $(window).scroll(function() {
		$('#object1,#object2,#object3,#object4,#ob_text').each(function(){ //Cambiar esto por una clase.
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+600) {
				$(this).addClass("slideUp");
			}
		});
	});
</script>
</body>
</html>
