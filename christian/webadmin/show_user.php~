<script>
$(document).ready(function(){
           $('.change_psswrd').click(function(){
               // folioGrab= $(this).attr("id"); 
              //  $.post("_showfolium.php",{Xfolio:folioGrab},function (respuesta){ 
               // $("#resultado").html(respuesta);});
                //------------------------------------//
                $('#ch_pss').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");   
                                             });
	  $('#closecart').click(function(){
		$('#ppshop').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
	                                  });
                             });
</script>
<?php
include("../lib/randcode.php");
$con=bd_qqq();
$P_shw=$_POST['Xsw'];
//$P_shw_hstr=$_POST['Xsw_hst'];
/*==============================================================================================================================================*/
if($P_shw == 1){
             $sql_show_users=mysql_query("SELECT * FROM user",$con);
echo"<table border='1'><tr><td>Usuario</td><td>Correo</td><td>Empresa</td><td>Fecha de Alta</td><td>Estado</td><td>Opciones</td></tr>";
      while($row_show_users=mysql_fetch_array($sql_show_users)){
          echo"<tr><td>".$row_show_users['nombre']." ".$row_show_users['ap_pat']." ".$row_show_users['ap_mat']."</td><td>".$row_show_users['email']."</td><td>".$row_show_users['empresa']."</td><td>".$row_show_users['date_ingreso']."</td><td>".$row_show_users['activity']."</td><td>";

printf("<button onclick=shw_hstr('%s');>Ver historial</button><button>Dar de Baja</button></td></tr>",$row_show_users['id_user']);
                                                              }
echo"</table>";
}
/*==============================================================================================================================================*/
if($P_shw == 2){
             $sql_show_users=mysql_query("SELECT * FROM admin_session",$con);
echo"<table border='1'><tr><td>Administrador</td><td>Fecha de Inicio</td><td>Estado</td><td>Opciones</td></tr>";
      while($row_show_users=mysql_fetch_array($sql_show_users)){
          echo"<tr><td>".$row_show_users['name_admin']."</td><td>".$row_show_users['date_up']."</td><td>".$row_show_users['admin_active']."</td><td><button Onclick=new_alert(); id=".$row_show_users['id_admin'].">Cambiar Contraseña</button><button>Cambiar Privilegios</button><button>Dar de Baja</button></td></tr>";
                                                               }
echo"</table>";
}
/*==============================================================================================================================================*/
?>
