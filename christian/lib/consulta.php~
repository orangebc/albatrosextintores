<?php

include("randcode.php");
$con=bd_qqq(); 
$psel=$_POST['XcatS'];
if($psel == ""){$psel=1;}
$sql=mysql_query("SELECT * FROM vista_general_products WHERE id_type=$psel",$con); 

echo "<div class='cont_box'>";
  while($row = mysql_fetch_array($sql)){
  $cont=$cont+1;
       echo "
     <div class='mod_box'>
<div class='conttitle'>
<div class='title'>".$row['name']."</div>
<div class='text'>".$row['clave']."</div>
</div>
<div class='image_prop' style='background-image:url(images/catalogue/".$row['image'].");background-size:cover;'><img src='' width='100%' height='auto'></div>
<div class='price'>Normal<br>".$row['precio_normal']."</div>
<div class='prom'>Promoción<br>".$row['promo']."</div>
<div class='linehor'></div>

<div class='contagregar'>
<div class='agregar'>Agregar a carrito</div><div class='iconcar a' id='".$row['id_products']."'><img src='css/ALBATROSC/image/shoppingcart.jpg' width='100%' height='auto'></div>
</div>
<div class='linehor'></div>
<div class='contagregar'>
<div class='agregar'>Ver ficha técnica</div>
<div class='iconcar boton_menu_open bXX".$row['id_products']."' id='a".$row['id_products']."'> <img src='css/ALBATROSC/image/vermas.jpg' width='100%' height='auto'> </div>
<div class='iconcar boton_menu_close ba".$row['id_products']."' id='X".$row['id_products']."'> <img src='css/ALBATROSC/image/close.jpg' width='100%' height='auto'> </div>
</div>
<div class='scroll_datos opena".$row['id_products']." closeX".$row['id_products']."'>
<div class='descripcion'>".$row['description']."</div>
</div>
      </div>
";
  }
echo "<div class='notice_box'>Se necesita una resolucion de 768px o superior para poder realizar una compra</div>";
echo"</div>";

?>
