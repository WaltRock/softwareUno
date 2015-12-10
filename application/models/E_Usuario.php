<?php
class E_Usuario extends CI_Model {
    public function guardar(array $data) {//
         $query = $this->db->query("CALL IngresarUsuario("
                . "'{$data["Email"]}',"
                . "'{$data["Pass"]}',"
                . "'{$data["Tipo"]}')");
        $data = $query->result_array();
        $query->free_result();
        return $data;
    }

}
