<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	
	function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing

	//========================================================//
	
	public function index()
	{
		
		$this->load->view('login');
		
	}

}
