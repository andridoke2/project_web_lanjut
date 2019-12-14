<?php

class Perkebunan_model extends CI_Model
{

  public function getPerkebunan()
  {
    return $this->db->get('perkebunan')->result_array();
  }

  public function getDaerah($nid)
  {
    return $this->db->get_where('daerah', ['nid' => $nid])->row_array();
  }

  public function getPerkebunanById($id)
  {
    return $this->db->get_where('perkebunan', ['id' => $id])->row_array();
  }

  public function getLuasTanamanPerkebunanBesarById($id)
  {
    return $this->db->get_where('luas_tanaman_perkebunan_besar', ['id_perkebunan' => $id])->result_array();
  }

  public function getLuasTanamanPerkebunanBesar($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('kab_kota', $keyword);
      $this->db->or_like('nama_tanaman', $keyword);
      $this->db->or_like('tahun', $keyword);
      $this->db->or_like('jumlah', $keyword);
    }
    return $this->db->get('luas_tanaman_perkebunan_besar', $limit, $start)->result_array();
  }

  public function tambahPerkebunan($judul, $akhirUpdate)
  {
    $data = [
      'judul' => $judul,
      'terakhir_update' => $akhirUpdate
    ];
    $this->db->insert('perkebunan', $data);
  }
}
