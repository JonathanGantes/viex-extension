<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform') {
   $success_page = '';
   $error_page = basename(__FILE__);
   $database = './usersdb.php';
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $db_email = '';
   $db_fullname = '';
   $db_username = '';
   $session_timeout = 600;
   if (filesize($database) > 0) {
      $items = file($database, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach ($items as $line) {
         list($username, $password, $email, $name, $active) = explode('|', trim($line));
         if (($username == $_POST['username'] || $email == $_POST['username']) && $active != "0" && $password == $crypt_pass) {
            $found = true;
            $db_email = $email;
            $db_fullname = $name;
            $db_username = $username;
            break;
         }
      }
   }
   if ($found == false) {
      header('Location: ' . $error_page);
      exit;
   } else {
      $_SESSION['email'] = $db_email;
      $_SESSION['fullname'] = $db_fullname;
      $_SESSION['username'] = $db_username;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme) {
         setcookie('username', $db_username, time() + 3600 * 24 * 30);
         setcookie('password', $_POST['password'], time() + 3600 * 24 * 30);
      }
      header('Location: ' . $success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<!doctype html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <title>Iniciar sesión</title>
   <meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="../base/libs/fontsawesome/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
   <link href="../base/libs/material/material.css" rel="stylesheet">
   <link href="./styles/iniciar_sesion.css" rel="stylesheet">
</head>

<body>
   <div>
   </div>
   <div id="wb_LayoutGrid1">
      <div id="LayoutGrid1">
         <div class="col-1">
            <div id="wb_LayoutGrid2">
               <div id="LayoutGrid2">
                  <div class="row">
                     <div class="col-1">
                        <div class="col-1-padding">
                           <div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:0;">
                              <a href="../index.php"><img src="../base/images/tareas/viex-header.png" id="Image1" alt=""
                                    width="736" height="75"></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-2">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid4">
      <nav id="LayoutGrid4">
         <div class="col-1">
            <hr id="Line1" style="display:block;width: 100%;z-index:3;">
         </div>
      </nav>
   </div>
   <div id="wb_LayoutGrid3">
      <nav id="LayoutGrid3">
         <div class="col-1">
            <hr id="Line2" style="display:block;width: 100%;z-index:4;">
         </div>
      </nav>
   </div>
   <div id="wb_LayoutGrid5">
      <div id="LayoutGrid5">
         <div class="row">
            <div class="col-1">
               <div id="wb_Text2">
                  <span style="color:#000000;font-family:Arial;font-size:16px;"><br><br><br><br><br><br><br></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid6">
      <div id="LayoutGrid6">
         <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
               <div id="wb_LayoutGrid8">
                  <div id="LayoutGrid8">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_LayoutGrid7">
                              <div id="LayoutGrid7">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="wb_IconFont1"
                                          style="display:inline-block;width:78px;height:79px;text-align:center;z-index:6;">
                                          <div id="IconFont1"><i class="fa fa-user-circle"></i></div>
                                       </div>
                                       <div id="wb_Text1">
                                          <span
                                             style="color:#000000;font-family:'Roboto';font-weight:900;font-size:24px;">INICIO
                                             DE SESIÓN</span>
                                       </div>
                                       <div id="wb_Login1" style="display:inline-block;width:100%;z-index:8;">
                                          <form name="loginform" method="post" accept-charset="UTF-8"
                                             action="<?php echo basename(__FILE__); ?>" id="loginform">
                                             <input type="hidden" name="form_name" value="loginform">
                                             <table id="Login1">
                                                <tr>
                                                   <td class="label"><label for="username">Usuario</label></td>
                                                </tr>
                                                <tr>
                                                   <td class="row"><input class="input" name="username" type="text"
                                                         id="username" value="<?php echo $username; ?>"></td>
                                                </tr>
                                                <tr>
                                                   <td class="label"><label for="password">Contraseña</label></td>
                                                </tr>
                                                <tr>
                                                   <td class="row"><input class="input" name="password" type="password"
                                                         id="password" value="<?php echo $password; ?>"></td>
                                                </tr>
                                                <tr>
                                                   <td class="row"><input id="rememberme" type="checkbox"
                                                         name="rememberme"><label for="rememberme">Recuerdame</label>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td style="text-align:center;vertical-align:bottom">
                                                      <input class="button" type="submit" name="login"
                                                         value="Iniciar Sesión" id="login">
                                                   </td>
                                                </tr>
                                             </table>
                                          </form>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_Text3">
                              <span
                                 style="color:#000000;font-family:'Roboto';font-weight:900;font-size:35px;">¡Bienvenido!</span>
                           </div>
                           <hr id="Line3" style="display:block;width: 100%;z-index:11;">
                           <div id="wb_Text4">
                              <span style="color:#000000;font-family:'Roboto';font-weight:900;font-size:16px;">¿No
                                 tienes una cuenta? <a href="./registro.php">Registrate aquí</a></span>
                           </div>
                           <div id="wb_Text6">
                              <span
                                 style="color:#000000;font-family:'Roboto';font-weight:900;font-size:16px;">¿Olvidaste
                                 tu Contraseña?</span>
                           </div>
                           <hr id="Line4" style="display:block;width: 100%;z-index:14;">
                           <div id="wb_Breadcrumb2"
                              style="display:inline-block;width:100%;z-index:15;vertical-align:top;">
                              <ul id="Breadcrumb2">
                                 <li><a href="../index.php"><i class="fa fa-angle-double-left">&nbsp;</i>Volver</a>
                                 </li>
                              </ul>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-3">
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid21">
      <div id="LayoutGrid21">
         <div class="row">
            <div class="col-1">
               <hr id="Line5" style="display:block;width: 100%;z-index:30;">
            </div>
         </div>
      </div>
   </div>
   <div id="wb_LayoutGrid24">
      <div id="LayoutGrid24">
         <div class="row">
            <div class="col-1">
               <div id="wb_LayoutGrid27">
                  <div id="LayoutGrid27">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_Text19">
                              <span style="color:#FFFFFF;font-family:Roboto;font-size:16px;">Central
                                 Telefónica (507) 523-5000<br>secretaria.general@up.ac.pa<br>Provincia de
                                 Panamá - Urbanización El Cangrejo - Vía Simón Bolívar(Transístmica) con la
                                 intersección de la Vía Manuel Espinoza Batista y José De Fábrega.</span>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_Text20">
                              <span style="color:#FFFFFF;font-family:Roboto;font-size:16px;">Talonario
                                 Digital<br>Diario Digital<br>Radio Estéreo<br>Servicios
                                 UP<br>SIREXUP<br>SIUP<br>Correo Electrónico<br>UpVirtual<br>Centro de
                                 Lenguas</span>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="wb_Text21">
                              <span style="color:#FFFFFF;font-family:Roboto;font-size:16px;">Defensoría de los
                                 Universitarios<br>Organismo Electoral<br>Oficina de Equiparación de
                                 Oportunidades<br>Herbario<br>Agenda Única<br>Instituto de
                                 Geociencias<br>Comité de Bioética<br>Oficina de Puplicaciones Académicas
                                 <br>Distrec<br>Contáctenos</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_LayoutGrid28">
                  <div id="LayoutGrid28">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_Text22">
                              <span style="color:#FFFFFF;font-family:Roboto;font-size:16px;">Universidad de
                                 Panamá © 2022. - Fac. Informática, Electrónica y Comunicación (Servicio
                                 Social)</span>
                           </div>
                           <hr id="Line6" style="display:inline-block;width:590px;z-index:35;">
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_LayoutGrid30">
                  <div id="LayoutGrid30">
                     <div class="row">
                        <div class="col-1">
                           <div class="col-1-padding">
                              <div id="wb_IconFont11"
                                 style="display:inline-block;width:45px;height:20px;text-align:center;z-index:36;">
                                 <div id="IconFont11"><i class="fa fa-envelope"></i></div>
                              </div>
                              <div id="wb_IconFont13"
                                 style="display:inline-block;width:45px;height:20px;text-align:center;z-index:37;">
                                 <div id="IconFont13"><i class="fa fa-facebook-square"></i></div>
                              </div>
                              <div id="wb_IconFont14"
                                 style="display:inline-block;width:45px;height:20px;text-align:center;z-index:38;">
                                 <div id="IconFont14"><i class="fa fa-instagram"></i></div>
                              </div>
                              <div id="wb_IconFont15"
                                 style="display:inline-block;width:45px;height:20px;text-align:center;z-index:39;">
                                 <div id="IconFont15"><i class="fa fa-twitter"></i></div>
                              </div>
                              <div id="wb_IconFont16"
                                 style="display:inline-block;width:45px;height:20px;text-align:center;z-index:40;">
                                 <a href="www.youtube.com">
                                    <div id="IconFont16"><i class="fa fa-youtube-play"></i></div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>