<?php
$data=$_GET['ch'];
include('../lib/randcode.php');
$con=bd_qqq();

$sql_type=mysql_query("SELECT * FROM cant_p WHERE cant_element = $data",$con);
echo"<select name='cantidad'><option selected>Seleccione Unidad</option>";
while($row_type=mysql_fetch_array($sql_type)){
                echo"<option value='".$row_type['id_cantp']."'>".$row_type['cant_pcol']."</option>";
                                             }
echo"</select>";
?>
