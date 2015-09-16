<head>
                    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
                    <script src="js/webajaxregistro.js"></script>
</head>
<?php
include('randcode.php');
$con=bd_qqq();
  $reg=$_POST["data"];
/*
mysql> describe products;
+---------------+-------------+------+-----+---------+----------------+
| Field         | Type        | Null | Key | Default | Extra          |
+---------------+-------------+------+-----+---------+----------------+
| id_products   | int(11)     | NO   | PRI | NULL    | auto_increment |
| image         | text        | NO   |     | NULL    |                |
| description   | text        | NO   |     | NULL    |                |
| tipo_producto | int(11)     | NO   |     | NULL    |                |
| precio_normal | float       | NO   |     | NULL    |                |
| promo         | float       | NO   |     | NULL    |                |
| clave         | varchar(45) | NO   |     | NULL    |                |
| date_up_item  | datetime    | NO   |     | NULL    |                |
| name          | varchar(45) | NO   |     | NULL    |                |
+---------------+-------------+------+-----+---------+----------------+

*/

echo"
<div class='contlista'>
<div class='campo c1a'>Nombre<br>del Producto</div>
<div class='campo c2a'>Clave<br>del Producto</div>
<div class='campo c1b'>Cantidad<br>Comprada</div>
<div class='campo c2a'>Precio<br>Unitario</div>
<div class='campo c1'>Precio<br>Promoción</div>
<div class='campo c2a'>Importe<br>Total</div>
<div class='campo c1b'>Borrar de<br>mi Pedido</div>
<div class='lih'></div>
</div>
";

for($i=0;$i<count($reg);$i++)
        { 
          $sql=mysql_query("SELECT * FROM products  WHERE id_products=".$reg[$i][0],$con);
          $row_sql=mysql_fetch_array($sql);
          $cat_total_per_item=($row_sql['precio_normal']-$row_sql['promo'])*$reg[$i][1];
          $sum_cat_total_per_item=$sum_cat_total_per_item+$cat_total_per_item;
echo"<div class='contlista'>";
         
       echo "<div class='campo c3'>".$row_sql['name']."</div><div class='campo c4'>".$row_sql['clave']."</div><div class='campo c5'>MX $".number_format($row_sql['precio_normal'],2)."</div><div class='campo c6'>MX $".number_format($row_sql['promo'],2)."</div><div class='campo c7'><input type='number' class='cant_art' id='".$reg[$i][0]."' value='".$reg[$i][1]."'style='width:50px; text-align:center; background-color:#DADADA;color:#000; border:0px;'></div><div class='campo c8'>MX $".number_format($cat_total_per_item,2)."</div><div class='campo c9'>
       <div class='elim_rar' id='".$reg[$i][0]."'></div><img src='css/ALBATROSC/image/icontrash.png' width='25%' height='auto'></div>";

echo"</div><div class='lih'></div>";
        }

echo "total: MX $".number_format($sum_cat_total_per_item,2)."<br>";
echo "<input type='button' class='bot_car' value='Cambiar'>";

?>
