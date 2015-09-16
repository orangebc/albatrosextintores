<?php session_start(); ?>
<!DOCTYPE html>
 <html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
       <link rel="stylesheet" type="text/css" href="css/DragDropInteractions/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
       <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
       <script src="js/webajaxregistro.js"></script>
       <link href="css/popup.css" rel="stylesheet" type="text/css">
       <link href="css/ALBATROSC/css/estiloscatalogo.css" rel="stylesheet" type="text/css">
       <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script-->   
       <link href='http://fonts.googleapis.com/css?family=Raleway:800,400' rel='stylesheet' type='text/css'>
       <link href="css/styleheader.css" rel="stylesheet" type="text/css">
       <link rel="shortcut icon" href="images/icons/logo.png" type="image/png" />
       <title>Carrito de Compras</title>

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
          /*-------------------Abrir------------------------------*/
          $(".boton_menu_open").click(function () {
                          var scrllbttnop= $(this).attr("id");

                               $("#"+scrllbttnop).hide();
                               $(".b"+scrllbttnop).show();
                               $('.open'+scrllbttnop).slideDown('down');


              });
          /*-------------------Cerrar------------------------------*/
          $(".boton_menu_close").click(function () {
                         var scrllbttcls= $(this).attr("id");

                               $("#"+scrllbttcls).hide();
                               $(".bX"+scrllbttcls).show();
                               $('.close'+scrllbttcls).slideUp('up');


              });
 


    
});
</script>
 <?php include("lib/_sessionstart.php");?>

<style>
.a{cursor:pointer;} 
body{
     margin:0px 0px 0px 0px;
    }
.Xnotice{ 
width:300px;
height:100px;
background-color:#006b6b;
}
.iconfa{
font-size:2em;
color:#fff;
}


</style>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
</head>
<body>
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
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
          <div class="barracarrito"id="guardado_carrito"><div class="btnconsultar">Número de productos</div>
          <div class="iconresumen"><img src="css/ALBATROSC/image/iconcarritopng.png" width="100%" height="auto"> </div>
          <span>0</span>
          <div class="btnconsultar show_data" onClick="show_data();">Consultar Pedido</div>
          <?php $session=_start(); ?>
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
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
    <div class="banners_rows"><img src="images/icons/bullet1.png" width="100%"></div>
<div class="cat_cont">
     <div class="cat_boxcont" id="1"><img src="images/icons/icono1.png" width="55%"><br><a class="text_cat">EXTINTORES</a></div>
     <div class="cat_boxcont" id="2"><img src="images/icons/icono2.png" width="60%"><br><a class="text_cat">SEÑALAMIENTOS</a></div>
     <div class="cat_boxcont" id="3"><img src="images/icons/icono3.png" width="60%"><br><a class="text_cat">BOTIQUINES</a></div>
     <div class="cat_boxcont" id="4"><img src="images/icons/icono4.png" width="60%"><br><a class="text_cat">GABINETES</a></div>
     <div class="cat_boxcont" id="5"><img src="images/icons/icono5.png" width="32%"><br><a class="text_cat">HERRAJES</a></div>
     <div class="cat_boxcont" id="6"><img src="images/icons/icono6.png" width="90%"><br><a class="text_cat">MANGUERAS</a></div>
</div>
<div id="divselect"><?php include("lib/consulta.php");?></div>

<div class="popup" id="ppsession" style="display:none;">
    <div class="content-user">
         <div class="baractualizar">
                     <div class="iconcerrar"><a href=""><img src="css/ALBATROSC/image/cerrar.png" width="100%" height="auto"></a></div>  
         </div>
    <div>

             <fieldset class="user_content_pop">
               <legend>Ya tienes cuenta? Ingresa para comprar.</legend>
                  <form name="old_user" onsubmit="LoginUser(); return false">
                        <input class="form_user afu" type="email" name="ml" placeholder="Email">
                        <input class="form_user afu" type="password" name="psswrd" placeholder="Contraseña"><br>
                        <input class="form_button" type="submit" value="Entrar">
                  </form>
                  <div id="approved"></div>
               </fieldset>



             <fieldset class="user_content_pop">
               <legend>Registra una cuenta para comprar</legend>
                  <form name="new_user" onsubmit="SaveNewUser(); return false">
                        <input class="form_user bfu" type="email" name="ml" placeholder="Email">
                        <input class="form_user bfu" type="text" name="nm" placeholder="Nombre">
                        <input class="form_user bfu" type="text" name="p_pt" placeholder="Apellido Paterno">
                        <input class="form_user bfu" type="text" name="p_mt" placeholder="Apellido Materno">
                        <input class="form_user bfu" type="text" name="mprs" placeholder="Empresa">
                        <input class="form_user bfu" type="password" name="psswrd" placeholder="Contraseña">
                        <input class="form_user bfu" type="password" name="psswrd_confirm" placeholder="Confirmar Contraseña">
                        <input class="form_button" type="submit" value="Guardar Contacto">
                  </form>
                  <div id="save_user"></div>
               </fieldset>


        </div>
    </div>
</div>
<div class="popup-overlay"></div>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<div class="popup" id="ppshop" style="display: none;">
    <div class="content-popup">
         <div class="baractualizar">
                     <div class="btnactualizar">Click Actualizar Pedido</div>  
                     <div class="iconcerrar"><a href=""><img src="css/ALBATROSC/image/cerrar.png" width="100%" height="auto"></a></div>  
         </div>
             <div>
                 <div id="show_table_div"></div>
                 <div id="show_table_div2"></div>
                 
             </div>
        </div>
</div>
<div class="popup-overlay"></div>
<div id="tgb"></div>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
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
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
</body></html>
