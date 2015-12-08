<?php

class E_Ubigeo extends CI_Model {

    public function listarPaises() {
        $query = $this->db->query("CALL SP_ListarPais()");        
        $data = $query->result_array();
        $query->next_result(); // Carga todo
        $query->free_result(); // Libera 
        return $data; // Retorna los datos
    }
    
    public function listarCiudades($pais) {
        $query = $this->db->query("CALL SP_ListarCiudad('".$pais."')");
        $data = $query->result_array();        
        $query->next_result(); // Carga todo
        $query->free_result(); // Libera 
        return $data; // Retorna los datos
    }
}
