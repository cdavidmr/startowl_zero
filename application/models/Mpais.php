<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpais extends CI_Model {

	public function getPais(){
		$resultados = $this->db->get("pais");
		return $resultados->row();
	}

}
