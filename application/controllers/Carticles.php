<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carticles extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    

    public function articles(){
        $this->load->view('layout/header');
        $this->load->view('varticles');
        $this->load->view('layout/footer');
}

    public function articlescont(){
        $this->load->view('layout/header');
        $this->load->view('varticlescont');
        $this->load->view('layout/footer');
}

    
}