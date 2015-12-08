<?php
class E_Cliente extends CI_Model {

    public $idDep;
    public $idProv;
    public $idDist;

    public function guardar(array $data) {//
        $query = $this->db->query("CALL IngresarClientes({$data["nombre"]},"
        . "{$data["nombre"]},"
        . "{$data["apellido"]},"
        . "{$data["xxxxxx"]},"
        . "{$data["edad"]},"
        . "{$data["sex"]},"
        . "{$data["nombre"]},"
        . "{$data["nombre"]},)");
        $data = $query->result_array();
        $query->free_result();
        return $data;
    }
}