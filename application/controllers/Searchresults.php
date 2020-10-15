<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchresults extends CI_Controller
{

	public function index()
	{
		$q=$_GET["q"];

		$this->load->model('DetailModel');
		$result['SearchResult'] = $this->DetailModel->getSearchResults($q);
		$this->load->view('search-results', $result);//here

	}

}
