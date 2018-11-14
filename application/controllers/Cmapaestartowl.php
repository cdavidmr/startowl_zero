<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmapastartowl extends CI_Controller {

    public function __construct(){
        parent::__construct();
		if ($this->session->userdata("login")) {
			redirect(base_url());
		}
        $this->load->view('layout/head');
        $this->load->view('layout/header');
    }
    
    public function index(){
            $this->load->view('vmapaemprende');
            $this->load->view('layout/footer');
    }
    
}