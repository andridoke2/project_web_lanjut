<?php

class PertanianPertambangan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('PertanianPertambangan_model', 'pertanian');
  }

  public function index()
  {
    $data['title'] = 'Pertanian & Pertambangan';
  }
}
