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

  public function tambah($nid, $parentNID, $name, $serial, $type, $lat, $lng, $status)
  {
    $nid = trim($nid);
    $parentNID = trim($parentNID);
    $name = trim($name);
    $serial = trim($serial);
    $type = trim($type);
    $lat = trim($lat);
    $lng = trim($lng);
    $status = trim($status);

    $data = [
      'nid' => $nid,
      'parent_nid' => $parentNID,
      'name' => $name,
      'serial' => $serial,
      'type' => $type,
      'latitude' => $lat,
      'longitude' => $lng,
      'status' => $status
    ];

    $this->db->insert('daerah', $data);
  }

  public function ubah()
  {
    $nid = trim($this->input->post('nid', true));
    $parentNID = trim($this->input->post('parentNID', true));
    $name = trim($this->input->post('name', true));
    $serial = trim($this->input->post('serial', true));
    $type = trim($this->input->post('type', true));
    $lat = trim($this->input->post('lat', true));
    $lng = trim($this->input->post('lng', true));
    $status = trim($this->input->post('status', true));

    $data = [
      'nid' => $nid,
      'parent_nid' => $parentNID,
      'name' => $name,
      'serial' => $serial,
      'type' => $type,
      'latitude' => $lat,
      'longitude' => $lng,
      'status' => $status
    ];

    $this->db->where('nid', $nid);
    $this->db->update('daerah', $data);
  }

  public function hapus($nid)
  {
    $this->db->delete('daerah', ['nid' => $nid]);
  }
}
