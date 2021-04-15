<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing
	
	//==================================================//

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function savecontact()
	{
		$name =$_POST['name'];
		$email =$_POST['email'];
		$mobile =$_POST['mobile'];
		$message =$_POST['message'];
		$status=$this->user_model->savecontact($name,$email,$mobile,$message);
		if($status==true)
		{
			$this->session->set_flashdata('msg', 'data saved successfully');
			header('Location:contact.php');
		}
	}
}
