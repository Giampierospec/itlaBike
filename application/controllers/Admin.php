<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('templates/top');
    $this->load->view('admin/start');
    $this->load->view('templates/footer');
  }
function publicar_anuncio(){
  $this->load->view('templates/top');
  $this->load->view("admin/publicar_anuncio");
  $this->load->view('templates/footer');
}

}
