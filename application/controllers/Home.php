<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeModel');//Model insert here

	}

	public function index()
	{
		$result[] = "";
		//$result['sharkDetail']=$this->HomeModel->getSharkDetail();

		$this->load->view('template/header',$result);
		$this->load->view('home');
	}
}
