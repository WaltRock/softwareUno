<?php
class E_Cliente extends CI_Model {

    public $idDep;
    public $idProv;
    public $idDist;

    public function guardarCliente(array $data){
        var_dump($this->input->post('submit'));
    }
    
    public function listarDepartamentos() {
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function listarProvincias($provincia) {
        $sql = "SELECT idProv, provincia FROM ubprovincia Where idDep=$provincia";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function listarDistritos() {
        $sql = "SELECT idDist, distrito FROM ubdistrito Where idProv=$this->idProv";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function localidades($provincia) {
        $this->db->where('idprovincia', $provincia);
        $this->db->order_by('poblacion', 'asc');
        $localidades = $this->db->get('poblacion');
        if ($localidades->num_rows() > 0) {
            return $localidades->result();
        }
    }

}