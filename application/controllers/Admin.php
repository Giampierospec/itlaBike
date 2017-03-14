<?php
date_default_timezone_set('America/Santo_Domingo');

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
        
        // Check if user is logged in
        if ($this->facebook->is_authenticated())
        {
            // User logged in, get user details
            $user = $this->facebook->request('get', '/me?fields=id,name,last_name,gender,email, picture');
            
            if (!isset($user['error']))
            {
                $data['user'] = $user;
            }
        }
        
        //  $this->load->view('data', $data);
        
        $this->load->view('templates/top');
        $this->load->view("admin/register");
        $this->load->view('templates/footer');
        
    }
    
}