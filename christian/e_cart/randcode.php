<?php
//----------------------------------------------------------------------------------------------------------------------------------------------
function bd_qqq(){  
        $bd_host = "localhost"; 
        $bd_usuario = "root"; 
        $bd_password = "CaptainOosaka1"; 
        $bd_base = "albatros"; 
        $con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
               mysql_select_db($bd_base, $con);
               return $con;
                 } 
//----------------------------------------------------------------------------------------------------------------------------------------------
function randcod(){
         for($i="1";$i<="13";$i++){
             $random .=chr(rand(65,90));
                              }
             return $random;
                  }

function createdtempfolio($capt){
                  $folio .=chr(substr($capt,0,2));
                  $folio .=chr(substr($capt,2,2));
                  $folio .=substr($capt,4,5);
             return $folio;
                       }

function createfolio(){
              $con=bd_qqq();          
              $sql_folium=mysql_query("SELECT COUNT(id_folio) as result from folium",$con);
              $cont_fol = mysql_fetch_assoc($sql_folium);
              $ram=$cont_fol['result'] + 1;
              $fff=70;
              $abc=65;

      if( $ram <= 99999 ){
                 if($ram >= 1 && $ram <= 9){
                         $ram2 = str_pad($ram, 5, "0", STR_PAD_LEFT);
                              }
                          if($ram >= 10 && $ram <= 99){
                                  $ram2 = str_pad($ram, 5, "0", STR_PAD_LEFT);
                                       }
                                  if($ram >= 100 && $ram <= 999){
                                          $ram2 = str_pad($ram, 5, "0", STR_PAD_LEFT);
                                                }
                                           if($ram >= 1000 && $ram <= 9999){
                                                   $ram2 = str_pad($ram, 5, "0", STR_PAD_LEFT);
                                                         }
                                                    if($ram >= 10000 && $ram <= 99999){
                                                            $ram2 = str_pad($ram, 5, "0", STR_PAD_LEFT);
                                                                 }
      $complete=$fff.$abc.$ram2;
                         }
      else{$ram="0";}

             return $complete;
                      }


/*
//$a="706500001"; 
$rand=randcod();
echo $rand."<br>";

$fol=createfolio();
echo $fol."<br>";

$foltemp=createdtempfolio($fol);
echo $foltemp."<br>";
*/

?>


