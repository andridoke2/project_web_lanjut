<?php

class About extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'About';

    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('about/index');
    $this->load->view('templates/footer');
  }
}
