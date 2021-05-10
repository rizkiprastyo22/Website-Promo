<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->cekLogin();

    // Load model Promo
    $this->load->model('model_promo');
  }

  public function index()
  {
    $data['pageTitle'] = 'Home';
    $data['promo'] = $this->model_promo->get()->result();
    $data['pageContent'] = $this->load->view('dashboard/main', $data, TRUE);

    $this->load->view('template/layout', $data);
  }

  public function routing_ka_ayah()
  {
    echo 'Hahaha';
  }
}