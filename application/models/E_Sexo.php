<?php

class E_Sexo extends CI_Model {

    public function listar() {
        $query = $this->db->query("CALL SP_ListarSexo()");
        $data = $query->result_array();
        $query->next_result(); // Carga todo
        $query->free_result(); // Libera 
        return $data; // Retorna los datos
    }

}
