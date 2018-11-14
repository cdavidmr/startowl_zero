<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidea extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->view('layout/head');
    }
    
    public function nuevaidea(){
        $this->load->view('layout/header');
        $this->load->view('vnuevaidea');
        $this->load->view('layout/footer');
    }

}