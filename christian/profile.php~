<?php
session_start();
/*------lib------*/
include("lib/_sessionstartpro.php");
include("lib/randcode.php");
$con=bd_qqq();
$cd_user=$_SESSION['id'];
/*----fin lib----*/
/*---Llamada a la base de datos---*/
$call_db=mysql_query("SELECT * FROM user WHERE id_user='$cd_user'",$con);
$unitcall=mysql_fetch_object($call_db);
$call_months=mysql_query("SELECT * FROM months",$con);
/*-Cierre y vaciado de la llamada-*/
?>
<html>
   <head>
       <meta charset="UTF-8">
       <script src="js/mootools-core-1.3.2-full-compat-yc.js" type="text/javascript"></script>  
   </head>
   <body>
<?php echo "bienvenido ".$unitcall->nombre." ".$unitcall->ap_pat." ".$unitcall->ap_mat; ?>
       <a href="lib/_sessiondestroy.php"><button class="session_shopping"><b>Cerrar Sesión</b></button></a><br>
       <button id="lv1" value="<?php echo $cd_user;?>">Ver mis promociones</button>
       <button id="lv2" value="<?php echo $cd_user;?>">Ver mis certificados</button>
       <select id="lv3">
            <option value='0'>--Ver facturas del mes--</option>
            <?php while($cmonths=mysql_fetch_array($call_months)){echo "<option value=".$cmonths['id_month'].">".$cmonths['month']."</option>";} ?>
       </select>
       <div id="resultado"></div>
<?php echo "
<script language='javascript'>
/*-------------------------------------------*/	
	$(lv1).addEvent('click', function(){
                var dir= document.getElementById('lv1').value;
		var miJSON = JSON.encode(dir);
		//pondríamos esto para ver el JSON generado en la capa con id=resultado
		//$('resultado').set('html', '<pre>'+ miJSON + '</pre>');
		
		var miAjax = new Request({
			url: 'lib/dirphp.php',
			data: 'datos=' + miJSON,
			onSuccess: function(textoRespuesta){
				$('resultado').set('html', textoRespuesta);
			},
			onFailure: function(){
				$('resultado').set('html', 'fallo en la conexión Ajax');
			}
		})
		miAjax.send();
	});
/*-------------------------------------------*/
	$(lv2).addEvent('click', function(){
                var dir= document.getElementById('lv2').value;
		var miJSON = JSON.encode(dir);
		
		//pondríamos esto para ver el JSON generado en la capa con id=resultado
		//$('resultado').set('html', '<pre>'+ miJSON + '</pre>');
		
		var miAjax = new Request({
			url: 'lib/dirpdf.php',
			data: 'datos=' + miJSON,
			onSuccess: function(textoRespuesta){
				$('resultado').set('html', textoRespuesta);
			},
			onFailure: function(){
				$('resultado').set('html', 'fallo en la conexión Ajax');
			}
		})
		miAjax.send();
	});
/*-------------------------------------------*/
	$(lv3).addEvent('click', function(){
                var mdir = document.getElementById('lv3').value;
		var miMONTH =  JSON.encode(mdir);
		//pondríamos esto para ver el JSON generado en la capa con id=resultado
		//$('resultado').set('html', '<pre>'+ miJSON + '</pre>');
		
		var miAjax = new Request({
			url: 'lib/dirxml.php',
			data: 'month=' + miMONTH,
			onSuccess: function(textoRespuesta){
				$('resultado').set('html', textoRespuesta);
			},
			onFailure: function(){
				$('resultado').set('html', 'fallo en la conexión Ajax');
			}
		})
		miAjax.send();
	});
</script>"
?>
   </body>
</html>
