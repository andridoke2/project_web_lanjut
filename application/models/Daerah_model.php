<?php

class Daerah_model extends CI_Model
{

  public function getDaerah($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('nid', $keyword);
      $this->db->or_like('parent_nid', $keyword);
      $this->db->or_like('name', $keyword);
      $this->db->or_like('serial', $keyword);
      $this->db->or_like('type', $keyword);
      $this->db->or_like('latitude', $keyword);
      $this->db->or_like('longitude', $keyword);
      $this->db->or_like('status', $keyword);
    }
    return $this->db->get('daerah', $limit, $start)->result_array();
  }

  public function getID($id)
  {
    $data = $this->db->get_where('daerah', ['nid' => $id])->result_array();
    return json_encode($data);
  }

  public function getMenu()
  {
    return $this->db->get('menu_detail')->result_array();
  }

  public function getSubMenu()
  {
    return $this->db->get('sub_menu_detail')->result_array();
  }
}
