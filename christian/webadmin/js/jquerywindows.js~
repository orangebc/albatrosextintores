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
//---funcion que muestra los datos por id---
function dexce(Xdes){
         	ajax=objetoAjax();
		ajax.open("POST", "_showproducts.php",true);
                ajax.onreadystatechange=function(){
	  	                        if (ajax.readyState==4){
		                        divResultado=document.getElementById('yesok');
				        divResultado.innerHTML = ajax.responseText
                                        }
                }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xusr_admin="+Xdes);
}
//----------------------------fin----------------

//----------------funcion que guarda los datos---
function editform(){       
                AjaxF1=document.formedit.Pname.value;
                AjaxF2=document.formedit.Pclave.value;
                AjaxF3=document.formedit.Ppn.value;
                AjaxF4=document.formedit.Ppp.value;
                AjaxF5=document.formedit.des.value;
                             
         	ajax=objetoAjax();
		ajax.open("POST", "_editproducts.php",true);
                ajax.onreadystatechange=function(){
	  	                        if (ajax.readyState==4){
		                        divResultado=document.getElementById('yesok1');
				        divResultado.innerHTML = ajax.responseText
                                        }
                }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("XAf1="+AjaxF1+"&XAf2="+AjaxF2+"&XAf3="+AjaxF3+"&XAf4="+AjaxF4+"&XAf5="+AjaxF5);
              
                    }
//---------------------------fin-----------------

//----------------funcion que guarda los datos---
function deleteproduct(delete_prod){       
         	ajax=objetoAjax();
		ajax.open("POST", "_showproducts2.php",true);
                ajax.onreadystatechange=function(){
	  	                        if (ajax.readyState==4){
		                        divResultado=document.getElementById('yesok');
				        divResultado.innerHTML = ajax.responseText
                                        }
                }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xdel="+delete_prod);
              
}
//---------------------------fin---


