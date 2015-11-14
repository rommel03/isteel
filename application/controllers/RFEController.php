<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @Author: Rommel R. Gutierrez
 * Email: <a href="mailto:rommel.gutierrez@ymail.com">rommel.gutierrez@ymail.com</a>
 * Date: 11-11-2015 
 */

Class RFEController extends MY_Controller {

	private $user_uid;

	private $rfe_stages = array(
							"stage1" => array("person_involved" => "Estimator Head", "action" => "Wating for Estimator Head to deligate the RFE to his/her staff"),
							"stage2" => array("person_involved" => "Estimator Staff", "action" => "Waiting for the completetion of the Material Estimate"),
							"stage3" => array("person_involved" => "Estimator Head", "action" => "Wating for Estimator Head to approve or disapprove the Material Estimate"),
							"stage4" => array("person_involved" => "Sales Supervisor", "action" => "Waiting for Sales Supervisor to check the Material Estimate"),
							"stage5" => array("person_involved" => "Sales Manager", "action" => "Waiting for Sales Manager to Finalize the Material Estimate"),
							"stage6" => array("person_involved" => "Sales Admin", "action" => "Waiting for Sales Admin to create and print Sales Quotation"),
						);

	public function __construct()
	{
		parent::__construct();

		$this->user_uid;
		 = $this->session->userdata("user_uid");
	}

	/**
	 * 
	 */
	public function create()
	{
		$this->load->model("RFE_Model");

		$data["user_uid"] = $this->user_uid;
		$process_uid = $this->model->rfe_model->add($data);


		$this->load->model("User_Model");

		$estimator_head_uid = $this->model->user_model->getEstimatorHeadUID();

		$this->addProcessStatus();

	}

	public function edit()
	{

	}

	public function clone()
	{

	}

	public function delete()
	{

	}

	public function move()
	{

	}

	private function addProcessStatus(){}

	private function updateProcessStatus(){}


	private function validateData()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		return $this->form_validation->run();
	}


}