<?php
session_start();
include("lock.php");
include("../lib/randcode.php");
$con=bd_qqq(); 
$dessx=$_POST['Xusr_admin'];
$selunit_sql=mysql_query("SELECT * FROM vista_general_products WHERE id_products=$dessx",$con);
$susql=mysql_fetch_object($selunit_sql);


            echo "<form action='_editproducts.php' enctype='multipart/form-data' method='post'>";
            echo "<table border='1' width='600'>";
            echo "<tr><td rowspan='5'><input type='file' name='uploadedfile' id='archivo' accept='image/*'></input></td><td>Nombre</td><td><input type='text' name='Pname' value='".$susql->name."'></td></tr>";
            echo "<tr><td>Clave</td><td><input type='text' 
name='Pclave' value='".$susql->clave."'></td></tr>";
            echo "<tr><td>Precio Normal</td><td><input type='text' name='Ppn' value='".$susql->precio_normal."'></td></tr>";
            echo "<tr><td>Precio Promocion</td><td><input type='text' name='Ppp'value='".$susql->promo."'></td></tr>";
            echo "<tr><td>descripcion</td><td><textarea cols='15' name='Pdes' rows='10'>".$susql->description."</textarea></td></tr>";
            echo "</table><input type='hidden' name='h_id' value='".$dessx."'><input type='submit' value='Terminar edicion'></form>";

/*
mysql> describe products;
+---------------+-------------+------+-----+---------+----------------+
| Field         | Type        | Null | Key | Default | Extra          |
+---------------+-------------+------+-----+---------+----------------+
| id_products   | int(11)     | NO   | PRI | NULL    | auto_increment |
| image         | text        | NO   |     | NULL    |                |
| description   | text        | NO   |     | NULL    |                |
| tipo_producto | int(11)     | NO   | MUL | NULL    |                |
| precio_normal | float       | NO   |     | NULL    |                |
| promo         | float       | NO   |     | NULL    |                |
| clave         | varchar(45) | NO   |     | NULL    |                |
| date_up_item  | datetime    | NO   |     | NULL    |                |
| name          | varchar(45) | NO   |     | NULL    |                |
+---------------+-------------+------+-----+---------+----------------+
9 rows in set (0.00 sec)
*/


?>
            



