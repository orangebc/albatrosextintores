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
echo "<table border='1'>";
echo "<tr><td>Nombre</td><td>Clave</td><td>Precio Normal</td><td>Promocion</td><td>Cantidad</td><td>Total</td><td></td></tr>";
for($i=0;$i<count($reg);$i++)
        { 
          $sql=mysql_query("SELECT * FROM products  WHERE id_products=".$reg[$i][0],$con);
          $row_sql=mysql_fetch_array($sql);
          $cat_total_per_item=($row_sql['precio_normal']-$row_sql['promo'])*$reg[$i][1];
          $sum_cat_total_per_item=$sum_cat_total_per_item+$cat_total_per_item;
          echo "<tr><td>".$row_sql['name']."</td><td>".$row_sql['clave']."</td><td>MX $".number_format($row_sql['precio_normal'],2)."</td><td>MX $".number_format($row_sql['promo'],2)."</td><td><input type='number' class='cant_art' id='".$reg[$i][0]."' value='".$reg[$i][1]."'></td><td>MX $".number_format($cat_total_per_item,2)."</td><td>
       <input class='elim_rar' id='".$reg[$i][0]."' type='button' value='Eliminar'></td>
       </tr>";
        }
echo "</table>";
echo "total: MX $".number_format($sum_cat_total_per_item,2)."<br>";
echo "<input type='button' class='bot_car' value='Cambiar'>"
?>
