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

  public function getStatistikSektoralById($id)
  {
    return $this->db->get_where('statistik_sektoral', ['id_perkebunan' => $id])->result_array();
  }

  public function getStatistikSektoral($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('kab_kota', $keyword);
      $this->db->or_like('nama_tanaman', $keyword);
      $this->db->or_like('tahun', $keyword);
      $this->db->or_like('jumlah', $keyword);
    }
    return $this->db->get('statistik_sektoral', $limit, $start)->result_array();
  }

  public function tambahPerkebunan($judul, $akhirUpdate, $nid_daerah)
  {
    $data = [
      'judul' => $judul,
      'terakhir_update' => $akhirUpdate,
      'nid_daerah' => $nid_daerah
    ];
    $this->db->insert('perkebunan', $data);
  }
}
