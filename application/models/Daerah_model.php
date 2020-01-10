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

  public function getByIdJSON($id)
  {
    $data = $this->db->get_where('daerah', ['nid' => $id])->result_array();
    return json_encode($data);
  }

  public function getByID($nid)
  {
    return $this->db->get_where('daerah', ['nid' => $nid])->row_array();
  }

  public function getMenu()
  {
    return $this->db->get('menu_detail')->result_array();
  }

  public function getSubMenu()
  {
    return $this->db->get('sub_menu_detail')->result_array();
  }

  public function tambah($nid, $parentNID, $name, $serial, $type, $lat, $lng, $status, $image)
  {
    $data = [
      'nid' => htmlspecialchars(trim($nid)),
      'parent_nid' => htmlspecialchars(trim($parentNID)),
      'name' => htmlspecialchars(trim($name)),
      'serial' => htmlspecialchars(trim($serial)),
      'type' => htmlspecialchars(trim($type)),
      'latitude' => htmlspecialchars(trim($lat)),
      'longitude' => htmlspecialchars(trim($lng)),
      'status' => htmlspecialchars(trim($status)),
      'image' => $image
    ];

    $this->db->insert('daerah', $data);
  }

  public function ubah()
  {
    $data = [
      'nid' => htmlspecialchars(trim($this->input->post('nid', true))),
      'parent_nid' => htmlspecialchars(trim($this->input->post('parentNID', true))),
      'name' => htmlspecialchars(trim($this->input->post('name', true))),
      'serial' => htmlspecialchars(trim($this->input->post('serial', true))),
      'type' => htmlspecialchars(trim($this->input->post('type', true))),
      'latitude' => htmlspecialchars(trim($this->input->post('lat', true))),
      'longitude' => htmlspecialchars(trim($this->input->post('lng', true))),
      'status' => htmlspecialchars(trim($this->input->post('status', true)))
    ];

    $this->db->where('nid', $data['nid']);
    $this->db->update('daerah', $data);
  }

  public function hapus($nid)
  {
    $this->db->delete('daerah', ['nid' => $nid]);
  }
}
