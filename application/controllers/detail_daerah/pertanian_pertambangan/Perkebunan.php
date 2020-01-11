<?php

class Perkebunan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
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

  public function tambah()
  {
    $data['title'] = 'Tambah data perkebunan';

    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('akhir_update', 'Terkahir Update', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/navbar', $data);
      $this->load->view('templates/header');
      $this->load->view('pertanian_pertambangan/perkebunan/tambah');
      $this->load->view('templates/footer');
    } else {
      $judul = $this->input->post('judul', true);
      $akhirUpdate = $this->input->post('akhir_update', true);
      $nid_daerah = 20; // sementara default

      $this->perkebunan->tambahPerkebunan($judul, $akhirUpdate, $nid_daerah);
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('detail_daerah/pertanian_pertambangan/perkebunan/');
    }
  }

  /**
   * filter data berdasarkan nama dari tanaman
   * 
   * NOTE : harusnya dimasukan kedalam helper kita sendiri.
   */
  private function filterNamaTanaman($data, $nama, $index)
  {
    $result = [];
    for ($i = 0; $i < sizeof($data); $i++) {
      if ($data[$i][$index] == $nama) {
        $result[] = $data[$i][$index];
      }
    }
    return $result;
  }

  /**
   * cek apakah yang dimasukan divariabel $nama1, $nama2 dan $nama3
   * terdapat didalam array yang dimasukan ke variabel $data
   * 
   * NOTE : harusnya dimasukan kedalam helper kita sendiri
   */
  private function cekNamaTanaman($data, $nama1, $nama2, $nama3)
  {
    for ($i = 0; $i < sizeof($data); $i++) {
      if (in_array($nama1, $data) && in_array($nama2, $data) && in_array($nama3, $data)) return true;
    }
    return false;
  }

  public function detail($id)
  {
    $data['perkebunan'] = $this->perkebunan->getPerkebunanById($id);
    $data['title'] = $data['perkebunan']['judul'];
    $data['detail'] = $this->perkebunan->getStatistikSektoralById($id);
    $data['id'] = $id;

    $index = 'nama_tanaman'; // untuk menentukan index dari kolom yang akan difilter pada table.

    $nama_tanaman = filterNamaTanaman($data['detail'], 'Anekah Tanaman', $index);
    $nama_tanaman = array_merge(
      $nama_tanaman,
      filterNamaTanaman($data['detail'], 'Karet', $index)
    );
    $nama_tanaman = array_merge(
      $nama_tanaman,
      filterNamaTanaman($data['detail'], 'Kelapa Sawit', $index)
    );

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    if (cekNamaTanaman($nama_tanaman, 'Karet', 'Kelapa Sawit', 'Anekah Tanaman')) {
      $this->load->view('pertanian_pertambangan/perkebunan/detail_multi', $data); // untuk beberapa tanaman
    } else {
      $this->load->view('pertanian_pertambangan/perkebunan/detail_single', $data); // untuk satu jenis tanaman
    }
    $this->load->view('templates/footer');
  }

  public function table($id)
  {
    $data['perkebunan'] = $this->perkebunan->getPerkebunanById($id);
    $data['title'] = $data['perkebunan']['judul'];

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
    $this->db->from('statistik_sektoral');

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
