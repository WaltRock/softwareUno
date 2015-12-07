<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class G_GestionarUsuario extends MX_Controller {
    public function __construct() {
        $this->load->model("E_sexo");
        parent::__construct();
    }
    
    public function index() {
        $data = $this->E_sexo->listar();
        var_dump($data);
        exit;
        $this->load->library('session');
        $this->session->set_userdata("nombre", "xxxxxxxxxxxx");
        $this->session->set_userdata("apellido", "y");
        $this->load->view('f_modificarcliente');
    }
    public function guardarCliente(){        
        var_dump($this->E_sexo->listar());exit;
        
        $something = $this->input->post('nombre');
        
        var_dump($something);//continuen
        
        //($_POST["edad"]);
        //($_POST["telefono"]);
        
    }
}