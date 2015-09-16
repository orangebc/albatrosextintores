<?php
//----------------------------------------------------------------------------------------------------------------------------------------------
function bd_qqq(){  

  $bd_host = "localhost"; 
  $bd_usuario = "albatros"; 
  $bd_password = "kUF3w9fz67"; 
  $bd_base = "albatros_albatros"; 
/* 
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "CaptainOosaka1"; 
  $bd_base = "albatros";
*/

  $cont=0;

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


function createdir($userdir){
         $estructura = "../profiles/".$userdir;
            if(!mkdir($estructura, 0755, true)) {
                     die('Fallo al crear las carpetas user');
                                                }
             /*-------Creacion de ficheros-----*/
   $estructuraXML=$estructura."/_XML";
   $estructuraPDF=$estructura."/_PDF";
   $estructuraJPG=$estructura."/_JPG";
   $arrayfiles=array($estructuraXML,$estructuraPDF,$estructuraJPG);
             for ($i=0; $i<sizeof($arrayfiles); $i++){
             if(!mkdir($arrayfiles[$i], 0755, true)) {
                  die('Fallo al crear las carpetas class');
                                                     }
                                              }
            /*----------------------------------*/

            /*---Creacion de ficheros anuales---*/
   $meses = array('/_01ENE','/_02FEB','/_03MAR','/_04ABR','/_05MAY','/_06JUN','/_07JUL', '/_08AGO','/_09SEP','/_10OCT','/_11NOV','/_12DIC');
            for ($i=0; $i<sizeof($meses); $i++){ 
                 $estructuraMONTH=$estructuraXML.$meses[$i];
            if(!mkdir($estructuraMONTH, 0755, true)) {
                 die('Fallo al crear las carpetas meses');
                                                     }
                                               }
           /*-----------------------------------*/
                            }

function viewfiles($captuser,$upimage){
   $dir = "../profiles/$captuser/_JPG";
   return $dir;
                                      }
function sendpdf($captuser){
   $dir = "../profiles/$captuser/_PDF";
   return $dir;
                                      }
?>


