<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
function _start(){
         session_start();
                      if(isset($_SESSION['id']) && isset($_SESSION['psswrd'])){
                      
                               echo "<input class='bot_car' type='button' value='confirmar'>";
                      
                                                                              }
                      else {
                               echo "<button class='button session' id='_session'>Iniciar Sesión</button>";
                           }
return $session;               
}
?>
