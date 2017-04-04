<?php
date_default_timezone_set('America/Santo_Domingo');

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        //This declaration will let me redirect the controller to the login in case it is not set
        $currentMethod = $this->router->fetch_method();
        if(!isset($_SESSION['itla_bike_user']) && $currentMethod != 'login'){
            redirect('admin/login');
        }
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
    //this function will redirect to the edit view based on an id
    function edit($id=0){

      if($id == 0){
        redirect('admin');
      }
      $d = array();
      $d['id'] = $id;
      //The first and third line imports the templates
      // which are in the templates folder under views.
      // the middle one is to render the view you want to see
      $this->load->view('templates/top');
      $this->load->view("admin/edit",$d);
      $this->load->view('templates/footer');
    }

    function delete($id=0){
      if($id == 0){
        redirect('admin');
      }
      $CI =& get_instance();
      $CI->db->delete('images',array('idAd' => $id));
      $CI->db->delete('anuncio', array('id' => $id));
      redirect('admin');
    }
    //This function will logout the user from the system
    function logout(){
        $url = base_url('');

        unset($_SESSION['itla_bike_user']);
        redirect('http://localhost/itlaBike/');
    }

  }
