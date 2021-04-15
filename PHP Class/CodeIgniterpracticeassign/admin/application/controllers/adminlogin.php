<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	
	
	function __construct() {
	parent::__construct();
	$this->load->model('adminmodel');
	$this->load->library('session');
	}//construct closing
	
	//==================================================//

	public function index()
	{
		
		$this->load->view('index');
		
	}
	public function logincheck()
	{
		$email=$_POST["email"];
		$password=$_POST["password"];
		$status=$this->adminmodel->checkmylogin($email,$password);
		if($status==true)
		{
			header("Location:home.php");
		}
		else
		{
			echo "error";
		}
	}
}