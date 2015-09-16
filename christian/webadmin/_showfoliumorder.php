<?php
include("../lib/randcode.php");
$con=bd_qqq(); 
$feded=$_POST['Xrex'];
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
echo "
<table border='1'><tr><td><button OnClick='admin_chance(x=2);'>folio</button></td><td>llave</td><td><button OnClick='admin_chance(x=1);'>Estado</button></td><td>Deposito</td><td>Opciones</td></tr>";

if($feded == 1){
   $sql_folio=mysql_query("SELECT * FROM folium ORDER BY active desc",$con);
   while($row_folio=mysql_fetch_array($sql_folio)){
         $folium=createdtempfolio($row_folio['id_folio']);
                    echo "<tr><td><input type='button' value='".$folium."'class='capt_folio' id='".$row_folio['id_folio']."'></td><td>".$row_folio['key_pago']."</td><td> <div class='input t".$row_folio['active']."'></div></td><td>".$row_folio['deposit']."</td><td>
       <button OnClick='admin_approved(".$row_folio['id_folio'].", y=1);'>Aprobar</button>
       <button OnClick='admin_approved(".$row_folio['id_folio'].", y=0);'>Cancelar</button></td></tr>";
                                                  }


}
if($feded == 2){
   $sql_folio=mysql_query("SELECT * FROM folium ORDER BY id_folio",$con);
   while($row_folio=mysql_fetch_array($sql_folio)){
         $folium=createdtempfolio($row_folio['id_folio']);
                    echo "<tr><td><input type='button' value='".$folium."'class='capt_folio' id='".$row_folio['id_folio']."'></td><td>".$row_folio['key_pago']."</td><td> <div class='input t".$row_folio['active']."'></div></td><td>".$row_folio['deposit']."</td><td>
       <button OnClick='admin_approved(".$row_folio['id_folio'].", y=1);'>Aprobar</button>
       <button OnClick='admin_approved(".$row_folio['id_folio'].", y=0);'>Cancelar</button></td></tr>";
                    
                                                  }
}
echo "</table>";
   ?>
