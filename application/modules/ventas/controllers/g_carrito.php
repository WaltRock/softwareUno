<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class g_carrito extends MX_Controller {

    public function __construct() {
        $this->load->model("E_Productos");
        $this->load->library('session');
        parent::__construct();
    }

    public function agregarAlCarrito() {
        $post = $this->input->post();
        $carrito = $this->session->userdata("carrito");
        if ($carrito) {
            $carrito[$post["CodProducto"]] ++;
        } else {
            $carrito[$post["CodProducto"]] = 1;
        }
        $respuesta = array(
            "success" => "Se agrego al carrito el producto con id " . $post["CodProducto"],
            "total" => "5 soles casera!"
        );
        $this->session->set_userdata("carrito", $carrito);
        echo json_encode($respuesta);
        exit;
        $this->load->view('f_gestionar_carrito', $data);
    }

    public function obtenerCarrito() {        
        $carrito = $this->session->userdata("carrito");
        $ids = array_keys($carrito);
        $newID = '';
        foreach ($ids as $key => $val) {
            $newID.=$val . ",";
        }
        $data["ids"] = substr_replace($newID, "", -1);
        $lista = $this->E_Productos->obtenerListaCarrito($data);
        $data["tr"]=  $this->datosCarrito($lista);        
        $this->load->view('f_carrito', $data);
    }

    private function datosCarrito($lista) {
        $data["tr"] = '';
        $carrito = $this->session->userdata("carrito");
        foreach ($lista as $key => $val) {
            $data["tr"].='<tr>
                    <td class="text-center"><a href=""><img src="' . $val["Imagen"] . '" alt="' . $val["NombreProducto"] . '" title="' . $val["NombreProducto"] . '"
                 class="img-thumbnail" /></a>
                    </td>
                    <td class="text-left"><a href="">' . $val["NombreProducto"] . '</a>
                    </td>
                    <td class="text-right">x ' . $carrito[$val["CodProducto"]] . '</td>
                    <td class="text-right">' . $carrito[$val["CodProducto"]] * $val["Precio"] . '</td>
                    <td class="text-center"><button type="button" onclick="cart.remove(\'' . $val["CodProducto"] . '\');" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
                </tr>';
        }
        return $data["tr"];
    }

}
