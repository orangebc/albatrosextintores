<?php
if($_POST){
	$misDatosJSON = json_decode($_POST["datos"]);
        $salida="profiles/".$misDatosJSON."/_JPG/";
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
        echo "No hay promociones que mostrar";
                    }

}else{
	echo "No recibí datos por POST";
}
?>
