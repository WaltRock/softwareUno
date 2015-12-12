<?php
class E_Productos extends CI_Model {

    public function obtenerListaCarrito(array $data) {//
        $query = $this->db->query("CALL BuscarProductosCarrito("                
                . "'{$data["ids"]}')");
        $data = $query->result_array();
        $query->free_result();
        return $data;
    }

}
