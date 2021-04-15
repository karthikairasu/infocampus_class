<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	
	function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing

	//========================================================//
	
	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('home.php');
		$this->load->view('footer.php');
	}
	public function home()
	{
		$this->load->view('header.php');
		$this->load->view('home.php');
		$this->load->view('footer.php');
	}
	public function Addblog()
	{
		$this->load->view('header.php');
		$this->load->view('Addblog.php');
		$this->load->view('footer.php');
	}
	public function bloglist()
	{
		$this->load->view('header.php');
		$this->load->view('bloglist.php');
		$this->load->view('footer.php');
	}
	//=================================================//
	public function saveblog()
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$blogimage=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"assets/images/".$blogimage);
		$status=$this->user_model->saveblog($title,$description,$blogimage);
        if($status==true)
		{
			$this->session->set_flashdata("msg","Blogs saved successfully");
			header("Location:viewblog.php");
		}
		else{
			
			echo "error";
		}
	}
	
	public function viewblog()
	{
		$this->load->view('header');
		$data['blog']=$this->user_model->fetchallblog();
		$this->load->view('bloglist',$data);
		$this->load->view('footer');
	}
	public function deleteblog()
	{
		$cid=$_GET['id'];
		$status=$this->user_model->deletemyblog($cid);
		if($status==true)
		{
			$this->session->set_flashdata("msg","Blogs delete successfully");
			header("Location:viewblog.php");
		}
		else
		{
			echo "error";
		}
	}
	public function editblog()
	{
		$cid=$_GET['id'];
		$data['blog']=$this->user_model->editmyblog($cid);
		$this->load->view('header');
		$this->load->view('editblog',$data);
		$this->load->view('footer');
		
	}
	public function updateblog()
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$id=$_POST['id'];
		$bimage=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$bimage);
		
		$status=$this->user_model->updateblog($title,$description,$bimage,$id);
		if($status==true)
		{
			$this->session->set_flashdata("msg","Blogs updateded successfully");
			header("Location:viewblog.php");
			
		}
		else
		{
			echo "error";
		}
	}
}
