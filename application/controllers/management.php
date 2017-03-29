<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
    
    function index()
    {
        $this->load->database();
        $this->load->view('Management');
        $this->load->view('templates/top');
        $this->load->view('templates/footer');
    }
}