<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html>
    <?php echo headerPedidos(); ?>
    <body class="modal-open">
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="logo">
                    <a href="">Cedros SAC</a>
                </li>
                <li class="pull-right">
                    <ul class="top-menu">
                        <li id="toggle-width">
                            <div class="toggle-switch">
                                <input type="checkbox" hidden="hidden" id="tw-switch">
                                <label class="ts-helper" for="tw-switch"></label>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Top Search Content -->
                <div id="top-search-wrap">
                    <input type="text">
                    <i id="top-search-close">&times;</i>
                </div>
        </header>

        <section id="main">
            <?php echo sidebarPedidos(); ?>
            <section id="content">
                <form name="datosCliente" id="datosCliente" method="post" action="<?php echo base_url(); ?>index.php/pedidos/g_gestionarusuario/guardarCliente/">
                    <div class="container">
                        <div class="block-header">
                            <h2>Gestionar Cliente</h2>
                        </div>
                        <div class="card">
                            <div class="card-header ch-alt">
                                <h2>Datos Personales<small>Informacion basica de la persona</small></h2>
                            </div>
                            <div class="card-body card-padding">
                                <?php echo inputHtml5(array('id' => 'Nombre', 'ph' => 'Nombre')); ?>
                                <?php echo inputHtml5(array('id' => 'Apellido', 'ph' => 'Apellido')); ?>                                
                                <?php echo inputHtml5(array('id' => 'Telefono', 'ph' => 'Telefono')); ?>
                                <?php echo inputHtml5(array('id' => 'Email', 'ph' => 'E-Mail')); ?>
                                <?php echo inputHtml5(array('id' => 'Dni', 'ph' => 'Nº Documento de Identifacion')); ?>
                                <?php echo inputHtml5(array('id' => 'Fax', 'ph' => 'Fax')); ?>
                                <?php echo comboPedidos(array('des' => 'Genero', 'id' => 'CodSexo'), $sexo); ?>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header ch-alt">
                                <h2>Dirección y contraseña<small>Dirección</small></h2>
                            </div>
                            <div class="card-body card-padding">
                                <?php echo inputHtml5(array('id' => 'Empresa', 'ph' => 'Empresa')); ?>
                                <?php echo inputHtml5(array('id' => 'Direccion1', 'ph' => 'Dirección 1')); ?>
                                <?php echo inputHtml5(array('id' => 'Direccion2', 'ph' => 'Dirección 2')); ?>
                                <?php echo comboPedidos(array('des' => 'Pais', 'id' => 'Paises_Codigo'), $paises); ?>
                                <div id="comboPais">
                                    <?php echo comboPedidos(array('des' => 'Ciudad', 'id' => 'IdCiudades'), array('')); ?>
                                </div>
                                <?php echo inputHtml5(array('id' => 'Codpostal', 'ph' => 'Codigo Postal')); ?>
                                <?php echo inputHtml5(array('id' => 'Pass', 'ph' => 'Contraseña')); ?>
                                <?php echo inputHtml5(array('id' => 'Pass2', 'ph' => 'Confirmar Contraseña  ')); ?>

                                <button class="btn btn-info waves-effect">Guardar</button>
                                <button class="btn btn-link waves-effect">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </section>

        <footer id="footer">            
            <ul class="f-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </footer>

        <!--aca pegar luego-->

        <?php echo scritpsPedidos(); ?>


    </body>
    <script>
        $("#Paises_Codigo").change(function () {
            CargaCiudades();
        });
        function CargaCiudades(){
            var pais = $("#Paises_Codigo").val();
            $.ajax({data: {pais: pais},
                type: 'POST',
                url: "http://" + window.location.host + "/patron/index.php/pedidos/g_gestionarusuario/getCiudad",
                success: function (result) {
                    $("#comboPais").html(result);
                    $('.selectpicker').selectpicker('render');
                }});
        }

        $(document).ready(function () {
            CargaCiudades();
        });

//        $.validator.setDefaults({
//            submitHandler: function () {
//                alert("submitted!");
//                $("#datosCliente").submit();
//            }
//        });
//
//        $.validator.addMethod("contra", function (value) {
//            return $("#pass").val() === value;
//        }, 'Las contraseñas deben ser iguales');
//        $().ready(function () {
//            // Vlidamos los datos del cliente
//            $("#datosCliente").validate({
//                rules: {
//                    nombre: "required",
//                    apellido: "required",
//                    telefono: {required: true,
//                        minlength: 9,
//                        maxlength: 9,
//                        number: true},
//                    email: "required",
//                    fax: "required",
//                    direccion1: "required",
//                    ciudad: "required",
//                    pass: "required",
//                    pass2: "contra",
//                },
//                messages: {
//                    nombre: "Ingrese un nombre",
//                    apellido: "Ingrese un apellido",
//                    telefono: "Ingrese un telefono de contacto",
//                    email: "ingrese un email valido",
//                    fax: "Ingrese un fax",
//                    direccion1: "Ingrese una dirección",
//                    ciudad: "Ingrese una ciudad ",
//                    pass: "ingrese una contraseña",
//                }
//            });
//        });

    </script>
</html>