<?php
session_start();
$filesset=$_SESSION['id'];
if($_POST){
	//$misDatosJSON = json_decode($_POST["datos"]);
        $misDatosXML = json_decode($_POST["month"]);
        $salida="profiles/".$filesset."/_XML/".$misDatosXML."/";

$directorio = opendir("../".$salida) or die ("<br>Acesso Denegado"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (!is_dir($archivo))//Descartar carpetas
    {
       echo "<a href='".$salida.$archivo ."'>$archivo</a><br />";
       $threm="TRUE";
    }
}
if($threm != "TRUE"){
        echo "No hay facturas que mostrar";
                    }

}else{
	echo "No recibí datos por POST";
}
?>
