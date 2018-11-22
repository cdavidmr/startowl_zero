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

	public function getProfile($codigo){
		$this->db->where("cod_usuario", $codigo);
		$this->db->from('usuario');
		$this->db->join('pais', 'usuario.cod_pais = pais.cod_pais');	
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function getUsername($username){
		$this->db->where("username_usuario", $username);
		$resultados = $this->db->get("usuario");
		if ($resultados->num_rows() > 0) {
			return false;
		}else{
			return true;
		}
	}

	public function getEmail($email){
		$this->db->where("email_usuario", $email);
		$resultados = $this->db->get("usuario");
		if ($resultados->num_rows() > 0) {
			return false;
		}else{
			return true;
		}
	}

	public function newUser($data){
		return $this->db->insert('usuario',$data);	
	}
	
	public function editProfile($codigo,$data){
		$this->db->where('cod_usuario', $codigo);
		return $this->db->update('usuario',$data);	
	}

}
