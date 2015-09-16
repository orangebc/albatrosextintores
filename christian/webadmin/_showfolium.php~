<?php
include("../lib/randcode.php");
$con=bd_qqq(); 

$feded=$_POST['Xfolio'];

/*mysql> describe vista_general_compras;
+-------------+-------------+------+-----+---------+-------+
| Field       | Type        | Null | Key | Default | Extra |
+-------------+-------------+------+-----+---------+-------+
| folio       | int(11)     | NO   |     | NULL    |       |
| nombre      | varchar(45) | NO   |     | NULL    |       |
| ap_pat      | varchar(45) | NO   |     | NULL    |       |
| name        | varchar(45) | NO   |     | NULL    |       |
| clave       | text        | NO   |     | NULL    |       |
| description | text        | NO   |     | NULL    |       |
| date_agree  | datetime    | NO   |     | NULL    |       |
| cant        | int(11)     | YES  |     | 0       |       |
+-------------+-------------+------+-----+---------+-------+
7 rows in set (0.00 sec)*/
       $sql_user_query=mysql_query("SELECT * FROM vista_general_compras WHERE folio=$feded",$con);
       $unique_query=mysql_fetch_object($sql_user_query);
       echo $unique_query->nombre." ".$unique_query->ap_pat;  


       $sql_folio_query=mysql_query("SELECT * FROM vista_general_compras WHERE folio=$feded",$con);
  

echo "<table border='1'>";
      echo "<tr><td>Nombre de Producto</td><td>Clave</td><td>Descripcion</td><td>Cantidad</td><td>Precio Por Unidad</td><td>Total por unidad</td></tr>";
      while($row_folio_query=mysql_fetch_array($sql_folio_query)){
             $total=$row_folio_query['cant'] * $row_folio_query['precio_normal'];
            echo"<tr><td>".$row_folio_query['name']."</td><td>".$row_folio_query['clave']."</td><td>".$row_folio_query['description']."</td><td>".$row_folio_query['cant']."</td><td>$".number_format($row_folio_query['precio_normal'])."</td><td>$".number_format($total)."</td></tr>";
              $complete_total=$complete_total+$total;
                                                     }
echo "</table>";
echo "Precio Total= $".number_format($complete_total);
?>
