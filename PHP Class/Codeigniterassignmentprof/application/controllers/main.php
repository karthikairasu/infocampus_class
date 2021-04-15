<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

   function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing
	//=============================================//

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function addprofile()
	{
		$this->load->view('header');
		$this->load->view('addprofile');
		$this->load->view('footer');
	}
	public function saveprofile()
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$occupation=$_POST['occupation'];
		$company=$_POST['company'];
		$proimage=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo'] ['tmp_name'],"assets/images/".$proimage);
		$status=$this->user_model->saveprofile($name,$email,$mobile,$city,$state,$occupation,$company,$proimage);
		if($status==true)
		{
			header("Location:viewprofile.php");
		}
		else
		{
			echo "error";
		}
	}
	public function viewprofile()
	{
		$this->load->view('header');
		$data['prof']=$this->user_model->fetchprofile();
		$this->load->view('viewprofile',$data);
		$this->load->view('footer');
		
	}
	public function deleteprofile()
	{
		$id=$_GET['id'];
		$status=$this->user_model->deletemyprofile($id);
		if($status==true)
		{
			header("Location:viewprofile.php");
		}
		else{
			echo "error";
		}
	}
	public function editprofile()
	{
		$id=$_GET['id'];
		$data['prof']=$this->user_model->editmyprofile($id);
		$this->load->view('header');
		$this->load->view('editprofile',$data);
		$this->load->view('footer');
	}
	public function updateprofile()
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$occupation=$_POST['occupation'];
		$company=$_POST['company'];
		$pimage=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image'] ['tmp_name'],"assets/images".$pimage);
		$id=$_POST['id'];
		
		$status=$this->user_model->updateprofile($name,$email,$mobile,$city,$state,$occupation,$company,$pimage,$id);
		if($status==true)
		{
			header("Location:viewprofile.php");
		}
		else
		{
			echo "error";
		}
		
		
	}
}
