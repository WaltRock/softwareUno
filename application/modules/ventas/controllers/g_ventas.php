<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class g_ventas extends MX_Controller {

//http://cedros.uigv/index.php/ventas/g_ventas/busqueda
    public function busqueda() {
        $this->load->library('session');        
        $producto = $this->uri->segment(4);
        //echo ($this->session->userdata("nombre"));
        //echo $producto;
        $this->load->view('busqueda');
    }

//http://cedros.uigv/index.php/ventas/g_ventas/
    public function index() {
        $this->load->library('session');
        $this->session->set_userdata("nombre","Walter");
        $this->session->set_userdata("apellido","y");
        
        $datos["productos"] = '';
        $datosPro = array('idProductos' => 10, 'ruta' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSIK213RtP3MbSeb7ZplgAQGYuaT_gWAqhIkV9R-leXzw8AYO7BR1XuNvfw', 'Nombre_Producto' => 'mesa', 'PrecioUnidad' => 's/.1500', 'Detalles' => 'esta es una descripcion generica');
        for ($i = 0; $i < 5; $i++) {
            $datos["productos"] .= $this->listaProductos($datosPro);
        }
        $this->load->view('index', $datos);
    }

    private function listaProductos(array $datos) {
        $producto = '<div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb transition">
                                <div class="image"><a href=""><img src="' . $datos["ruta"] . '" alt="' . $datos["Nombre_Producto"] . '" title="' . $datos["Nombre_Producto"] . '" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="">' . $datos["Nombre_Producto"] . '</a></h4>
                                    <p>' . $datos["Detalles"] . '</p>
                                    <p class="price">
                                        <span class="price-new">' . $datos["PrecioUnidad"] . '</span>
                                    </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" onclick="cart.add(\'' . $datos["idProductos"] . '\');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Agregar al carrito</span></button>
                                </div>
                            </div>
                       </div>';
        return $producto;
    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */