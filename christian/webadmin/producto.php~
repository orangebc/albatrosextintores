<!DOCTYPE html>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<html>
  <head>
  <title>Registro de empleados</title>
  <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<script type='text/javascript'>//<![CDATA[ 
$(function(){
//Este string contiene una imagen de 1px*1px color blanco
window.imagenVacia = 'http://www.precisiontoxicology.com/Plus-png.png';

window.mostrarVistaPrevia = function mostrarVistaPrevia() {

    var Archivos, Lector;

    //Para navegadores antiguos
    if (typeof FileReader !== "function") {
        jQuery('#infoNombre').text('[Vista previa no disponible]');
        jQuery('#infoTamaño').text('(su navegador no soporta vista previa!)');
        return;
    }

    Archivos = jQuery('#archivo')[0].files;
    if (Archivos.length > 0) {

        Lector = new FileReader();
        Lector.onloadend = function(e) {
            var origen, tipo;

            //Envia la imagen a la pantalla
            origen = e.target; //objeto FileReader
            //Prepara la información sobre la imagen
            tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));

            jQuery('#infoNombre').text(Archivos[0].name + ' (Tipo: ' + tipo + ')');
            jQuery('#infoTamaño').text('Tamaño: ' + e.total + ' bytes');
            //Si el tipo de archivo es válido lo muestra, 
            //sino muestra un mensaje 
            if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif') {
                jQuery('#vistaPrevia').attr('src', window.imagenVacia);
                alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
            } else {
                jQuery('#vistaPrevia').attr('src', origen.result);
                window.obtenerMedidas();
            }

        };
        Lector.onerror = function(e) {
            console.log(e)
        }
        Lector.readAsDataURL(Archivos[0]);

    } else {
        var objeto = jQuery('#archivo');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
        jQuery('#infoNombre').text('[Seleccione una imagen]');
        jQuery('#infoTamaño').text('');
    };


};

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME = function obtenerTipoMIME(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

//Obtiene las medidas de la imagen y las agrega a la 
//etiqueta infoTamaño
window.obtenerMedidas = function obtenerMedidas() {
    jQuery('<img/>').bind('load', function(e) {

        var tamaño = jQuery('#infoTamaño').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamaño').text(tamaño);

    }).attr('src', jQuery('#vistaPrevia').attr('src'));
}

jQuery(document).ready(function() {

    //Cargamos la imagen "vacía" que actuará como Placeholder
    jQuery('#vistaPrevia').attr('src', window.imagenVacia);

    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera').on('change', '#archivo', function(e) {
        window.mostrarVistaPrevia();
    });

    //El botón Cancelar lo vigilamos normalmente
    jQuery('#cancelar').on('click', function(e) {
        var objeto = jQuery('#archivo');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
        jQuery('#infoNombre').text('[Seleccione una imagen]');
        jQuery('#infoTamaño').text('');
    });

});
});//]]>  

</script>
<script>


                                            
</script>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<style>
body{margin: 0px 0px 0px 0px;}
.titulo{ font-size: 12pt; font-weight: bold; height: 30pt;}
#marcoVistaPrevia{
    border: 1px solid #008000;
    width: 250px;
    height: auto;
}
#vistaPrevia{
    max-width: 250px;
    max-height: auto;            
}
#resultado{
border:0px solid #000;
margin-left:0px;
 width:100%;
 height:auto;
}
</style>
  </head>
  <body>
<?php
/*
       $cat_2=$_POST['name'];
       $cat_3=$_POST['description'];
       $cat_4=$_POST['precio_normal'];
       $cat_5=$_POST['promo'];
       $cat_6=$_POST['clave'];
       $cat_8=$_POST['cantidad'];
       $cat_7=date("Y-m-d");
*/
 
include('../lib/randcode.php'); 
$con=bd_qqq();
$sql_select=mysql_query("SELECT * FROM type_p",$con);
?>
	<form  action="registro.php" enctype="multipart/form-data" method="post" >
			<h2>Nuevo producto</h2>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<div class="contenedor"><div id="marcoVistaPrevia"><img id="vistaPrevia" src="" alt="" /></div></div>
<div id='botonera'><input type="file" name="uploadedfile" id="archivo" accept="image/*"></input></div><br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
                <input type="text" id='nameajax' name='name' placeholder='Nombre'><br>
                <textarea name='description' id='descriptionajax' placeholder="Descripcion del producto"></textarea><br>
                <input type="text" id='precio_normalajax' name='precio_normal' placeholder="Precio Normal"><br>
                <input type="text" id='promoajax' name='promo' placeholder='promocion'><br>
	        <select name='type_h' onchange="dynamic_Select('sel_product.php',this.value)">
                        <option value="#">Seleccione un articulo</option>
<?php while($row_sql=mysql_fetch_array($sql_select)){echo"<option value='".$row_sql['id_type']."'>".$row_sql['tipo_product_c']."</option>";}?>
                </select><br>
                <div id="txtResult"></div>
                <div id="txtResult2"></div>
	        <input type="text" id='claveajax' name='clave' placeholder="clave del producto"><br>
                <input type="submit" name="Submit" value="Enviar">
		</form>



<div class="messages"></div>
    

   </body>
</html>
