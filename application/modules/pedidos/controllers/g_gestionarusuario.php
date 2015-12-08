<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class G_GestionarUsuario extends MX_Controller {

    public function __construct() {
        $this->load->model("E_sexo");
        parent::__construct();
    }

//http://192.168.1.2/patron/index.php/pedidos/g_gestionarusuario/    
    public function index() {
        $data["sexo"] = $this->E_sexo->listar();
        $this->load->library('session');
        $this->session->set_userdata("nombre", "xxxxxxxxxxxx");
        $this->session->set_userdata("apellido", "y");
        $this->load->view('f_modificarcliente',$data);
    }

//http://192.168.1.2/patron/index.php/pedidos/g_gestionarusuario/
    public function guardarCliente() {
        $post = $this->input->post();
        var_dump($post["nombre"]);exit;
        //($_POST["edad"]);
        //($_POST["telefono"]);
    }

}
