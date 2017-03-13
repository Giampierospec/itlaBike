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
    //The first and third line imports the templates
    // which are in the templates folder under views.
    // the middle one is to render the view you want to see.
    $this->load->view('templates/top');
    $this->load->view('start');
    $this->load->view('templates/footer');
  }
  function nosotros(){
    //The first and third line imports the templates
    // which are in the templates folder under views.
    // the middle one is to render the view you want to see.
    $this->load->view('templates/top');
    $this->load->view('nosotros');
    $this->load->view('templates/footer');
  }
function categoria(){
  //The first and third line imports the templates
  // which are in the templates folder under views.
  // the middle one is to render the view you want to see.
  $this->load->view('templates/top');
  $this->load->view('categorias');
  $this->load->view('templates/footer');
}

}
