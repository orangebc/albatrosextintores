/*============================================================================================================================================*/
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
/*============================================================================================================================================*/
function log_admin(){
                       Ajax_log_user=document.logadmin.super_admin.value;
                       Ajax_log_pass=document.logadmin.super_psswrd.value;
			
	ajax=objetoAjax();
		ajax.open("POST", "_sessionadmin.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('approved');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xusr_admin="+Ajax_log_user+"&Xpssword_admin="+Ajax_log_pass);

                    }
/*============================================================================================================================================*/
function admin_chance(Ajax_val){

        ajax=objetoAjax();
		ajax.open("POST", "_showfoliumorder.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('table_ox');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xrex="+Ajax_val);
                                      
}
/*============================================================================================================================================*/
function admin_approved(ubbo,sathla){

          ajax=objetoAjax();
		ajax.open("POST", "_sendmailapproved.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('resultadoqwerfv');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xubbo="+ubbo+"&Xsathla="+sathla);
                                      
}
/*============================================================================================================================================*/
function new_admin(){
                       Ajax_new_user=document.newadmin.ml.value;
                       Ajax_new_pass=document.newadmin.psswrd_a.value;
                       Ajax_new_conf_pass=document.newadmin.psswrd_b.value;
                       Ajax_new_privilegie=document.newadmin.sel_priv.value;


			
		ajax=objetoAjax();
		ajax.open("POST", "_newuseradmin.php",true);

 if(Ajax_new_user=="" || Ajax_new_pass==""){alert("No deje campos vacios");}
    else{
              ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('approved');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
        
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xs_admin_azatoth="+Ajax_new_user+"&Xs_pss_azatoth="+Ajax_new_pass+"&Xs_pssconf_azatoth="+Ajax_new_conf_pass+"&Xs_privilegie_azatoth="+Ajax_new_privilegie);
       }
}
/*============================================================================================================================================*/
function show_users(X_sw_usr){

        ajax=objetoAjax();
		ajax.open("POST", "show_user.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('result_user');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xsw="+X_sw_usr);
                             }
/*============================================================================================================================================*/
function shw_hstr(X_sw_hst){

        ajax=objetoAjax();
		ajax.open("POST", "show_history.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('result_user');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Xsw_hst="+X_sw_hst);
                             }
/*============================================================================================================================================*/
function new_alert(){
                $('#ch_pss').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");  
                    }
/*============================================================================================================================================*/
function new_password(){
                       Ajax_npss=document.npss.super_admin.value;
                       Ajax_npss=document.npss.super_psswrd.value;
                       id_npss= $(this).attr("id"); 
		
	ajax=objetoAjax();
		ajax.open("POST", "show_user.php",true);
        ajax.onreadystatechange=function() {
	  	                if (ajax.readyState==4) {
		                divResultado=document.getElementById('approved');
						divResultado.innerHTML = ajax.responseText
                                                        }
                                            }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("XN_pss="+Ajax_npss+"&XC_npss="+Ajax_npss+"&NID_npss="+id_npss);
                       }
/*============================================================================================================================================*/
function dynamic_Select(ajax_page, tipo){
         $( document ).ready(function() {
       
             $.ajax({
               type:"GET",
               url:ajax_page,
               data:"ch=" + tipo,
                   success:function(html){
                          $("#wow1").html(html);      
                                         }
                    });                        
         });
}
/*=============================================================================================================================================*/
function dynamic_Select_2(ajax_page, tipo){
         $( document ).ready(function() {
       
             $.ajax({
               type:"GET",
               url:ajax_page,
               data:"ch=" + tipo,
                   success:function(html){
                          $("#wow2").html(html);      
                                         }
                    });                        
         });
}
/*=============================================================================================================================================*/

