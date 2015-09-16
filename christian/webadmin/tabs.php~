<style>
* {
 font-family: Arial, sans;
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 -moz-box-sizing: border-box;
}
h1 {
 margin: 1em 0;
 text-align: center;
}
#container {
 margin: 0 auto;
 width: 50%; /* Ancho del contenedor */
}
#container input {
 height: 2.5em;
 visibility: hidden;
}
#container label {
 background: #f9f9f9; /* Fondo de las pestañas */
 border-radius: .25em .25em 0 0;
 color: #888; /* Color del texto de las pestañas */
 cursor: pointer;
 display: block;
 float: left;
 font-size: 1em; /* Tamaño del texto de las pestañas */
 height: 2.5em;
 line-height: 2.5em;
 margin-right: .25em;
 padding: 0 1.5em;
 text-align: center;
}
#container input:hover + label {
 background: #ddd; /* Fondo de las pestañas al pasar el cursor por encima */
 color: #666; /* Color del texto de las pestañas al pasar el cursor por encima */
}
#container input:checked + label {
 background: #f1f1f1; /* Fondo de las pestañas al presionar */
 color: #444; /* Color de las pestañas al presionar */
 position: relative;
 z-index: 6;
}
#content {
 background: #f1f1f1; /* Fondo del contenido */
 border-radius: 0 .25em .25em .25em;
 min-height: 20em; /* Alto del contenido */
 position: relative;
 width: 100%;
 z-index: 5;
}
#content div {
 opacity: 0;
 padding: 1.5em;
 position: absolute;
 z-index: -100;
}
#content-1 p {
 clear: both;
 margin-bottom: 1em;
}
#content-1 p.left img {
 float: left;
 margin-right: 1em;
}
#content-1 p.last {
 margin-bottom: 0;
}
#content-2 p {
 float: left;
 width: 48.5%;
}
#content-2 p.column-right {
 margin-left: 3%;
}
#content-2 p img {
 display: block;
 margin: 0 auto 1em auto;
}
#content-3 p,
#content-3 ul {
 margin-bottom: 1em;
}
#content-3 ul {
 margin-left: 2em;
}
#container input#tab-1:checked ~ #content #content-1,
#container input#tab-2:checked ~ #content #content-2,
#container input#tab-3:checked ~ #content #content-3 {
 opacity: 1;
 z-index: 100;
}
</style>

 <div id="container">
  <!--Pestaña 1 activa por defecto-->
  <input id="tab-1" type="radio" name="tab-group" checked="checked" />
  <label for="tab-1">Pestaña 1</label>
  <!--Pestaña 2 inactiva por defecto-->
  <input id="tab-2" type="radio" name="tab-group" />
  <label for="tab-2">Pestaña 2</label>
  <!--Pestaña 3 inactiva por defecto-->
  <input id="tab-3" type="radio" name="tab-group" />
  <label for="tab-3">Pestaña 3</label>
  <!--Contenido a mostrar/ocultar-->
  <div id="content">
   <!--Contenido de la Pestaña 1-->
   <div id="content-1">
<!------------------------------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
          <script src="ajaxadmin.js" type="text/javascript"></script>
          <script src="../jquery-ui-1.10.4/jquery-1.10.2.js"></script>
<script>
$(document).ready(function(){
           $('.capt_folio').click(function(){
                folioGrab= $(this).attr("id"); 
                $.post("_showfolium.php",{Xfolio:folioGrab},function (respuesta){ 
                $("#resultado").html(respuesta);});   
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
.t1{background-color:green;}
.t0{background-color:red;}
</style>
</head>
<body>
<?php
include("../randcode.php");
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
echo "<table border='1'><tr><td>folio</td><td>llave</td><td>Estado</td></tr>";
   $sql_folio=mysql_query("SELECT * FROM folium",$con);
   while($row_folio=mysql_fetch_array($sql_folio)){
         $folium=createdtempfolio($row_folio['id_folio']);
                    echo "<tr><td><input type='button' value='".$folium."'class='capt_folio' id='".$row_folio['id_folio']."'></td><td>".$row_folio['key_pago']."</td><td> <div class='input t".$row_folio['active']."'></div> </td></tr>";
                                                  }
echo "</table>";  
   
echo "<div id='resultado'></div>" 
?>
</body>
</html>
<!-------------------------------------------------------------------------------------------------------------------------------------------> 
   </div>
   <!--Contenido de la Pestaña 2-->
   <div id="content-2"> </div>
   <!--Contenido de la Pestaña 3-->
   <div id="content-3"> </div>
  
   </div>
 </div>
