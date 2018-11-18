<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cemail extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata("login")) {
			redirect(base_url()."cloreg/login");
		}	
    }	
    
    public function index(){
            $this->load->view('vemail');
            $this->load->view('layout/footer');
    }
    
}