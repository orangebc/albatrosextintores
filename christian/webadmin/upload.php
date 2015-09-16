<?php
//solo se puede acceder si es una peticion post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //llamamos a la clase multiupload
    require_once("multiload.php");
    //array de campos file del formulario
    $files = $_FILES['userfile']['name'];
    $userM = $_POST['userXML'];
    $shaUser=sha1($userM);
    $MonthM = $_POST['monthsXML'];
    $dirfile = "../profiles/".$shaUser."/_XML/".$MonthM."/";
    //creamos una nueva instancia de la clase multiupload
    $upload = new Multiupload();
    //llamamos a la funcion upFiles y le pasamos el array de campos file del formulario
    $isUpload = $upload->upFiles($files,$dirfile);

    /*-------Inicia proceso de envio de correo------*/
    include("f_sendmail.php");
    $mail_send=M_sathla_xml($userM);
    echo "<br>".$mail_send;
    /*----------------------------------------------*/    
}else{
    throw new Exception("Error: Proceso no completado", 1);
}
?>
