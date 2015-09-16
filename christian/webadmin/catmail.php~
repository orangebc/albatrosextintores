<?php
/*session_start();
include("lock.php");*/
include("../lib/randcode.php");
include("f_sendmail.php");
$con=bd_qqq();
$rmail=mysql_query("SELECT id_user,email,nombre FROM user",$con);
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="js/multi/docs/js/jquery-2.1.1.min.js"></script>
        <link rel="stylesheet" href="js/multi/docs/css/bootstrap-3.2.0.min.css" type="text/css">
        <link rel="stylesheet" href="js/multi/docs/css/prettify.css" type="text/css">
        <script type="text/javascript" src="js/multi/docs/js/bootstrap-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/multi/docs/js/prettify.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/DragDropInteractions/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="js/multi/dist/css/bootstrap-multiselect.css" type="text/css">
        <script type="text/javascript" src="js/multi/dist/js/bootstrap-multiselect.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                $('#example-getting-started').multiselect();
                                             });
        </script>

        <script type="text/javascript">
                $(document).ready(function() {
                $('#example-getting-started').multiselect();
                                             });
        </script>

    </head>
    <body>
      <form action="" enctype="multipart/form-data" method="POST" >
       <input type="file" name="uploadedfile" accept="image/*"></input><br>
                                


                                <select id="example-getting-started" multiple="multiple" name='user_prom[]'>
<?php
                          while($sql_mail=mysql_fetch_array($rmail)){
                                echo "<option value='".$sql_mail['email']."'>".$sql_mail['nombre']." &lt;".$sql_mail['email']."&gt;</option>";
                                     }
?>
                                </select>
                                <input type="submit" value="Examinar...">

      </form>      
    <script src="js/multi/js/jquery.multi-select.js" type="text/javascript"></script>
    </body>
</html>

<?php
$examiner=$_POST['user_prom'];
if( $examiner ){
$checkboxes = isset($examiner) ? $examiner : array();

/*--------------------------------------------*/
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile']['size'];
$file=$_FILES['uploadedfile']['name'];
$file_name=$_FILES['uploadedfile']['name'];
$filetemp=$_FILES['uploadedfile']['tmp_name'];
$filetype=$_FILES['uploadedfile']['type'];

/*--------------------------------------------*/
foreach($checkboxes as $value){

if ($_FILES['uploadedfile']['size']>1000000)
{$msg=$msg."El archivo es mayor que 1Mb, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}
$shavalue=sha1($value);
if (!($_FILES['uploadedfile']['type'] =="image/jpg" OR $_FILES['uploadedfile']['type'] =="image/png"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}
$conet=viewfiles($shavalue); 
$add=$conet."/".$file_name;
if($uploadedfileload == "true"){
   copy($filetemp, $add);
   /*-------------------------------*/
    M_sathla_jpg($value);
   /*-------------------------------*/
   echo "Guardando <i class='fa fa-cog fa-spin' style='color:green; font-size:1em;'></i>
                     <meta http-equiv='Refresh' content='4;url='>";
                               }
else{echo $msg."<meta http-equiv='Refresh' content='4;url='>";}
                        }              
               }
?>

