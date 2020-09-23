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
		$result['quiz']=$this->HomeModel->getQuiz();

		$this->load->view('template/header');
		$this->load->view('home',$result);
	}
}
