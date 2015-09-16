<?php
include("../lib/randcode.php");
$con=bd_qqq();
$P_shw_hstr=$_POST['Xsw_hst'];
            $sql_show_history=mysql_query("SELECT DISTINCT * FROM vista_general_folio WHERE user='$P_shw_hstr'",$con);
                              while($row_show_history=mysql_fetch_array($sql_show_history)){
                                    $folium=createdtempfolio($row_show_history['foliumP']);
                                            echo "<div style='background-color:red;width:200px;float:left;'>".$folium."</div>";
                                                                                            }

?>
