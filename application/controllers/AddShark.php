<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddShark extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DetailModel');//Model insert here

	}

	public function index()
	{
		//Add Shark
		$speciesID = $this->input->post('speciesID');
		$speciesName = $this->input->post('speciesName');
		$imageUrl = $this->input->post('imageUrl');
		$contentUrl =$this->input->post('contentUrl');
		$content =$this->input->post('content');
		if($speciesID!=0&&$speciesName!=""&&$imageUrl!=""&&$content!=""&&$contentUrl!=""){
			$addSuccess = $this->DetailModel->addSharkDetails($speciesID,$speciesName,$imageUrl,$content,$contentUrl);

			if($addSuccess=="success"){
				echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
				  Species added
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					<span aria-hidden=\"true\">&times;</span>
				  </button>
				</div>";
			}

		}


//		echo $speciesID ;
//		echo $speciesName;
//		echo $imageUrl;
//		echo $contentUrl;
//		echo $content;

		$result['allSharkDetail']=$this->DetailModel->getAllSharkDetail();

		$this->load->view('template/header');
		$this->load->view('template/subHeaderAdmin');
		$this->load->view('addShark',$result);
	}
}
