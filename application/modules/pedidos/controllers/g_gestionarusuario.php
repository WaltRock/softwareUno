<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class G_GestionarUsuario extends MX_Controller {

    public function __construct() {
        $this->load->model("E_sexo");        
        $this->load->model("E_Ubigeo");        
        $this->load->model("E_Cliente");        
        $this->load->model("E_Usuario");        
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
        if($post["Pass"]==$post["Pass2"]){
            $post["TipCliente"]=1;
            $post["Tipo"]=4;
            $this->E_Usuario->guardar($post);
            $this->E_Cliente->guardar($post);
         redirect(base_url()."/index.php/ventas/g_ventas/");
        }
    }
    public function getCiudad(){
        $post = $this->input->post();
        $ciudad=$this->E_Ubigeo->listarCiudades($post["pais"]);
        //var_dump($ciudad);exit;
        DatosOptions($ciudad, "idCiudades", "Ciudades");
        echo comboPedidos(array('des' => 'Ciudad', 'id' => 'IdCiudades'), $ciudad);
    }

}
