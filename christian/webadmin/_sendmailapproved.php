<?php
include("f_sendmail.php");
$P_ubbo=$_POST['Xubbo'];
$P_sathla=$_POST['Xsathla'];

include("../lib/randcode.php");
$con=bd_qqq();  

            $MS_sathla=mysql_query("SELECT client FROM e_cart WHERE folio=$P_ubbo",$con);
            $ob_sql_sathla=mysql_fetch_object($MS_sathla);
            $ob_sathla=$ob_sql_sathla->client;
                      $a=mysql_query("SELECT email FROM user WHERE id_user='$ob_sathla'",$con);  
                      $b=mysql_fetch_object($a); 
                      $c=$b->email;

                      if($P_sathla == 1){ 
                                   $res_con=M_sathla_A($c); echo $res_con;
                                   $apro_data=mysql_query("UPDATE folium SET active=2 WHERE id_folio=$P_ubbo",$con);
                                    
                                        }
                      if($P_sathla == 0){
                                   $res_con=M_sathla_R($c); echo $res_con;
                                   $apro_data=mysql_query("UPDATE folium SET active=0 WHERE id_folio=$P_ubbo",$con);
                                        }
                      if($P_sathla == 3){
                                   $apro_data=mysql_query("UPDATE folium SET active=3 WHERE id_folio=$P_ubbo",$con);
                                        }



?>
