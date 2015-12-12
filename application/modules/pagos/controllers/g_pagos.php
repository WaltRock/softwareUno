<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class g_pagos extends MX_Controller {

    public function __construct() {
        $this->load->model("E_Ubigeo");
        $this->load->library('session');
        parent::__construct();
    }

    public function index() {
        $data["paises"] =   $this->E_Ubigeo->listarPaises();
        DatosOptions($data["paises"], "Paises_Codigo", "Nombre");        
        $this->load->view('f_pago',$data);
    }
    public function pagar(){
        
    }

}
