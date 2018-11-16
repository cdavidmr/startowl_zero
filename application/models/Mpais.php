<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpais extends CI_Model {

	public function getPais($codigo){
		$this->db->where("cod_pais", $codigo);
		$resultados = $this->db->get("pais");
		return $resultados->row();
	}

	public function getProfile($codigo){
		$this->db->where("cod_usuario", $codigo);		
		$resultados = $this->db->get("usuario");
		return $resultados->row();
	}
}
