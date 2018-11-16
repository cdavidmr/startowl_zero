<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cauth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Musuario");
	}
	
	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."cprofile/profile");
		}
		else{
			$this->load->view("cloreg/login");
		}		

	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Musuario->login($username, sha1($password));

		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}
		else{
			$data  = array(
				'correo' => $res->email_usuario, 
				'nombre' => $res->nom_usuario,
				'rol' => $res->rol_usuario,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."cprofile/profile");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
