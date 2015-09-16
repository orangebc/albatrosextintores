<?php



function catalogo_info(){
              $cat_1=$_POST['id_producto'];
              $cat_2=$_POST['name'];
              $cat_3=$_POST['categoria'];
              $cat_4=$_POST['descripcion'];   
              $cat_5=$_POST['precio_normal'];   
              $cat_6=$_POST['promos'];  
                      $sum_total=$cat_1+$cat_2+$cat_3+$cat_4+$cat_5+$cat_6;
                      return "Guardando ".$sum_total;
                                                                 }
$imprimir_this = catalogo_info();
echo $imprimir_this;
?>
