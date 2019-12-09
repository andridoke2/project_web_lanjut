<?php

class Hortikultural_model extends CI_Model
{
  public function getHortikultural()
  {
    return $this->db->get('hortikultural')->result_array();
  }

  public function getHortikulturalById($id)
  {
    return $this->db->get_where('hortikultural', ['id' => $id])->row_array();
  }

  public function getLuasTanamanPerkebunanBesarById($id)
  {
    return $this->db->get_where('luas_tanaman_perkebunan_besar', ['id_hortikultural' => $id])->result_array();
  }
}
