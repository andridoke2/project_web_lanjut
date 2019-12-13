<?php

class Perkebunan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('detail_daerah/pertanian_pertambangan/Perkebunan_model', 'perkebunan');
  }

  public function index()
  {
    $data['title'] = 'Perkebunan';
    $data['perkebunan'] = $this->perkebunan->getPerkebunan();

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('pertanian_pertambangan/perkebunan/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['perkebunan'] = $this->perkebunan->getPerkebunanById($id);
    $data['title'] = $data['perkebunan']['judul'];
    $data['detail'] = $this->perkebunan->getLuasTanamanPerkebunanBesarById($id);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('pertanian_pertambangan/perkebunan/detail', $data);
    $this->load->view('templates/footer');
  }

  public function table($id)
  {
    $data['perkebunan'] = $this->perkebunan->getPerkebunanById($id);
    $data['title'] = $data['perkebunan']['judul'];

    // $data['detail'] = $this->perkebunan->getLuasTanamanPerkebunanBesarById($id);

    // load library
    $this->load->library('pagination');

    // ambil data keyword
    if ($this->input->post('keyword_table_perkebunan')) {
      $data['keyword_table_perkebunan'] = $this->input->post('keyword_table_perkebunan');
      $this->session->set_userdata('keyword_table_perkebunan', $data['keyword_table_perkebunan']);
    } else {
      $data['keyword_table_perkebunan'] = $this->session->userdata('keyword_table_perkebunan');
    }

    // config
    $this->db->like('kab_kota', $data['keyword_table_perkebunan']);
    $this->db->or_like('nama_tanaman', $data['keyword_table_perkebunan']);
    $this->db->or_like('tahun', $data['keyword_table_perkebunan']);
    $this->db->or_like('jumlah', $data['keyword_table_perkebunan']);
    $this->db->from('luas_tanaman_perkebunan_besar');

    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 10;
    $config['base_url'] = 'http://localhost/sisfo-pemetaan-pemanfaatan-lahan/detail_daerah/pertanian_pertambangan/perkebunan/table/';

    // initialize
    $this->pagination->initialize($config);

    // get data from model send to view
    $data['start'] = $this->uri->segment(6);
    $data['detail'] = $this->perkebunan->getLuasTanamanPerkebunanBesar($config['per_page'], $data['start'], $data['keyword_table_perkebunan']);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('pertanian_pertambangan/perkebunan/table', $data);
    $this->load->view('templates/footer');
  }

  public function unsetDataCariLuasTanamanPerkebunan($id)
  {
    $this->session->unset_userdata('keyword_table_perkebunan');
    session_destroy('keyword_table_perkebunan');
    redirect('detail_daerah/pertanian_pertambangan/perkebunan/table/' . $id);
  }
}
