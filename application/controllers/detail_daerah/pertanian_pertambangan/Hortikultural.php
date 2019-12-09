<?php

class Hortikultural extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('detail_daerah/pertanian_pertambangan/Hortikultural_model', 'hortikultural');
  }

  public function index()
  {
    $data['title'] = 'Hortikultural';
    $data['hortikultural'] = $this->hortikultural->getHortikultural();

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('pertanian_pertambangan/hortikultural/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['hortikultural'] = $this->hortikultural->getHortikulturalById($id);
    $data['title'] = $data['hortikultural']['judul'];
    $data['detail_hortikultural'] = $this->hortikultural->getLuasTanamanPerkebunanBesarById($id);

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('pertanian_pertambangan/hortikultural/detail', $data);
    $this->load->view('templates/footer');
  }
}
