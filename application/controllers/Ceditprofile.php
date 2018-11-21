<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('lib/Gumlet/ImageResize.php');
include('lib/Gumlet/ImageResizeException.php');

use Gumlet\ImageResize;
use Gumlet\ImageResizeException;

class Ceditprofile extends CI_Controller {

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

	public function update(){
		$nombre = strtolower($this->input->post("nombre"));
        $apellido = strtolower($this->input->post("apellido"));
		$pais = $this->input->post("cod_pais");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$nombre_img = $_FILES['img_profile']['name'];
		$imagen_profile = "";
		$fnacimiento = $this->input->post("fnacimiento");
		$descripcion = strtolower($this->input->post("descripcion"));
		$tel = $this->input->post("telefono");
        $web = strtolower($this->input->post("web"));
        
        // redes sociales
        $facebook = strtolower($this->input->post("facebook"));
		$twitter = strtolower($this->input->post("web"));
		
		//Imagen miniatura y nombre
		if (file_exists($nombre_img)) {
			$ext = pathinfo($nombre_img, PATHINFO_EXTENSION);
			$s = strtoupper(md5(uniqid(rand(), true)));	     
			$nombre_img = time() . "_" . substr($s, 12, 4) . "." . $ext;
			$directorio = $_SERVER['DOCUMENT_ROOT'] . 'resources/profile/img/';
			move_uploaded_file($_FILES['img_profile']['tmp_name'], $directorio . $nombre_img);
			$image = new ImageResize($directorio . $nombre_img);
			$image->resize(205, 205);
			$image->save($directorio . $nombre_img);
			$imagen_profile = 'resources/profile/img/' . $nombre_img; 
		}
		//End Imagen
		
		$resusername = $this->Musuario->getUsername(
            strtolower($username)
        );
        
		$resemail = $this->Musuario->getEmail(
            strtolower($email)
        );

		if (!$resusername && !$resemail) {
			$this->session->set_flashdata("error","usuario y correo electronico en uso");
			redirect(base_url()."cprofile/editprofile");
		}
		elseif (!$resusername) {
			$this->session->set_flashdata("error","username en uso.");
			redirect(base_url()."cprofile/editprofile");
		}
		elseif (!$resemail) {
			$this->session->set_flashdata("error","correo electronico en uso");
			redirect(base_url()."cprofile/editprofile");
		}
		elseif (empty($username)) {
			redirect(base_url()."cprofile/editprofile");
		}
		else{
			$data  = array(		
				'nom_usuario' => ucwords($nombre), 
				'apell_usuario' => ucwords($apellido), 
				'cod_pais' => ucwords($pais), 
				'email_usuario' => strtolower($email), 
				'username_usuario' => strtolower($username), 
				'pass_usuario' => sha1($password),	 
				'imagen_usuario' => $imagen_profile,	 
				'fnacimiento_usuario' => $fnacimiento,		 
				'descripcion_usuario' => $descripcion,	 
				'tel_usuario' => $tel,	 
				'webpage_usuario' => $web,	 
				'facebook_usuario' => $facebook,	 
				'twitter_usuario' => $twitter
			);
			if($this->Musuario->editProfile($data)){							
				$data  = array(		
				'cod_usuario' => $res->cod_usuario,		
				'cod_rol' => $res->cod_rol,
				'img_profile' => $res->imagen_usuario,
				'username' => $res->username_usuario,
				'login' => TRUE
				);
				$this->session->set_userdata($data);
				$this->session->set_flashdata("right","Datos actualizados exitosamente!");
				redirect(base_url()."cprofile/editprofile");
			}else {
				$this->session->set_flashdata("error","Problema al registrar los datos, vuelva a intentarlo mas tarde.");
				redirect(base_url()."cprofile/editprofile");				
			}
		}
    }
    
}