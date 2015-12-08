<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class G_GestionarUsuario extends MX_Controller {

    public function __construct() {
        $this->load->model("E_sexo");        
        $this->load->model("E_Ubigeo");        
        $this->load->library('session');
        parent::__construct();
    }

//http://192.168.1.2/patron/index.php/pedidos/g_gestionarusuario/    
    public function index() {
        $data["sexo"] =    $this->E_sexo->listar();        
        DatosOptions($data["sexo"], "CodSexo", "Nombre");
        $data["paises"] =   $this->E_Ubigeo->listarPaises();
        DatosOptions($data["paises"], "Paises_Codigo", "Nombre");        
        $this->session->set_userdata("nombre", "xxxxxxxxxxxx");
        $this->session->set_userdata("apellido", "y");        
        $this->load->view('f_modificarcliente',$data);
    }
  

//http://192.168.1.2/patron/index.php/pedidos/g_gestionarusuario/
    public function guardarCliente() {
        $post = $this->input->post();
        //($_POST["edad"]);
        $post = $this->input->post();//cuando modificas una linea se 
        var_dump($post["nombre"]);exit;
       // cuando agregas una linea se pone un icono verde a la izquierda
        //($_POST["telefono"]);
    }
    public function getCiudad(){
        
        $data["paises"]=$this->E_ubigeo->ListarPaises();
    }

}
