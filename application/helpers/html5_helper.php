<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('saluda')) {

    function saluda($nombre) {
        return 'Hola ' . $nombre;
    }

}

function headerVentas() {
    return '<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cedros SAC</title>
    
    <meta name="description" content="Cedros SAC">

    <script src="' . base_url() . 'assets/js/jquery-2.js" type="text/javascript"></script>
    <link href="' . base_url() . 'assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="' . base_url() . 'assets/js/bootstrap.js" type="text/javascript"></script>
    <link href="' . base_url() . 'assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="' . base_url() . 'assets/css/css.css" rel="stylesheet" type="text/css">
    <link href="' . base_url() . 'assets/css/stylesheet.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/css/owl.css" type="text/css" rel="stylesheet" media="screen">
    <script src="' . base_url() . 'assets/js/common.js" type="text/javascript"></script>
    <link href="http://localhost/Cedros/upload/image/catalog/cart.png" rel="icon">
    <script src="' . base_url() . '/assets/js/owl.js" type="text/javascript"></script>
</head>';
}

if (!function_exists('navVentas')) {

    function navVentas() {
        return '<nav id="top">
    <div class="container">
        <div class="pull-left">
            <form style="margin-bottom: 0px;" action="" method="post" enctype="multipart/form-data" id="moneda">
                <div class="btn-group">
                    <button class="btn btn-link " data-toggle="dropdown">
                        <strong>S/.</strong>
                        <span class="hidden-xs hidden-sm hidden-md">Monedas</span>
                    </button>
                </div>
            </form>
        </div>
        <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
                <li><a href="?route=information/contact"><i class="fa fa-phone"></i>
                    </a> <span class="hidden-xs hidden-sm hidden-md">123456789</span>
                </li>
                <li class="dropdown">
                    <a href="?route=account/account" title="Mi cuenta" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Mi cuenta</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="http://192.168.1.2/patron/index.php/pedidos/g_gestionarusuario/">Registrar</a></li>
                        <li><a href="">Iniciar Sesion</a></li>
                    </ul>
                </li>
                <li><a href="" title="Carrito de compra"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Carrito de Compra</span></a></li>
                <li><a href="" title="Pagar"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Pagar</span></a></li>
            </ul>
        </div>
    </div>
</nav>';
    }

}

if (!function_exists('barraBusqueda')) {

    function barraBusqueda() {
        return ' <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div id="logo">                                        
                            <a href="' . base_url() . '"><img src="' . base_url() . '/assets/img/logocedros.png" title="Tienda Cedros" alt="Tienda Cedros" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-sm-5"><div id="search" class="input-group">
                            <input name="search" placeholder="Buscar" class="form-control input-lg" type="text">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>      </div>
                    <div class="col-sm-3"><div id="cart" class="btn-group btn-block">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">0 item(s) - $0.00</span></button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <p class="text-center">' . 'El carrito esta vacio!' . '</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>';
    }

}

if (!function_exists('menuVentas')) {

    function menuVentas() {
        return '<nav id="menu" class="navbar">
                <div class="navbar-header"><span id="category" class="visible-xs">Categorias</span>
                    <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="">Muebles de Oficina</a></li>
                        <li><a href="">Muebles de Hogar</a></li>
                        <li><a href="">Baños</a></li>
                        <li><a href="">Terrazas</a></li>
                        <li><a href="">Muebes Interiores</a></li>
                        <li><a href="">Princess Agrega algo mas</a></li>
                    </ul>
                </div>
            </nav>';
    }

}

if (!function_exists('inputHtml5')) {

    function inputHtml5(array $data) {
        if (empty($data["type"])) {
            $data["type"] = 'text';
        }
        if (empty($data["id"]) && !empty($data["name"])) {
            $data["id"] = $data["name"];
        }
        if (empty($data["name"]) && !empty($data["id"])) {
            $data["name"] = $data["id"];
        }
        if (empty($data["ph"])) {
            $data["ph"] = '';
        }
        return '<div class="form-group fg-float  has-feedback">
                    <div class="fg-line">
                        <input name="' . $data["name"] . '" id="' . $data["id"] . '" type="' . $data["type"] . '" class="form-control">
                    </div>
                    <label class="fg-label">' . $data["ph"] . '</label>
                </div>';
    }

}

function headerPedidos() {
    return '<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link href="' . base_url() . 'assets/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="' . base_url() . 'assets/css/app.min.1.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/vendors/farbtastic/farbtastic.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">
        
    <link href="' . base_url() . 'assets/css/app.min.2.css" rel="stylesheet">
</head>';
}

function scritpsPedidos() {
    return ' <!-- Javascript Libraries -->
    <script src="' . base_url() . 'assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="' . base_url() . 'assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="' . base_url() . 'assets/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
    <script src="' . base_url() . 'assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="' . base_url() . 'assets/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="' . base_url() . 'assets/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    <script src="' . base_url() . 'assets/vendors/bower_components/autosize/dist/autosize.min.js"></script>
    <script src="' . base_url() . 'assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
        <script src="' . base_url() . 'assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
    <![endif]-->

    <script src="' . base_url() . 'assets/js/functions.js"></script>
    <script src="' . base_url() . 'assets/js/demo.js"></script>
    <script src="' . base_url() . 'assets/js/jquery.validate.min.js"></script>';
}

function sidebarPedidos() {
    return '<aside id="sidebar" class="toggled">
            <div class="sidebar-inner c-overflow">
                <div class="profile-menu">
                    <a href="#">
                        <div class="profile-pic">
                            <img alt="" src="img/profile-pics/1.jpg">
                        </div>
                        <div class="profile-info">
                            Administrador
                            <i class="zmdi zmdi-arrow-drop-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu" style="display: none;">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li><a href="index-2.html"><i class="zmdi zmdi-home"></i> Inicio</a></li>
                    <li class="sub-menu">
                        <a href="#"><i class="zmdi zmdi-assignment-account"></i>Usuarios</a>
                        <ul>
                            <li><a href="' . base_url() . 'index.php/pedidos/g_gestionarusuario/">Clientes</a></li>
                            <li><a href="' . base_url() . 'index.php/pedidos/g_gestionarusuario/">Trabajadores</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>';
}

function comboPedidos(array $data, array $options,$selected='') {
    $opt = '';
    foreach ($options as $key => $val) {
        $opt.='<option '.($selected==$key?" Selected ":"").' value="' . $key . '">' . $val . '</option>';
    }//col-sm-3 m-b-25 esa seria la combinacion pero me da flojera continuen ustedes ya tengo sueño
    return '<div class="m-b-25">
           <p class="f-500 m-b-15 c-black">' . $data["des"] . '</p>
           <select id="'.$data["id"].'" name="'.$data["id"].'" class="selectpicker">' . $opt . '</select>
           </div>';
}

function DatosOptions(array &$data, $llave, $campo) {
    foreach ($data as $key => $valor) {
        $newData[$data[$key][$llave]] = $valor[$campo];
    }
    $data = $newData;
}
