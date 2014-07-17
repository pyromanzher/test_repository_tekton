<?php

Class Objeto_Model extends CI_Model {

	function __construct() {
		parent::__construct();
		
		//Modelo??
	}
	
	function get($id) {
	$this->db->where('id',$id);
	$res = $this->db->get('Tabla');
	
	return $res->result_array();
	}
}