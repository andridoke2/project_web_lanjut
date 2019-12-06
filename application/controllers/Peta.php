<?php

class Peta extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Peta_model');
  }

  public function index()
  {
    $data['title'] = 'Peta Kalimantan Barat';
    $data['result'] = $this->Peta_model->getData();

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('peta/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['title'] = 'Detail Lokasi';
    $data['result'] = $this->Peta_model->getID($id);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('peta/detail', $data);
    $this->load->view('templates/footer');
  }
}
