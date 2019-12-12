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
    $data['detail'] = $this->perkebunan->getLuasTanamanPerkebunanBesarById($id);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('pertanian_pertambangan/perkebunan/table', $data);
    $this->load->view('templates/footer');
  }
}
