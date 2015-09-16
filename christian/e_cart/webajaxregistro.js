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
		ajax.open("POST", "registrocart2.php",true);
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


                        });
/*00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000*/
    elementos=function()
			{
				
			
             if(sessionStorage.length>=1)
			 {	
                if($("#setting_buy").length=="")
				{
				$("#guardado_carrito").append("<div id='setting_buy'></div>");
				}
				var tab=document.getElementById('setting_buy').innerHTML='<table border=1><tr><td>Clave</td><td>Cantidad</td></tr>';
                   			 
				for(i=0;i<sessionStorage.length;i++)
				{
				producto=sessionStorage.getItem(sessionStorage.key(i));
				$("#setting_buy").append('<tr><td><input class=elim_ar id='+sessionStorage.key(i)+' type=button value=Eliminar></td><td>'+sessionStorage.key(i)+'</td><td><input type=text class=cant_art name='+sessionStorage.key(i)+' value='+producto+'></td></tr>');
				}
				tab.innerHTML='</table>';
				$("#setting_buy").append('<input class=bot_car type=button value=guardar_cambios><input class=bot_car type=button value=cancelar>');
				
				$(".elim_ar").click(function()
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
              			  
			}
	
	            menu_accion_car =function(m)
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
					for(i=0;i<sessionStorage.length;i++)
					           {
					producto=sessionStorage.getItem(sessionStorage.key(i));
					prod.data.push(new Array(sessionStorage.key(i),producto));
					           }
					$.ajax({
					type: "POST",
					cache: true,
					data:prod,
					url: "webregistrocarrito.php"
                                       
					});
                                               
					break;
				
				}
				}
	
	
	eliminar_art=function(x)
	{
	sessionStorage.removeItem(x);
        
	}
	cancelar_todo=function()
        {
	sessionStorage.clear();
	}	
	update_pedido=function (a,b)
	{
	sessionStorage.setItem(a,b);
	}
	
	$("#guardado_carrito").click(function()
	{
	elementos();
	});
	
	no_carrito=function()
        {	
	$("#guardado_carrito span").html(sessionStorage.length);
	}
	no_carrito();

	$('.a').click(function(){
				cartElement= $(this).attr('id');
				sessionStorage.setItem(cartElement,1);
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
		$('#ppcart').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
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
		ajax.open("POST", "_session.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('approved');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                           }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xusr="+Ajax_log_user+"&Xpssword="+Ajax_log_pass);
}
/*--------------------------------------------------------------------------------------------------------------------------------------------*/
