function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
/*----------------------------------------------------------------------------------------------------------------------------------------------
+--------------+--------------+------+-----+---------+-------+
| Field        | Type         | Null | Key | Default | Extra |
+--------------+--------------+------+-----+---------+-------+
| id_user      | char(50)     | NO   | PRI | NULL    |       |
| nombre       | varchar(45)  | NO   |     | NULL    |       |
| ap_pat       | varchar(45)  | NO   |     | NULL    |       |
| ap_mat       | varchar(45)  | NO   |     | NULL    |       |
| email        | varchar(127) | NO   |     | NULL    |       |
| empresa      | varchar(45)  | NO   |     | NULL    |       |
| date_ingreso | datetime     | NO   |     | NULL    |       |
| privilegios  | int(11)      | NO   |     | NULL    |       |
| activity     | int(11)      | NO   |     | NULL    |       |
+--------------+--------------+------+-----+---------+-------+
----------------------------------------------------------------------------------------------------------------------------------------------*/
function SaveNewUser(){
                       //divResultado = document.getElementById('resultado');
                       Ajax_Save_1=document.new_user.ml.value;
                       Ajax_Save_2=document.new_user.nm.value;
                       Ajax_Save_3=document.new_user.p_pt.value;
                       Ajax_Save_4=document.new_user.p_mt.value;
                       Ajax_Save_5=document.new_user.mprs.value;
                       Ajax_Save_6=document.new_user.psswrd.value;
                       Ajax_Save_7=document.new_user.psswrd_confirm.value;
                      
        /*ajax=objetoAjax();*/
        var xmlhttp;
		if (window.XMLHttpRequest)
			{
			xmlhttp=new XMLHttpRequest();
			}
		else
			{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
		ajax=xmlhttp;
		ajax.open("POST", "lib/registrocart2.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('save_user');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                           }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("Ajax_Save_1="+Ajax_Save_1+"&Ajax_Save_2="+Ajax_Save_2+"&Ajax_Save_3="+Ajax_Save_3+"&Ajax_Save_4="+Ajax_Save_4+"&Ajax_Save_5="+Ajax_Save_5+"&Ajax_Save_6="+Ajax_Save_6+"&Ajax_Save_7="+Ajax_Save_7);
}
/*--------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
/*00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000*/
$('.grab').click(function(){

                cartGrab= $(this).attr("id"); 
                $.post("res_e-cart.php",{Xgrab:cartGrab},function (respuesta){
                $("#resultado").html(respuesta);});   
       
   		$('#ppcart').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");

       $('.elim_rar').click(function(){
	        item_delete=$(this).attr('id');
                localStorage.removeItem(item_delete);
				});

$(".bot_car").click(function(){
				  var accion_car=$(this).val();
				  menu_accion_car(accion_car);
				});
menu_accion_car =function(m){
			 switch(m){
case Cambiar:
       $(".cant_art").each(function(){
		 var del_art=$(this).attr("name");
		 var nuevo_valor=$(this).val();
                 localStorage.setItem(del_art,nuevo_valor);    
				    });
     break;

                                  }
			     }
                        });
/*00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000*/
    /*elementos=function()
			{
				
			
             if(localStorage.length>=1)
			 {	
                if($("#setting_buy").length=="")
				{
				$("#guardado_carrito").append("<div id='setting_buy'></div>");
				}

                   			 


				$("#setting_buy").append('<input class=bot_car type=button value=guardar_cambios><input class=bot_car type=button value=cancelar>');
				
				$(".elim").click(function()
				{
				var item_delete=$(this).attr("id");
				eliminar_art(item_delete);
				});
				
				$(".bot_car").click(function(){
				  var accion_car=$(this).val();
				  menu_accion_car(accion_car);
				});
				
				
              }
			  else
			  {
			  alert("No hay articulos e carrito");
			  }
              			  
			}*/
	
	    /*        menu_accion_car =function(m)
				{
				switch(m)
				{
					case "guardar_cambios":
					$(".cant_art").each(function()
						{
						var del_art=$(this).attr("name");
						var nuevo_valor=$(this).val();
						update_pedido(del_art,nuevo_valor);     
						});
                                                
				    break;
					case "cancelar":
				        cancelar_todo();	
					console.log("cancelar");
	 				break;
					case "confirmar":
					prod = {data:[]};
					for(i=0;i<localStorage.length;i++)
					           {
					producto=localStorage.getItem(localStorage.key(i));
					prod.data.push(new Array(localStorage.key(i),producto));
					           }
					$.ajax({
					type: "POST",
					cache: true,
					data:prod,
					url: "lib/webregistrocarrito.php"
                                       
					});
                                               
					break;
				
				}
				} 
	
	
	eliminar_art=function(x)
	{
	localStorage.removeItem(x);
        }

	cancelar_todo=function()
        {
	localStorage.clear();
	}	
	update_pedido=function (a,b)
	{
	localStorage.setItem(a,b);
	}
	
	$("#guardado_carrito").click(function()
	{
	elementos();
	});*/
	no_carrito=function()
        {	
	$("#guardado_carrito span").html(localStorage.length);
	}
          no_carrito();
	$('.a').click(function(){
				cartElement= $(this).attr('id');
				localStorage.setItem(cartElement,1);
				no_carrito();
                                });  

	
 
/*00000000000000000000000000000000000000000000000000000000000--Cerrar Ventanas--00000000000000000000000000000000000000000000000000000000000000*/
        $('#_session').click(function(){
                $('#ppsession').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");	
        });

        $('#closesession').click(function(){
		$('#ppsession').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
	});
	$('#closecart').click(function(){
		$('#ppshop').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
	});
       $('.cat_boxcont').click(function(){
                catSelect= $(this).attr("id"); 
                $.post("lib/consulta.php",{XcatS:catSelect},function (respuesta){
                $("#divselect").html(respuesta);});  
                       });

/*00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000*/
});
/*--------------------------------------------------------------------------------------------------------------------------------------------*/
function LoginUser(){
                       Ajax_log_user=document.old_user.ml.value;
                       Ajax_log_pass=document.old_user.psswrd.value;
        var xmlhttp;
		if (window.XMLHttpRequest)
			{
			xmlhttp=new XMLHttpRequest();
			}
		else
			{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
		ajax=xmlhttp;
		ajax.open("POST", "lib/_session.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('approved');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                           }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xusr="+Ajax_log_user+"&Xpssword="+Ajax_log_pass);
}
/*-------------------------------------------------------------------------------------------------------------------------------------------*/
function aproove_datos(){
                       Ajax_datos_mail=document.prodata.ml.value;
                       Ajax_datos_key=document.prodata.kpy.value;
                       Ajax_datos_dc=document.prodata.deposite_c.value;
        var xmlhttp;
		if (window.XMLHttpRequest)
			{
			xmlhttp=new XMLHttpRequest();
			}
		else
			{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
		ajax=xmlhttp;
		ajax.open("POST", "lib/_aproved.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('key_approved');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                           }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xmail="+Ajax_datos_mail+"&Xkey="+Ajax_datos_key+"&Xdep="+Ajax_datos_dc);
}

function show_data(){
                                        prod = {data:[]};
					for(i=0;i<localStorage.length;i++)
					           {
					producto=localStorage.getItem(localStorage.key(i));
					prod.data.push(new Array(localStorage.key(i),producto));
					           }

					$.ajax({
					type: "POST",
					cache: true,
					data:prod,
					url: "lib/selectbynumber.php",
                                              })
                                        .done(function( html ) {
                                         $( "#show_table_div" ).append( html );
                                                               });    

                $('#ppshop').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");

                  }			

function confirm_shopping(){
                                        prod = {data:[]};
					for(i=0;i<localStorage.length;i++)
					           {
					producto=localStorage.getItem(localStorage.key(i));
					prod.data.push(new Array(localStorage.key(i),producto));
					           }

					$.ajax({
					type: "POST",
					cache: true,
					data:prod,
					url: "lib/webregistrocarrito.php",
                                              })
                                        .done(function() {
                                             $( "#show_table_div2" ).append( '<div style=green;>Guardado Correctamente</div>' );
                                                               });
                                             
                          }

                     
	        
                                 
                                             
	
