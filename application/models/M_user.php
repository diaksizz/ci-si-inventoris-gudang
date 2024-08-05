<?php
class M_user extends CI_Model{

  public function update_password($tabel,$where,$data)
  {
    $this->db->where($where);
    $this->db->update($tabel,$data);
  }

  public function select($tabel)
  {
    if($this->session->userdata('role') == 0){
      return $this->db->select()
                      ->from($tabel)
                      ->where('lokasi', $this->session->userdata('name'))
                      ->get()->result();
    }else{
      return $this->db->select()
                      ->from($tabel)
                      ->get()->result();
    }
  }
}

 ?>
