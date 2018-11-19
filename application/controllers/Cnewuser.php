<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cnewuser extends CI_Controller {

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
			redirect(base_url()."cloreg/register");
		}		
	}

	public function register(){
		$nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
		$pais = $this->input->post("cod_pais");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$resusername = $this->Musuario->getUsername(
            strtolower($username)
        );
        
		$resemail = $this->Musuario->getEmail(
            strtolower($email)
        );

		if (!$resusername && !$resemail) {
			$this->session->set_flashdata("error","usuario y correo electronico en uso");
			redirect(base_url()."cloreg/register");
		}
		elseif (!$resusername) {
			$this->session->set_flashdata("error","username en uso.");
			redirect(base_url()."cloreg/register");
		}
		elseif (!$resemail) {
			$this->session->set_flashdata("error","correo electronico en uso");
			redirect(base_url()."cloreg/register");
		}
		elseif (empty($username)) {
			redirect(base_url()."cloreg/register");
		}
		else{
			$data  = array(		
				'nom_usuario' => ucwords($nombre), 
				'apell_usuario' => ucwords($apellido), 
				'cod_pais' => ucwords($pais), 
				'email_usuario' => strtolower($email), 
				'username_usuario' => strtolower($username), 
				'pass_usuario' => $password,
				'cod_rol' => 2,
				'cod_cuentaest' => 1, 
				'cod_email_estado' => 2,
				'fecha_registro' => current_date 		
			);

			if($this->Musuario->newUser($data)){			
				$data  = array(		
				'cod_usuario' => $res->cod_usuario,		
				'cod_rol' => $res->cod_rol,
				'username' => $res->username_usuario,
				'login' => TRUE
				);
				$this->session->set_flashdata("registrado","Se ha registrado exitosamente, por favor verifique su correo electronico.");
				redirect(base_url()."cprofile/profile");
			}else {
				$this->session->set_flashdata("error","Problema al registrar los datos, vuelva a intentarlo mas tarde.");
				redirect(base_url()."cloreg/register");				
			}
		}
    }
    
}