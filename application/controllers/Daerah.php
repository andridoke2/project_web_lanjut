<?php

class Daerah extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Daerah_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Daerah';

    // load library
    $this->load->library('pagination');

    // ambil data keyword
    if ($this->input->post('keyword_daerah')) {
      $data['keyword_daerah'] = $this->input->post('keyword_daerah');
      $this->session->set_userdata('keyword_daerah', $data['keyword_daerah']);
    } else {
      $data['keyword_daerah'] = $this->session->userdata('keyword_daerah');
    }

    // config
    $this->db->like('nid', $data['keyword_daerah']);
    $this->db->or_like('parent_nid', $data['keyword_daerah']);
    $this->db->or_like('name', $data['keyword_daerah']);
    $this->db->or_like('serial', $data['keyword_daerah']);
    $this->db->or_like('type', $data['keyword_daerah']);
    $this->db->or_like('latitude', $data['keyword_daerah']);
    $this->db->or_like('longitude', $data['keyword_daerah']);
    $this->db->or_like('status', $data['keyword_daerah']);
    $this->db->from('daerah');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 10;
    $config['base_url'] = 'http://localhost/sisfo-pemetaan-pemanfaatan-lahan/daerah/index';

    // initialize
    $this->pagination->initialize($config);

    // get data from model send to view
    $data['start'] = $this->uri->segment(3);
    $data['daerah'] = $this->Daerah_model->getDaerah($config['per_page'], $data['start'], $data['keyword_daerah']);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('daerah/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Data Daerah';

    // validasi form.
    $this->form_validation->set_rules('nid', 'NID', 'required');
    $this->form_validation->set_rules('parentNID', 'Parent NID', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('serial', 'Serial', 'required');
    $this->form_validation->set_rules('type', 'Type', 'required');
    $this->form_validation->set_rules('lat', 'Latitude', 'required');
    $this->form_validation->set_rules('lng', 'Longitude', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');

    // cek apakah validasi sesuai atau belum dengan ketentuan yang diberikan.
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/navbar', $data);
      $this->load->view('templates/header');
      $this->load->view('daerah/tambah');
      $this->load->view('templates/footer');
    } else {
      // mengambil data dari form inputan user.
      $nid       = $this->input->post('nid', true);
      $parentNID = $this->input->post('parentNID', true);
      $name      = $this->input->post('name', true);
      $serial    = $this->input->post('serial', true);
      $type      = $this->input->post('type', true);
      $lat       = $this->input->post('lat', true);
      $lng       = $this->input->post('lng', true);
      $status    = $this->input->post('status', true);

      $this->Daerah_model->tambah($nid, $parentNID, $name, $serial, $type, $lat, $lng, $status);
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('daerah');
    }
  }

  public function ubah($nid)
  {
    $data['title'] = 'Daerah';
    $data['daerah'] = $this->Daerah_model->getByID($nid);

    $this->form_validation->set_rules('nid', 'NID', 'required');
    $this->form_validation->set_rules('parentNID', 'Parent NID', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('serial', 'Serial', 'required');
    $this->form_validation->set_rules('type', 'Type', 'required');
    $this->form_validation->set_rules('lat', 'Latitude', 'required');
    $this->form_validation->set_rules('lng', 'Longitude', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/navbar', $data);
      $this->load->view('templates/header');
      $this->load->view('daerah/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Daerah_model->ubah();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('daerah/detail/' . $nid);
    }
  }

  public function hapus($nid)
  {
    $this->Daerah_model->hapus($nid);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('daerah');
  }

  public function detail($id)
  {
    $data['title'] = 'Detail Daerah';
    $data['result'] = $this->Daerah_model->getByIdJSON($id);
    $data['menu_detail'] = $this->Daerah_model->getMenu();
    $data['sub_menu_detail'] = $this->Daerah_model->getSubMenu();

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('daerah/detail', $data);
    $this->load->view('templates/footer');
  }

  public function getDaerahJSON($id)
  {
    return $this->Daerah_model->getByIdJSON($id);
  }

  public function unsetDataCariDaerah()
  {
    $this->session->unset_userdata('keyword_daerah');
    session_destroy('keyword_daerah');
    redirect('daerah');
  }
}
