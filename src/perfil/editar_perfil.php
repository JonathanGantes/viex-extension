<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Editar perfil</title>
    <meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../base/libs/fontsawesome/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
    <link href="../base/libs/material/material.css" rel="stylesheet">
    <link href="./styles/editar_perfil.css" rel="stylesheet">
    <script src="../base/libs/jquery/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#wb_ResponsiveMenu1 ul li a").click(function (event) {
                $("#wb_ResponsiveMenu1 input").prop("checked", false);
            });
        });
    </script>
</head>

<body>
    <div>
        <?php include '../assets/php/navegacion.php'; ?>

        <div id="wb_LayoutGrid5">
            <div id="LayoutGrid5">
                <div class="row">
                    <div class="col-1">
                        <div id="wb_LayoutGrid8">
                            <div id="LayoutGrid8">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_Text7">
                                            <span
                                                style="color:#000000;font-family:'Roboto';font-weight:900;font-size:24px;"><em>Editar
                                                    perfil</em></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid13">
                            <div id="LayoutGrid13">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_LayoutGrid12">
                                            <div id="LayoutGrid12">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_IconFont1"
                                                            style="display:inline-block;width:98px;height:70px;text-align:center;z-index:9;">
                                                            <div id="IconFont1"><i class="fa fa-user-circle"></i></div>
                                                        </div>
                                                        <div id="wb_Breadcrumb2"
                                                            style="display:inline-block;width:100%;z-index:10;vertical-align:top;">
                                                            <ul id="Breadcrumb2">
                                                                <li><a href=""> Abrir...</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div id="wb_Shape1"
                                            style="display:inline-block;width:100px;height:34px;z-index:21;position:relative;">
                                            <img src="images/img0002.png" id="Shape1" alt="" width="100" height="34"
                                                style="width:100px;height:34px;">
                                        </div>
                                        <div id="wb_LayoutGrid9">
                                            <div id="LayoutGrid9">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_Text18">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Nombre:</strong></span>
                                                        </div>
                                                        <div id="wb_Text23">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Cédula:</strong></span>
                                                        </div>
                                                        <div id="wb_Text24">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Correo:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="text" id="Editbox1"
                                                            style="display:block;width: 100%;height:26px;z-index:15;"
                                                            name="Nombre" value="" autocomplete="off" spellcheck="false"
                                                            placeholder="Ingrese su nombre">
                                                        <div id="wb_LayoutGrid15">
                                                            <div id="LayoutGrid15">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" id="Editbox6"
                                                            style="display:block;width: 100%;height:26px;z-index:17;"
                                                            name="ced" value="" autocomplete="off" spellcheck="false"
                                                            placeholder="Ingrese su cédula">
                                                        <div id="wb_LayoutGrid20">
                                                            <div id="LayoutGrid20">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" id="Editbox7"
                                                            style="display:block;width: 100%;height:26px;z-index:19;"
                                                            name="mail" value="" autocomplete="off" spellcheck="false"
                                                            placeholder="Ingrese su correo">
                                                        <div id="wb_LayoutGrid21">
                                                            <div id="LayoutGrid21">
                                                                <div class="row">
                                                                    <div class="col-1">
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
                            </div>
                        </div>
                        <div id="wb_LayoutGrid16">
                            <div id="LayoutGrid16">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_LayoutGrid23">
                                            <div id="LayoutGrid23">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_Text1">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Código
                                                                    de profesor:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="text" id="Editbox5"
                                                            style="display:block;width: 100%;height:26px;z-index:24;"
                                                            name="cod_prof" value="" autocomplete="off"
                                                            spellcheck="false"
                                                            placeholder="Ingrese su codigo de profesor">
                                                    </div>
                                                    <div class="col-3">
                                                        <div id="wb_Text5">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Teléfono&nbsp;
                                                                    personal:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" id="Editbox4"
                                                            style="display:block;width: 100%;height:26px;z-index:26;"
                                                            name="tel_p" value="" autocomplete="off" spellcheck="false"
                                                            placeholder="Ingrese su teléfono personal">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid29">
                            <div id="LayoutGrid29">
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid6">
                            <div id="LayoutGrid6">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_LayoutGrid10">
                                            <div id="LayoutGrid10">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_Text3">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Sede:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <select name="Combobox1" size="1" id="Combobox1"
                                                            style="display:block;width: 100%;height:29px;z-index:29;">
                                                            <option value="">Sede...</option>
                                                            <option>Sede 1</option>
                                                            <option>Sede 2</option>
                                                            <option>Sede 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <div id="wb_Text2">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Facultad:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <select name="Combobox2" size="1" id="Combobox2"
                                                            style="display:block;width: 100%;height:29px;z-index:31;">
                                                            <option value="">Facultad...</option>
                                                            <option>Facultad de Administración de Empresas y
                                                                Contabilidad
                                                            </option>
                                                            <option>Facultad de Administración de Pública</option>
                                                            <option>Facultad de Arquitectura y Diseño</option>
                                                            <option>Facultad de Economía</option>
                                                            <option>Facultad de Bellas Artes</option>
                                                            <option>Facultad de Humanidades</option>
                                                            <option>Facultad de Comunicación Social</option>
                                                            <option>Facultad de Derecho y Ciencias Políticas</option>
                                                            <option>Facultad de Ciencias de la Educación</option>
                                                            <option>Facultad de Ciencias Agropecuarias</option>
                                                            <option>Facultad de Ciencias Naturales, Exactas y Tecnología
                                                            </option>
                                                            <option>Facultad de Enfermeria</option>
                                                            <option>Facultad de Farmacia</option>
                                                            <option>Facultad de Medicina</option>
                                                            <option>Facultad de Medicina Veterinaria</option>
                                                            <option>Facultad de Odontología</option>
                                                            <option>Facultad de Psicología</option>
                                                            <option>Facultad de Informática, Electrónica y Comunicación
                                                            </option>
                                                            <option>Facultad de Ingeniería</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid31">
                            <div id="LayoutGrid31">
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid17">
                            <div id="LayoutGrid17">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_LayoutGrid11">
                                            <div id="LayoutGrid11">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_Text4">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Departamento:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <select name="Combobox3" size="1" id="Combobox3"
                                                            style="display:block;width: 100%;height:29px;z-index:34;">
                                                            <option value="">Departamento...</option>
                                                            <option>Departamento 1</option>
                                                            <option>Departamento 2</option>
                                                            <option>Departamento 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <div id="wb_Text10">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Escuela:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <select name="Combobox4" size="1" id="Combobox4"
                                                            style="display:block;width: 100%;height:29px;z-index:36;">
                                                            <option value="">Escuela</option>
                                                            <option>Escuela 1</option>
                                                            <option>Escuela 2</option>
                                                            <option>Escuela 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid32">
                            <div id="LayoutGrid32">
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid18">
                            <div id="LayoutGrid18">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_LayoutGrid25">
                                            <div id="LayoutGrid25">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_Text9">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Correo
                                                                    de respaldo:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="text" id="Editbox11"
                                                            style="display:block;width: 100%;height:26px;z-index:39;"
                                                            name="mail_resp" value="" autocomplete="off"
                                                            spellcheck="false"
                                                            placeholder="Ingrese el correo de respaldo">
                                                    </div>
                                                    <div class="col-3">
                                                        <div id="wb_Text8">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Tel.
                                                                    Oficina:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" id="Editbox10"
                                                            style="display:block;width: 100%;height:26px;z-index:41;"
                                                            name="Nombre" value="" autocomplete="off" spellcheck="false"
                                                            placeholder="Ingrese el teléfono de oficina">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid33">
                            <div id="LayoutGrid33">
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid19">
                            <div id="LayoutGrid19">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="wb_LayoutGrid26">
                                            <div id="LayoutGrid26">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <div id="wb_Text6">
                                                            <span
                                                                style="color:#000000;font-family:Roboto;font-size:17px;"><strong>Rol
                                                                    que ejerce:</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="text" id="Editbox13"
                                                            style="display:block;width: 100%;height:26px;z-index:44;"
                                                            name="rol" value="" autocomplete="off" spellcheck="false"
                                                            placeholder="Ingrese el rol que ejerce">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wb_LayoutGrid14">
                            <div id="LayoutGrid14">
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-2">
                                        <div id="wb_Breadcrumb1"
                                            style="display:inline-block;width:100%;z-index:46;vertical-align:top;">
                                            <ul id="Breadcrumb1">
                                                <li><a href="../perfil/perfil.php"><i class="fa fa-save">&nbsp;</i>
                                                        GUARDAR</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wb_LayoutGrid22">
            <div id="LayoutGrid22">
                <div class="row">
                    <div class="col-1">
                        <hr id="Line3" style="display:block;width: 100%;z-index:113;">
                    </div>
                </div>
            </div>
        </div>
        <div id="wb_LayoutGrid24">
        </div>


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
                                    <hr id="Line4" style="display:inline-block;width:590px;z-index:118;">
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
                                            style="display:inline-block;width:45px;height:20px;text-align:center;z-index:119;">
                                            <div id="IconFont11"><i class="fa fa-envelope"></i></div>
                                        </div>
                                        <div id="wb_IconFont13"
                                            style="display:inline-block;width:45px;height:20px;text-align:center;z-index:120;">
                                            <div id="IconFont13"><i class="fa fa-facebook-square"></i></div>
                                        </div>
                                        <div id="wb_IconFont14"
                                            style="display:inline-block;width:45px;height:20px;text-align:center;z-index:121;">
                                            <div id="IconFont14"><i class="fa fa-instagram"></i></div>
                                        </div>
                                        <div id="wb_IconFont15"
                                            style="display:inline-block;width:45px;height:20px;text-align:center;z-index:122;">
                                            <div id="IconFont15"><i class="fa fa-twitter"></i></div>
                                        </div>
                                        <div id="wb_IconFont16"
                                            style="display:inline-block;width:45px;height:20px;text-align:center;z-index:123;">
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
</body>

</html>