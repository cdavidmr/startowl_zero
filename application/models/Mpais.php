<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpais extends CI_Model {

	public function getPais(){
		$this->db->order_by("nom_pais", "asc");
		$resultados = $this->db->get("pais");
		return $resultados->result();
	}	

}
