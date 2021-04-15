<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMain extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('footer');
	}
	public function signuplist()
	{
		$this->load->view('header');
		
		$this->load->view('footer');
	}
	public function contactlist()
	{
		$this->load->view('header');
		$data['cont']=$this->adminmodel->fetchallcontacts();
		$this->load->view('contactlist',$data);
		$this->load->view('footer');
	}
	public function deletecontact()
	{
		$id=$_REQUEST['id'];
		$status=$this->adminmodel->deletemycontact($id);
		if($status==true){
		$this->session->set_flashdata("msg","Record deleted successfully");
		header("Location:contactlist.php");
		}
	}
	public function editcontact()
	{
		$id=$_REQUEST['id'];
		$data['econt']=$this->adminmodel->editmycontact($id);
		$this->load->view('header');
		$this->load->view('editcontact',$data);
		$this->load->view('footer');
		
		
		
	}
	public function updatecontact()
	{
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['msg'];
		$cid=$_POST['cid'];
		$status=$this->adminmodel->updatemycontact($name,$email,$mobile,$message,$cid);
		if($status==true)
		{
			$this->session->set_flashdata("msg","contact updated successfully");
			header("Location:contactlist.php");
		}
		else{
			$this->session->set_flashdata("msg","some error while updating");
			header("Location:editcontact.php");
		}
		
		
	}
	public function addblogs()
	{
		$this->load->view('header');
		$this->load->view('addblogs');
		$this->load->view('footer');
		
	}
	public function saveblogs()
	{
		$title=$_POST['title'];
		$desc=$_POST['description'];
		$bimage=$_FILES['blogimage']['name'];
		
		move_uploaded_file($_FILES['blogimage']['tmp_name'],"assets/blogs/".$bimage);
		$status=$this->adminmodel->savemyblogs($title,$desc,$bimage);
		if($status==true)
		{
			$this->session->set_flashdata("msg","blogs Uploaded");
			header("Location:addblog.php");
		}
	}
//===================================================================//
}//admin modelcloses
