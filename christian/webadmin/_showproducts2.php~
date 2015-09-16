<?php
session_start();
include("lock.php");
include("../lib/randcode.php");
$Pdelete=$_POST['Xdel'];
$con=bd_qqq();
 
$sel_sql=mysql_query("DELETE FROM products WHERE id_products=$Pdelete",$con);
     printf("<b style='color:red; font-size:2em;'>Elimiando  <i class='fa fa-cog fa-spin' style='color:red; font-size:1em;'></i></b>
             <meta http-equiv='Refresh' content='3;url=editproducts.php'>
            ");
?>
