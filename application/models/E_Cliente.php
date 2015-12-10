<?php
class E_Cliente extends CI_Model {

    public function guardar(array $data) {//
        $query = $this->db->query("CALL IngresarClientes("
                . "'{$data["Nombre"]}',"
                . "'{$data["Apellido"]}',"
                . "'{$data["TipCliente"]}',"
                . "'{$data["Telefono"]}',"
                . "'{$data["Fax"]}',"
                . "'{$data["CodSexo"]}',"
                . "'{$data["Direccion1"]}',"
                . "'{$data["Direccion2"]}',"
                . "'{$data["IdCiudades"]}',"
                . "'{$data["Paises_Codigo"]}',"                
                . "'{$data["Codpostal"]}',"
                . "'{$data["Email"]}',"
                . "'{$data["Empresa"]}')");
        $data = $query->result_array();
        $query->free_result();
        return $data;
    }

}
