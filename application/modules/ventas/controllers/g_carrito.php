<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class g_carrito extends MX_Controller {
    public function __construct() {
        $this->load->model("E_carrito");
        parent::__construct();
    }
    
    public function agregarAlCarrito(){
        //importa la base de datos 
        //y luego probamos
        $data["producto"]=$this->E_carrito->getProducto();//dime por cada entidad no debemos agregar en el rational no todas 
        //pero si deberiamos ya?yaese 
        //ese indice que dice "producto" se transforma en variable en la vista
        $this->load->view('f_gestionar_carrito',$data);
    }
}