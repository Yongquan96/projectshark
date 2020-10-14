<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllShark extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DetailModel');//Model insert here

	}

	public function index()
	{
		$result['allSharkDetail']=$this->DetailModel->getAllSharkDetail();

		$this->load->view('template/header');
		$this->load->view('template/subHeaderAdmin');
		$this->load->view('allShark',$result);
	}

	public function deleteSpecies(){

		$id=$this->input->post('id');
		//echo $id;
		$this->DetailModel->deleteSharkDetails($id);

	}
}
