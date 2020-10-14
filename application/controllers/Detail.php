<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DetailModel');//Model insert here

	}

	public function index()
	{
		$id = (int)$_GET["id"];
		//$id = 37013900; //sample shark id

		$result['allSharkDetail']=$this->DetailModel->getAllSharkDetail();
		$result['getSharkDetail'] = $this->DetailModel->getSharkDetailByID($id);

		$this->load->view('template/header');
		$this->load->view('template/subHeader');
		$this->load->view('detail',$result);
	}
}
