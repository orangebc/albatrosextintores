<?php
$data=$_GET['ch'];
include('../lib/randcode.php');
$con=bd_qqq();

$sql_type=mysql_query("SELECT * FROM element_p WHERE element_cant = $data",$con);
echo"<select name='element'  onchange=dynamic_Select_2('_sel_cant.php',this.value)><option selected>Seleccione Caracteristicas</option>";
while($row_type=mysql_fetch_array($sql_type)){
                echo"<option value='".$row_type['id_elementp']."'>".$row_type['element']."</option>";
                                             }
echo"</select>";
?>
