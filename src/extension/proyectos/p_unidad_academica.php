<!doctype html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <title>Proyecto de unidad académica</title>
   <meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="../../base/libs/fontsawesome/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
   <link href="../../base/libs/material/material.css" rel="stylesheet">
   <link href="./styles/p_unidad_academica.css" rel="stylesheet">
   <script src="../../base/libs/jquery/jquery-3.6.0.min.js"></script>
   <script src="../../base/libs/jquery/util.min.js"></script>
   <script src="../../base/libs/toast/toast.min.js"></script>
   <script>
      function submitLayoutGrid6() {
         var regexp;
         var Editbox1 = document.getElementById('Editbox1');
         if (!(Editbox1.disabled || Editbox1.style.display === 'none' || Editbox1.style.visibility === 'hidden')) {
            if (Editbox1.value == "") {
               alert("Campo obligatorio");
               Editbox1.focus();
               return false;
            }
         }
         var Editbox6 = document.getElementById('Editbox6');
         if (!(Editbox6.disabled || Editbox6.style.display === 'none' || Editbox6.style.visibility === 'hidden')) {
            if (Editbox6.value == "") {
               alert("Campo obligatorio");
               Editbox6.focus();
               return false;
            }
         }
         return true;
      }
   </script>
   <script>
      function submitLayoutGrid6() {
         var regexp;
         var Editbox2 = document.getElementById('Editbox2');
         if (!(Editbox2.disabled || Editbox2.style.display === 'none' || Editbox2.style.visibility === 'hidden')) {
            if (Editbox2.value == "") {
               alert("Campo obligatorio");
               Editbox2.focus();
               return false;
            }
         }
         return true;
      }
   </script>
   <script src="../../base/libs/wwmin/wwb17.min.js"></script>
   <script>
      $(document).ready(function () {
         $("#FileUpload2 :file").on('change', function () {
            var input = $(this).parents('.input-group').find(':text');
            input.val($(this).val());
         });
         $("#FileUpload3 :file").on('change', function () {
            var input = $(this).parents('.input-group').find(':text');
            input.val($(this).val());
         });
         $("#FileUpload5 :file").on('change', function () {
            var input = $(this).parents('.input-group').find(':text');
            input.val($(this).val());
         });
         $("#Toast1").toast({
            animation: true,
            autohide: false,
            delay: 0
         });
         $("#wb_ResponsiveMenu1 ul li a").click(function (event) {
            $("#wb_ResponsiveMenu1 input").prop("checked", false);
         });
      });
   </script>
</head>

