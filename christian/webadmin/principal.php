<?php session_start();
include("lock.php");
?>
<!DOCTYPE html>
<html>
<head>
          <meta charset="UTF-8">
          <script src="ajaxadmin.js" type="text/javascript"></script>
          <script src="jquery-1.10.2.js"></script>
          <link href="../css/popup.css" rel="stylesheet" type="text/css">
<script>
$(document).ready(function(){
           $('.capt_folio').click(function(){
                folioGrab= $(this).attr("id"); 
                $.post("_showfolium.php",{Xfolio:folioGrab},function (respuesta){ 
                $("#resultado").html(respuesta);});
                //------------------------------------//
                $('#ppshop').fadeIn('fast');
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
/*==========================================================================================================================================*/
	  $('.closeapproved').click(function(){
		$('#p_approved').fadeOut('fast');
		$('.popup-overlay').fadeOut('fast');
		return false;
	                                  });

           $('.p_approved').click(function(){
                index_px =$(this).attr("id");
                index_bin=$(this).attr("name");
                if(index_bin == 0){
                   text_bin="Desea Cancelar el Folio?";
                                  }
                if(index_bin == 1){
                   text_bin="Desea Aprobar el Folio?";
                                  }
                if(index_bin == 3){
                   text_bin="Desea Cerrar el Folio?";
                                  }
                
                $('#p_approved').fadeIn('fast');
                $('.yesok').append(text_bin+"<br><a href='principal.php'><button OnClick='admin_approved("+index_px+", y="+index_bin+");'>Si</button></a><br><a href='principal.php'><button>No</button></a>");
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");   
                                             });
/*==========================================================================================================================================*/
           $('.new_user_button').click(function(){
                //------------------------------------//
                $('#p_new_user').fadeIn('fast');
		$('.popup-overlay').fadeIn('fast');
		$('.popup-overlay').height($(window).height());
		return false;
                $("body").css("overflow", "hidden");   
                                             });

                             });
</script>

<style>
.input{
width:50px;
height:50px;
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
border-radius: 100px;
  }
.t2{background-color:green;}
.t1{background-color:yellow;}
.t0{background-color:red;}
</style>
</head>
<body>
<?php
include("../lib/randcode.php");
$con=bd_qqq();  
/*
mysql> DESCRIBE folium;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id_folio | int(11)     | NO   | PRI | NULL    | auto_increment |
| key_pago | varchar(45) | NO   |     | NULL    |                |
| active   | tinyint(1)  | NO   |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)
*/
echo "<button class='new_user_button'>Nuevo Administrador</button><a href='_sessiondestroy.php'><button>Cerrar Sesion</button></a>
      <a href='editproducts.php'><button>Editar Producto</button></a><a href='producto.php'><button>Nuevo Producto</button></a>";
echo "<div id='table_ox'><table  border='1'><tr><td><button OnClick='admin_chance(x=2);'>folio</button></td><td>llave</td><td><button OnClick='admin_chance(x=1);'>Estado</button></td><td>Deposito</td><td>Opciones</td></tr>";


   $sql_folio=mysql_query("SELECT * FROM folium WHERE active != 3",$con);

   while($row_folio=mysql_fetch_array($sql_folio)){
         $folium=createdtempfolio($row_folio['id_folio']);
                    echo "<tr><td><input type='button' value='".$folium."'class='capt_folio' id='".$row_folio['id_folio']."'></td><td>".$row_folio['key_pago']."</td><td> <div class='input t".$row_folio['active']."'></div></td><td>".$row_folio['deposit']."</td><td>
       <button class='p_approved' id='".$row_folio['id_folio']."' name='1'>Aprobar</button>
       <button class='p_approved' id='".$row_folio['id_folio']."' name='0'>Cancelar</button>
       <button class='p_approved' id='".$row_folio['id_folio']."' name='3'>Cerrar Folio</button></td></tr>";
                                                  }
echo "</table></div>";  
?>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<div class="popup" id="ppshop" style="display: none;">
    <div class="content-popup">
        <div class="close" id="closecart"><img src="../ecart_files/close.png"></div>
        <div> 
             <div id="resultado"></div>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<div class="popup" id="p_approved" style="display: none;">
    <div class="content-popup">
            <div class="close"><a href=""><img src="../ecart_files/close.png"></a></div>
        <div>
             <div class="yesok"></div>
             
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<div class="popup" id="p_new_user" style="display: none;">
    <div class="content-popup">
            <div class="close"><a href=""><img src="./ecart_files/close.png"></a></div>
        <div>
              <fieldset style="margin-top:50px;">
               <legend>Nuevo Administrador.</legend>
                  <form name="newadmin" onsubmit="new_admin(); return false">
                        <input type="text" name="ml" placeholder="Email">
                        <input type="password" name="psswrd_a" placeholder="Contraseña">
                        <input type="password" name="psswrd_b" placeholder="Confirmar Contraseña">
                               <select name=sel_priv>
                                       <option selected>Seleccione un privilegio</option>
                                       <option value="A1">A1</option>
                                       <option value="B1">B1</option>
                                       <option value="C1">C1</option>
                               </select>
                        <br><input type="submit" value="Guardar Usuario">
                  </form>
                  <div id="approved"></div>
               </fieldset>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<div class="popup-overlay"></div>
</body>
</html>
