<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmain extends CI_Controller {
	
	function __construct() {
	parent::__construct();
	$this->load->model('adminmodel');
	$this->load->library('session');
	}//construct closing
	
	//==================================================//

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function logout()
	{
		$data=array("id"=>"","name"=>"");
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","you have loggout successfully");
		header("Location:index.php");
	}
}
