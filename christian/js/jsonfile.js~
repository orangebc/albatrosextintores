/*-------------------------------------------*/	
	$(lv1).addEvent('click', function(){
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
	$(lv3).addEvent("click", function(){
                var mdir = document.getElementById("lv3").value;
		var miJSON = JSON.encode(dir);
		var miMONTH =  JSON.encode(mdir);
		//pondríamos esto para ver el JSON generado en la capa con id=resultado
		//$('resultado').set('html', '<pre>'+ miJSON + '</pre>');
		
		var miAjax = new Request({
			url: "lib/dirxml.php",
			data: "month=" + miMONTH,
			onSuccess: function(textoRespuesta){
				$("resultado").set("html", textoRespuesta);
			},
			onFailure: function(){
				$("resultado").set("html", "fallo en la conexión Ajax");
			}
		})
		miAjax.send();
	});

