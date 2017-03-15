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
        $this->load->database();
        
        //The first and third line imports the templates
        // which are in the templates folder under views.
        // the middle one is to render the view you want to see.
        
        // Check if user is logged in
        if ($this->facebook->is_authenticated())
        {
            // User logged in, get user details
            $user = $this->facebook->request('get', '/me?fields=id,name,last_name,gender,email, picture');
            
            $CI =& get_instance();
            $f = new stdClass();
            $f->nombre = $user['name'];
            $f->correo = $user['email'];
            
            // Check if the user exist in the database, if it does not exist add it
            $sql = "select * from usuario where correo = ?";
            $CI =& get_instance();
            $email = $user['email'];
            $rs = $CI->db->query($sql, array($email));
            $rs = $rs->result();
            
            // The user exists in the database
            if(count($rs) > 0){
                // The user does not exist in the database
            } else {
                $CI->db->insert('usuario',$f);
                
            }
            
            if (!isset($user['error']))
            {
                $data['user'] = $user;
            }
        }
        
        $this->load->view('templates/top');
        $this->load->view("admin/register");
        $this->load->view('templates/footer');
        
    }
}