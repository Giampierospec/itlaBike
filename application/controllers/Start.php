<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('templates/top');
    $this->load->view('start');
    $this->load->view('templates/footer');
  }
  function nosotros(){
    $this->load->view('templates/top');
    $this->load->view('nosotros');
    $this->load->view('templates/footer');
  }
function categoria(){
  $this->load->view('templates/top');
  $this->load->view('categorias');
  $this->load->view('templates/footer');
}

}
