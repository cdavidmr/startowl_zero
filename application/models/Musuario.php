<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musuario extends CI_Model {

	public function login($username, $password){
		$this->db->where("username_usuario", $username);
		$this->db->where("pass_usuario", $password);

		$resultados = $this->db->get("usuario");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

	public function getprofile($codigo){
		$this->db->where("cod_usuario", $codigo);		
		$resultados = $this->db->get("usuario");
		return $resultados->result();
	}
}
