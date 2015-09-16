<?php
include("../lib/randcode.php");
$con=bd_qqq();
$sql_months=mysql_query("SELECT * FROM months",$con);
$sql_user=mysql_query("SELECT id_user,nombre,ap_pat,email FROM user",$con);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Subir Facturas</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <select name="userXML">
<?php
       while($p_user=mysql_fetch_array($sql_user)){echo"<option value='".$p_user['email']."'>".$p_user['nombre']." ".$p_user['ap_pat']." &lt;".$p_user['email']."&gt;</option>";}
?>
        </select><br>
        <select name="monthsXML">
<?php
       while($p_months=mysql_fetch_array($sql_months)){echo"<option value='".$p_months['id_month']."'>".$p_months['month']."</option>";}
?>
        </select><br>
        <label>Archivo 1:</label><input type="file" name="userfile[]" /><br>
        <label>Archivo 2:</label><input type="file" name="userfile[]" /><br>
        <label>Archivo 3:</label><input type="file" name="userfile[]" /><br>
        <label>Archivo 4:</label><input type="file" name="userfile[]" /><br>
        <label>Archivo 5:</label><input type="file" name="userfile[]" /><br>
        <label>Archivo 6:</label><input type="file" name="userfile[]" /><br>
        <input type="submit" value="Subir archivos" />
    </form>
</body>
</html>
