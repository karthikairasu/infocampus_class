<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	
	function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('home.php');
		$this->load->view('footer.php');
	}
	public function register()
	{
		$this->load->view('header.php');
		$this->load->view('register.php');
		$this->load->view('footer.php');
	}
	//=============================================//
	public function saveregister()
	{
		$name=$_POST['name'];
		$age =$_POST['age'];
		$city =$_POST['city'];
		$pincode =$_POST['pincode'];
		$dob =$_POST['dob'];
		$imagename =$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"assets/images/".$imagename);
		$gender=$_POST['gender'];
		$status=$this->user_model->saveregister($name,$age,$city,$pincode,$dob,$imagename,$gender);
		if($status==true)
		{
			header("Location:viewuser");
		}
	}  
	public function viewuser()
	{
		$this->load->view('header');
		$data['user']=$this->user_model->fetchalluser();
		$this->load->view('userlist',$data);
		$this->load->view('footer');
	}
	public function deleteuser()
	{
		$id=$_GET['id'];
		$status=$this->user_model->deletemyuser($id);
		if($status==true)
		{
			header("Location:viewuser");
		}
		else
		{
			echo "error";
		}
	}
	public function edituser()
	{
		$id=$_GET['id'];
		$data['user']=$this->user_model->editmyuser($id);
		$this->load->view('header');
		$this->load->view('edituser',$data);
		$this->load->view('footer');
	}
	public function updateuser()
	{
		$name=$_POST['name'];
		$age =$_POST['age'];
		$city =$_POST['city'];
		$pincode =$_POST['pincode'];
		$dob =$_POST['dob'];
		$gender=$_POST['gender'];
		$id=$_POST['id'];
		
		$status=$this->user_model->updateuser($name,$age,$city,$pincode,$dob,$gender,$id);
		if($status==true)
		{
			header("Location:viewuser");
		}
		else
		{
			echo"error";
		}
	}
}
