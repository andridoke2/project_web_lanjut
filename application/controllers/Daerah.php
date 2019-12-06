<?php

class Daerah extends CI_Controller
{

  public function __Construct()
  {
    parent::__construct();
    $this->load->model('Daerah_model');
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

  public function detail($id)
  {
    $data['title'] = 'Detail Daerah';
    $data['result'] = $this->Daerah_model->getID($id);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('daerah/detail', $data);
    $this->load->view('templates/footer');
  }
}
