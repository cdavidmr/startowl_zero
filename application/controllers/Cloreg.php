<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cloreg extends CI_Controller {

    public function __construct(){
        parent::__construct();        
        $this->load->controller('cauth');
        $this->load->view('layout/head');	        
    }
    
    
    public function login(){
        $this->load->view('vlogin');
        $this->load->view('layout/footer');
    }
     
    public function register(){
            $this->load->view('vregister');
            $this->load->view('layout/footer');
    }

    public function forgotpass(){
            $this->load->view('vforgotpass');
            $this->load->view('layout/footer');
    }

}