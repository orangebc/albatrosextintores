<?php
function _start(){
         session_start();
                      if(isset($_SESSION['id']) && isset($_SESSION['psswrd'])){ 
                                   echo "<a href='lib/_sessiondestroy.php'><div class='session_shopping'><b>Cerrar Sesión</b></div></a>";
                                   echo "<div class='session_close' onClick='confirm_shopping();'><b>Comprar</b></div>";
                                   echo "<a href='profile.php'><div class='btnconsultar show_data' style='background-color:green;'>Mi perfil</div></a>";
                                  
                                                                              }
                      else {
                                    echo "<div class='button session' id='_session'>Iniciar Sesión aqui</div>";
                           }
return $session;               
}
?>
