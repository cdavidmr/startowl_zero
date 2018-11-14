<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller {

    public function __construct(){
        parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
        $this->load->view('layout/head');
        $this->load->view('layout/header');
    }
    
    public function profile(){
        $this->load->view('vuserprofile');
        $this->load->view('layout/footer');
    }
    
    public function editprofile(){
        $this->load->view('vedituserprofile');
        $this->load->view('layout/footer');
    }
        
}