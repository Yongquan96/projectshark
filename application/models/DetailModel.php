<?php
class DetailModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	function  getAllSharkDetail(){
		$query=$this->db->query("SELECT * from sharkdetail");

		$results = array();
		foreach ($query->result() as $result) {
			$results[] = $result;
		}
		return $results;
	}

	function getSharkDetailByID($id){
		$query= $this->db->query("SELECT * FROM sharkdetail WHERE id = '$id'");

		$results = array();
		foreach ($query->result() as $result) {
			$results[] = $result;
		}
		return $results;
	}
}
