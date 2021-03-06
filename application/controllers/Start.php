<?php
date_default_timezone_set('America/Santo_Domingo');

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
    function ver_anuncio($id=0) {
        if($id ==0)
        {
            redirect('start');
        }
        $d = array();
        $d['id'] = $id;

        $this->load->view('templates/top');
        $this->load->view('ver_anuncio', $d);
        $this->load->view('templates/footer');
    }
    //This function will let me see all that's inside category
function ver_categoria($id=0){
    if($id === 0)
        {
            redirect('start');
        }
        $d = array();
        $d['id'] = $id;

        $this->load->view('templates/top');
        $this->load->view('ver_categoria', $d);
        $this->load->view('templates/footer');

}
//This function will help me edit the comment
function edit_comment(){
  $id = $this->uri->segment(3);
  $cm = new stdClass();
  $cm->commentary = urldecode($this->uri->segment(4));
  $idAd = $this->uri->segment(5);
  if($id == 0){
      redirect("start");
  }
  $CI =& get_instance();
  $CI->db->where("id",$id);
  $CI->db->update("comment",$cm);
  redirect('start/ver_anuncio/'.$idAd);

}
function delete_comment(){
  $id = $this->uri->segment(3);
  $idAd = $this->uri->segment(4);
  if($id==0){
    redirect("start");
  }
  $CI =&get_instance();
  $CI->db->delete("comment",array("id" => $id));
  redirect("start/ver_anuncio/".$idAd);

}

}
