<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpublicacion extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function nuevaidea(){
        $this->load->view('layout/header');
        $this->load->view('vnuevaidea');
        $this->load->view('layout/footer');
    }

}