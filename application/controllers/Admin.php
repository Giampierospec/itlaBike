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
    //The first and third line imports the templates
    // which are in the templates folder under views.
    // the middle one is to render the view you want to see.
    $this->load->view('templates/top');
    $this->load->view('admin/start');
    $this->load->view('templates/footer');
  }
function publicar_anuncio(){
  //The first and third line imports the templates
  // which are in the templates folder under views.
  // the middle one is to render the view you want to see.
  $this->load->view('templates/top');
  $this->load->view("admin/publicar_anuncio");
  $this->load->view('templates/footer');
}

function login(){
  //The first and third line imports the templates
  // which are in the templates folder under views.
  // the middle one is to render the view you want to see.
  $this->load->view('templates/top');
  $this->load->view("admin/login");
  $this->load->view('templates/footer');

}
function register(){
  //The first and third line imports the templates
  // which are in the templates folder under views.
  // the middle one is to render the view you want to see.
  $this->load->view('templates/top');
  $this->load->view("admin/register");
  $this->load->view('templates/footer');

}

}
