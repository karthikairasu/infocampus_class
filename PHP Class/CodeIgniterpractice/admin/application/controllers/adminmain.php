<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMain extends CI_Controller {
	
	function __construct() {
	parent::__construct();
	$this->load->model('adminmodel');
	$this->load->library('session');
	
	if($this->session->userdata("id")=="")
	{
		$this->session->set_flashdata("msg","Sorry, Unauthorized access!");
		header("Location:index.php");
	}
	
	}//construct closing
	
	//==================================================//
 
    
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function contactlist()
	{
		$this->load->view('header');
		$this->load->view('contactlist');
		$this->load->view('footer');
	}
	public function viewcontact()
	{
		$this->load->view('header');
		$data['cont']=$this->adminmodel->fetchcontact();
		$this->load->view('contactlist',$data);
		$this->load->view('footer');
	}
	public function deletecontact()
	{
		$id=$_GET['id'];//this is the key passed in json variable mydata//
		$status=$this->adminmodel->deletemycontact($id);
		if($status==true)
		{
			header("Location:viewcontact.php");
		}
		else
		{
			echo "error";
		}
	}
	public function editcontact()
	{
		$id=$_GET['id'];
		$data['cont']=$this->adminmodel->editcontact($id);
		$this->load->view('header');
		$this->load->view('editcontact',$data);
		$this->load->view('footer');
	}
	public function updatecontact()
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['message'];
		$id=$_POST['id'];
		
		$status=$this->adminmodel->updatecontact($name,$email,$mobile,$message,$id);
		if($status==true)
		{
			header("Location:viewcontact.php");
		}
		else
		{
			echo "error";
		}
	}
	public function logout()
	{
		$data=array("id"=>"","name"=>"");//setting the array key to blank and passing it to set_userdata()
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","You have logged out successfully!");
		header("Location:index.php");//1)check in routes
	}	
	public function addcontactajax()
	{
		$this->load->view("header");
		$this->load->view("addcontactajax");
		$this->load->view("footer");
	}
	public function savecontactajax()
	{
		$name=$_POST['n'];//here we will use key given in myajax.js file to mydata json variable
		$email=$_POST['e'];
		$mobile=$_POST['mob'];
		$message=$_POST['mesg'];
		
		$status=$this->adminmodel->savecontactajax($name,$email,$mobile,$message);
		if($status==true)
		{
			echo "data saved successfully";
		}
		else
		{
			echo("some error");
		}
	}
	public function contactlist2ajax()
	{
		$this->load->view('header');
		$data['cont']=$this->adminmodel->fetchcontact();
		$this->load->view('contactlist2',$data);
		$this->load->view('footer');
	}
	public function deletecontactajax()
	{
		
		$cid=$_POST['cid'];
		$status=$this->adminmodel->deletecontactajax($cid);
		if($status==true)
		{
			echo"delete successfully";
		}
		else
		{
			echo "error";
		 } 
	}
	public function editcontactajax()
	{
		
		$cid=$_POST['cid'];
		$alldata['econt']=$this->adminmodel->editcontactajax($cid);
		$row=$alldata['econt'];
		echo"<form class='form-horizontal'>";
		  echo"<div class='row form-group'>
					<label>Name</label>
					<input type='text' class='form-control' id='efname' name='fname' value='$row->name' />
				 </div>";
		  echo"<div class='row form-group'>
					 <label>Email</label>
					 <input type='text' class='form-control' id='eemail' name='email' value='$row->email' />
				 </div>";
		  
		  echo" <div class='row form-group'>
					 <label>Mobile</label>
					 <input type='text' class='form-control' id='emobile' name='mobile' value='$row->mobile' />
				 </div>";
				 
		  echo" <div class='row form-group'>
					 <label>Id</label>
					 <input type='text' class='form-control' id='eid' name='id' value='$row->id' readonly/>
				 </div>";
		  echo"<div class='row form-group'>
				 <label>Message</label>
				 <textarea type='text' class='form-control' id='emessage' name='message'>$row->message</textarea>
			 </div >";
		  echo"<div class='row text-center'>
				   <button  class='btn btn-primary btn-block' onclick='validateupdatecontact()' type='button'>Update</button>
				 
				 </div>";
		echo"</form>";
		
	}
	public function updatecontactajax()
	{
		$name=$_POST['n'];//here we will use key given in myajax.js file to mydata json variable
		$email=$_POST['e'];
		$mobile=$_POST['mob'];
		$message=$_POST['mesg'];
		$id=$_POST['eid'];
		$status=$this->adminmodel->updatecontactajax($name,$email,$mobile,$message,$id);
		if($status==true)
		{
			echo "data saved successfully";
		}
		else
		{
			echo("some error");
		}
	}
}
