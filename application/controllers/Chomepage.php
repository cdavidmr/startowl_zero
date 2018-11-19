<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chomepage extends CI_Controller {

    public function __construct(){
        parent::__construct();		
        if ($this->session->userdata("login")) {
			redirect(base_url()."cprofile/profile");
        }      
		$this->load->model("Musuario");
        $this->load->view('layout/landing/headhome');
        $this->load->view('layout/landing/navhome');
    }
    
    public function index(){
		$this->load->view('vhomepage');
        $this->load->view('layout/landing/footerhome');
    }  
    
}
