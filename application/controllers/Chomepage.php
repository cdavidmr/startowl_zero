<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chomepage extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('layout/landing/headhome');
        $this->load->view('layout/landing/navhome');
		$this->load->view('vhomepage');
        $this->load->view('layout/landing/footerhome');
    }  
    
}