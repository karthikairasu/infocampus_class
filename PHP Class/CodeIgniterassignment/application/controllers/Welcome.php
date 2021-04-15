<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 
    function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing
	
	
//===========================================================//

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('home.php');
		$this->load->view('footer.php');
	}
	public function contact()
	{
		$this->load->view('header.php');
		$this->load->view('contact.html');
		$this->load->view('footer.php');
	}
	
		public function contactlist()
	{
		$this->load->view('header.php');
		$this->load->view('contactlist.php');
		$this->load->view('footer.php');
	}
	
	
    public function savecontact()
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$imagename=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"assets/images/".$imagename);
		$status=$this->user_model->savecontact($title,$description,$imagename);
        if($status==true)
		{
			header("Location:viewcontact.php");
		}
		
		
	}
	
	public function viewcontact()
	{
		$this->load->view('header');
		$data['contact']=$this->user_model->fetchallcontact();
		$this->load->view('contactlist',$data);
		$this->load->view('footer');
	}
	public function deletecontact()
	{
		$id=$_GET['id'];
		$status=$this->user_model->deletemycontact($id);
		if($status==true)
		{
			header("Location:viewcontact.php");
		}
		else{
			echo "error";
		}
	}
	public function editcontact()
	{
		$id=$_GET['id'];
		$data['contact']=$this->user_model->editmycontact($id);
		$this->load->view('header');
		$this->load->view('editcontact',$data);
		$this->load->view('footer');
	}
	public function updatecontact()
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$id=$_POST['id'];
		
		$status=$this->user_model->updatecontact($title,$description,$id);
        if($status==true)
		{
			header("Location:viewcontact.php");
		}
		else
		{
			echo "error";
		}
		
	}
}
