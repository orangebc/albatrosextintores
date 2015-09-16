<?php
include("../lib/randcode.php");
$con=bd_qqq();
date_default_timezone_set('UTC');  
     $admin_azatoth=$_POST['Xs_admin_azatoth'];
     $psswrd_azatoth=$_POST['Xs_pss_azatoth'];
     $psswrd_conf_azatoth=$_POST['Xs_pssconf_azatoth'];
     $psswrd_priv_azatoth=$_POST['Xs_privilegie_azatoth'];

     $date_azatoth=date("Y-m-d");

             if($psswrd_azatoth == $psswrd_conf_azatoth){
                $id_azatoth=sha1($admin_azatoth);
                $new_pss_azatoth=sha1($psswrd_azatoth);
                $sql_new_admin=mysql_query("INSERT INTO admin_session(id_admin,name_admin,psswrd_admin,date_up,admin_active,level_admin) VALUES ('$id_azatoth','$admin_azatoth','$new_pss_azatoth','$date_azatoth','1','$psswrd_priv_azatoth')",$con);
                echo "<div style='color:green;'>Guardado Correctamente</div>" ;
                                                         }
             else{echo "<div style='color:red'>Error: Contraseñas no coinciden</div>";}

?>
