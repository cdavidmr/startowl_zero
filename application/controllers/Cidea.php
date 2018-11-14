<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidea extends CI_Controller {

    public function __construct(){
        parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
        $this->load->view('layout/head');
    }
    
    public function nuevaidea(){
        $this->load->view('layout/header');
        $this->load->view('vnuevaidea');
        $this->load->view('layout/footer');
    }

}