<body>
   <div>
      <?php include '../../assets/php/navegacion.php'; ?>

      <div id="wb_LayoutGrid1">
         <div id="LayoutGrid1">
            <div class="row">
               <div class="col-1">
                  <div id="wb_LayoutGrid2">
                     <div id="LayoutGrid2">
                        <div class="row">
                           <div class="col-1">
                              <div id="wb_Text1">
                                 <span style="color:#000000;font-family:'Roboto';font-weight:900;font-size:24px;"><em>Proyecto
                                       de unidad académica</em></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="wb_LayoutGrid14">
                     <form name="LayoutGrid6" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain"
                        id="LayoutGrid14" onsubmit="return submitLayoutGrid6()">
                        <div class="row">
                           <div class="col-1">
                           </div>
                           <div class="col-2">
                              <div id="wb_Text18">
                                 <span
                                    style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Fecha:</strong></span>
                              </div>
                              <input type="text" id="Editbox6" style="display:block;width: 100%;height:30px;z-index:12;"
                                 name="fecha" value="" disabled autocomplete="off" spellcheck="false">
                           </div>
                           <div class="col-3">
                              <div id="wb_Text3">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>N° de
                                       solicitud:</strong></span>
                              </div>
                              <input type="text" id="Editbox1" style="display:block;width: 100%;height:30px;z-index:14;"
                                 name="nombre" value="" disabled autocomplete="off" spellcheck="false">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="wb_LayoutGrid6">
                     <form name="LayoutGrid6" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain"
                        id="LayoutGrid6" onsubmit="return submitLayoutGrid6()">
                        <div class="row">
                           <div class="col-1">
                              <div id="wb_Text2">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Titulo
                                       general del proyecto</strong></span>
                              </div>
                              <input type="text" id="Editbox2" style="display:block;width: 100%;height:42px;z-index:16;"
                                 name="titl" value="" spellcheck="false" placeholder="Ingrese el título del proyecto">
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="wb_LayoutGrid5">
                     <form name="LayoutGrid6" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain"
                        id="LayoutGrid5">
                        <div class="row">
                           <div class="col-1">
                              <div id="wb_Text4">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Descripción
                                       general del proyecto </strong></span>
                              </div>
                              <textarea name="descrip" id="TextArea1"
                                 style="display:block;width: 100%;;height:99px;z-index:18;" rows="4" cols="73"
                                 autocomplete="off" spellcheck="false"
                                 placeholder="Ingrese la descripción del proyecto (incluye lista de involucrados)"></textarea>
                           </div>
                           <div class="col-2">
                              <div id="wb_Text5">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Justificación
                                    </strong></span>
                              </div>
                              <textarea name="justf" id="TextArea2"
                                 style="display:block;width: 100%;;height:99px;z-index:20;" rows="4" cols="73"
                                 autocomplete="off" spellcheck="false"
                                 placeholder="Ingrese la justificación del proyecto incluyendo los aspectos innovadores y originales que el proyecto aporta"></textarea>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="wb_LayoutGrid11">
                     <form name="LayoutGrid6" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain"
                        id="LayoutGrid11">
                        <div class="row">
                           <div class="col-1">
                              <div id="wb_Text6">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Objetivos
                                       generales&nbsp; </strong></span>
                              </div>
                              <textarea name="o_general" id="TextArea3"
                                 style="display:block;width: 100%;;height:99px;z-index:22;" rows="4" cols="73"
                                 autocomplete="off" spellcheck="false"
                                 placeholder="Ingrese los objetivos generales del proyecto "></textarea>
                           </div>
                           <div class="col-2">
                              <div id="wb_Text7">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Objetivos
                                       específicos</strong></span>
                              </div>
                              <textarea name="o_especifico" id="TextArea4"
                                 style="display:block;width: 100%;;height:99px;z-index:24;" rows="4" cols="73"
                                 autocomplete="off" spellcheck="false"
                                 placeholder="Ingrese los objetivos específicos del proyecto"></textarea>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="wb_LayoutGrid12">
                     <form name="LayoutGrid6" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain"
                        id="LayoutGrid12">
                        <div class="row">
                           <div class="col-1">
                              <div id="wb_Text8">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Alcance
                                    </strong></span>
                              </div>
                              <textarea name="alcance" id="TextArea5"
                                 style="display:block;width: 100%;;height:99px;z-index:26;" rows="4" cols="155"
                                 autocomplete="off" spellcheck="false"
                                 placeholder="Ingrese el alcance del proyecto "></textarea>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="wb_LayoutGrid13">
                     <div id="LayoutGrid13">
                        <div class="row">
                           <div class="col-1">
                              <div id="wb_Text12">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Plan
                                       de
                                       recursos y costos por actividad</strong></span>
                              </div>
                              <div id="FileUpload2" class="input-group"
                                 style="display:table;width: 100%;height:35px;z-index:28;">
                                 <input class="form-control" type="text" readonly="">
                                 <label class="input-group-btn">
                                    <input type="file" name="adj1" id="FileUpload2-file" style="display:none;"><span
                                       class="btn">Adjuntar...</span>
                                 </label>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="wb_Text13">
                                 <span
                                    style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Cronograma</strong></span>
                              </div>
                              <div id="FileUpload3" class="input-group"
                                 style="display:table;width: 100%;height:35px;z-index:30;">
                                 <input class="form-control" type="text" readonly="">
                                 <label class="input-group-btn">
                                    <input type="file" name="adj1" id="FileUpload3-file" style="display:none;"><span
                                       class="btn">Adjuntar...</span>
                                 </label>
                              </div>
                           </div>
                           <div class="col-3">
                              <div id="wb_Text16">
                                 <span style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Informe
                                       final del proyecto</strong></span>
                              </div>
                              <div id="FileUpload5" class="input-group"
                                 style="display:table;width: 100%;height:35px;z-index:32;">
                                 <input class="form-control" type="text" readonly="">
                                 <label class="input-group-btn">
                                    <input type="file" name="adj3" id="FileUpload5-file" style="display:none;"><span
                                       class="btn">Adjuntar...</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="wb_LayoutGrid15">
         <div id="LayoutGrid15">
            <div class="row">
               <div class="col-1">
                  <input type="submit" id="Button1" name="btn_guard" value="GUARDAR CAMBIOS..."
                     style="display:inline-block;width:180px;height:40px;z-index:63;">
               </div>
               <div class="col-2">
                  <a id="Button2" href="" onclick="$('#Toast1').toast('show');return false;"
                     ondblclick="window.location.href='../actividades/pasantias.php';return false;"
                     style="display:inline-block;width:180px;height:40px;z-index:64;">ENVIAR</a>
               </div>
            </div>
         </div>
      </div>
      <div id="wb_LayoutGrid16">
         <div id="LayoutGrid16">
            <div class="row">
               <div class="col-1">
                  <hr id="Line3" style="display:block;width: 100%;z-index:65;">
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
                                    Panamá - Urbanización El Cangrejo - Vía Simón Bolívar(Transístmica) con
                                    la
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
                                 <span style="color:#FFFFFF;font-family:Roboto;font-size:16px;">Defensoría de
                                    los
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
                                 <span style="color:#FFFFFF;font-family:Roboto;font-size:16px;">Universidad
                                    de
                                    Panamá © 2022. - Fac. Informática, Electrónica y Comunicación (Servicio
                                    Social)</span>
                              </div>
                              <hr id="Line4" style="display:inline-block;width:590px;z-index:70;">
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
                                    style="display:inline-block;width:45px;height:20px;text-align:center;z-index:71;">
                                    <div id="IconFont11"><i class="fa fa-envelope"></i></div>
                                 </div>
                                 <div id="wb_IconFont13"
                                    style="display:inline-block;width:45px;height:20px;text-align:center;z-index:72;">
                                    <div id="IconFont13"><i class="fa fa-facebook-square"></i></div>
                                 </div>
                                 <div id="wb_IconFont14"
                                    style="display:inline-block;width:45px;height:20px;text-align:center;z-index:73;">
                                    <div id="IconFont14"><i class="fa fa-instagram"></i></div>
                                 </div>
                                 <div id="wb_IconFont15"
                                    style="display:inline-block;width:45px;height:20px;text-align:center;z-index:74;">
                                    <div id="IconFont15"><i class="fa fa-twitter"></i></div>
                                 </div>
                                 <div id="wb_IconFont16"
                                    style="display:inline-block;width:45px;height:20px;text-align:center;z-index:75;">
                                    <div id="IconFont16"><i class="fa fa-youtube-play"></i></div>
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
      <div aria-live="polite" aria-atomic="true" id="toasts">
         <div id="Toast1" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
               <i class="fa fa-bullhorn"></i>
               <strong>¡ALERTA!</strong>
               <small class="text-muted"></small>
               <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="toast-body">
               <p>Una ves envíe los datos, no podrán ser editados.</p>
               <p style="font-weight:bold;">Presione dos veces el botón de "ENVIAR" para confirmar.</p>
            </div>
         </div>
      </div>
   </div>

</body>

</html>