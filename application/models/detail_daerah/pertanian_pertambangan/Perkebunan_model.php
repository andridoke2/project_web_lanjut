<?php

class Perkebunan_model extends CI_Model
{

  public function getPerkebunan()
  {
    return $this->db->get('perkebunan')->result_array();
  }

  public function getPerkebunanById($id)
  {
    return $this->db->get_where('perkebunan', ['id' => $id])->row_array();
  }

  public function getLuasTanamanPerkebunanBesarById($id)
  {
    return $this->db->get_where('luas_tanaman_perkebunan_besar', ['id_hortikultural' => $id])->result_array();
  }
}
