<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chomepage extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->view('layout/landing/headhome');
        $this->load->view('layout/landing/navhome');
        $data  = array(
            'id' => '', 
            'nombre' => '',
            'rol' => '',
            'login' => FALSE
        );
        $this->session->set_userdata($data);
    }
    
    public function index(){
		$this->load->view('vhomepage');
        $this->load->view('layout/landing/footerhome');
    }
    
    
}