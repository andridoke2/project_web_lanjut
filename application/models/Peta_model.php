<?php

class Peta_model extends CI_Model
{

  public function getData()
  {
    $data = $this->db->get('jasaweb')->result_array();
    return json_encode($data);
  }

  public function getID($id)
  {
    $data = $this->db->get_where('jasaweb', ['id_perusahaan' => $id])->result_array();
    return json_encode($data);
  }
}
