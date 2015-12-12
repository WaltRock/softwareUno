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
                <form name="datosCliente" id="datosCliente" method="post" action="<?php echo base_url(); ?>index.php/pagos/g_pagos/pagar/">
                    <div class="container">
                        <div class="block-header">
                            <h2>Pago al Banco</h2>
                        </div>                        
                        <div class="card">
                            <div class="card-header ch-alt">
                                <h2>Dirección y contraseña<small>Dirección</small></h2>
                            </div>
                            <div class="card-body card-padding">

                                <?php echo comboPedidos(array('des' => 'Genero', 'id' => 'tipoTarjeta', "class" => "col-sm-12"), array("1" => "Visa", "2" => "Mastercard")); ?>
                                <?php echo inputHtml5(array('id' => 'numero', 'ph' => 'Numero de Tarjeta', "dm" => "0000 0000 0000 0000")); ?>

                                <?php
                                echo comboPedidos(array('des' => 'Mes', 'id' => 'tipoTarjeta', "class" => "col-sm-3"), array("1" => "Enero",
                                    "2" => "Febrero",
                                    "3" => "Marzo",
                                    "4" => "Abril",
                                    "5" => "Mayo",
                                    "6" => "Junio",
                                    "7" => "Julio",
                                    "8" => "Agosto",
                                    "9" => "Septiembre",
                                    "10" => "Octubre",
                                    "11" => "Noviembre",
                                    "12" => "Diciembre"));
                                ?>
                                <?php
                                echo comboPedidos(array('des' => 'Mes', 'id' => 'tipoTarjeta', "class" => "col-sm-3"), array("2015" => "2015",
                                    "2016" => "2016",
                                    "2017" => "2017",
                                    "2018" => "2018",
                                    "2019" => "2019",
                                    "2020" => "2020",
                                    "2021" => "2021",
                                    "2022" => "2022"));
                                ?>
                                <?php echo inputHtml5(array('id' => 'cvv', 'ph' => 'CVV', "class" => "col-sm-6")); ?> 


                                <div class="card-header col-sm-12">
                                    <h2>Información de facturación<small><img style="width: 95px;" src="<?php echo base_url(); ?>/assets/img/transparent-logo-visa.png" alt=""/></small></h2>
                                </div>


                                <?php echo inputHtml5(array('id' => 'Nombre', 'ph' => 'Nombre', "class" => "col-sm-6")); ?>
                                <?php echo inputHtml5(array('id' => 'Apellidos', 'ph' => 'Apellidos', "class" => "col-sm-6")); ?>                                
                                <?php echo inputHtml5(array('id' => 'DireccionFacturacion', 'ph' => 'Direccion de facturacion', "class" => "col-sm-6")); ?>                                
                                <?php echo inputHtml5(array('id' => 'DireccionFacturacion2', 'ph' => 'Direccion de facturacion (Segunda Linea)', "class" => "col-sm-6")); ?>                                
                                <?php echo inputHtml5(array('id' => 'Localidad', 'ph' => 'Localidad', "class" => "col-sm-6")); ?> 
                                <?php echo inputHtml5(array('id' => 'Codpostal', 'ph' => 'Codigo Postal', "class" => "col-sm-6")); ?> 
                                <?php echo comboPedidos(array('des' => 'Pais', 'id' => 'Paises_Codigo', "class" => "col-sm-12"), $paises); ?>
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