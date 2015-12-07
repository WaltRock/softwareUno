<?php

class E_Sexo extends CI_Model {

    public function data(){
        return 'Data';
    }
    
    public function listar() {
        $query = $this->db->query("CALL SP_ListarSexo()");                
        return $query->result_array();
    }
}
