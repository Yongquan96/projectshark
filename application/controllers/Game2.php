<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/subHeader');
		$this->load->view('template/gameMenu');
		$this->load->view('game2');
	}
}
