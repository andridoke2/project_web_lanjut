<?php

class Home extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/header');
    $this->load->view('home/index', $data);
    $this->load->view('templates/footer');
  }
}
