<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends CI_Controller {
	
	
    function __construct() {
	parent::__construct();
	$this->load->model('user_model');
	$this->load->library('session');
	}//construct closing
	
	
//===========================================================//
	public function index()
	{   
	    $this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function addcity()
	{   
	    $this->load->view('header');
		$this->load->view('addcity');
		$this->load->view('footer');
	}
	public function addstate()
	{   
	    $this->load->view('header');
		$this->load->view('addstate');
		$this->load->view('footer');
	}
	public function addcategory()
	{   
	    $this->load->view('header');
		$this->load->view('addcategory');
		$this->load->view('footer');
	}
	public function addbrand()
	{   
	    $this->load->view('header');
		$this->load->view('addbrand');
		$this->load->view('footer');
	}
	public function addcustomer()
	{   
	    $this->load->view('header');
		$this->load->view('addcustomer');
		$this->load->view('footer');
	}
	public function addproduct()
	{   
	    $this->load->view('header');
		$this->load->view('addproduct');
		$this->load->view('footer');
	}
	//====================================================//save database
	
	public function saveproduct()
	{
		$name=$_POST['name'];
		$brand=$_POST['brand'];
		$category=$_POST['category'];
		$price=$_POST['price'];
		$description=$_POST['description'];
		$status=$this->user_model->saveproduct($name,$brand,$category,$price,$description);
        if($status==true)
		{
			header("Location:viewcity");
		}
		
		
	}
	public function savecity()
	{
		$city=$_POST['city'];
		$name=$_POST['name'];
		$status= $this->user_model->savecity($city,$name);
		if($status==true)
		{
			header("Location:viewcity");
		}
		
	}
	public function savebrand()
	{
	   $brandname=$_POST['brand'];
       $status=$this->user_model->savebrand($brandname);	
       if($status==true)
		{
			header("Location:viewbrand");
		}
		   
	   //echo "saving brand code goes here";
	}
	public function savecategory()
	{
	   $categoryname=$_POST['category'];
       $status=$this->user_model->savecategory($categoryname);	
       if($status==true)
		{
			header("Location:viewcategory");
		}
		   
	   
	}
	public function savestate()
	{
		$statename=$_POST['state'];
		$status=$this->user_model->savestate($statename);
		if($status==true)
		{
			header("Location:viewstate");
		}
		
	}
	public function savecustomer()
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$interest=$_POST['interest'];
		$status=$this->user_model->savecustomer($name,$email,$mobile,$city,$state,$gender,$address,$interest);
		if($status==true)
		{
			header("Location:viewcustomer");
		}
		else{
			echo "error";
		}
	}
	
	
	//===========================================//views
	
	public function viewbrand()
	{
		$this->load->view('header');
		$data['brand']=$this->user_model->fetchallbrands();
		$this->load->view('brandlist',$data);
		$this->load->view('footer');
	}
	public function viewcity()
	{
		$this->load->view('header');
		$data['city']=$this->user_model->fetchallcity();
		$this->load->view('citylist',$data);
		$this->load->view('footer');
		
	}
	
	public function viewcategory()
	{
		$this->load->view('header');
		$data['cat']=$this->user_model->fetchallcategory();
		$this->load->view('categorylist',$data);
		$this->load->view('footer');
	}
	public function viewstate()
	{
		$this->load->view('header');
		$data['state']=$this->user_model->fetchallstate();
		$this->load->view('statelist',$data);
		$this->load->view('footer');
	}
	
	public function viewcustomer()
	{
		$this->load->view('header');
		$data['cust']=$this->user_model->fetchallcustomers();
		$this->load->view('customerlist',$data);
		$this->load->view('footer');
	}
	public function viewproduct()
	{
		$this->load->view('header');
		$data['prod']=$this->user_model->fetchallproducts();
		$this->load->view('productlist',$data);
		$this->load->view('footer');
	}
	//============================================//
	public function deletecustomer()
	{
		$cid=$_GET['id'];
		$status=$this->user_model->deletemycustomer($cid);
		if($status==true)
		{
			header("Location:viewcustomer");
		}
		else{
			echo "error";
		}
	}
	public function deleteproduct()
	{
		$cid=$_GET['id'];
		$status=$this->user_model->deletemyproduct($cid);
		if($status==true)
		{
			header("Location:viewproduct");
			
		}
		else{
			echo "error";
		}
	}
	public function deletecity()
	{
		$cid=$_GET['id'];
		$status=$this->user_model->deletemycity($cid);
		if($status==true)
		{
			header("Location:viewcity");
			
		}
		else{
			echo "error";
		}
	}
	public function deletestate()
	{
		$cid=$_GET['id'];
		$status=$this->user_model->deletemystate($cid);
		if($status==true)
		{
			header("Location:viewstate");
			
		}
		else{
			echo "error";
		}
	}
	public function deletebrand()
	{
		$cid=$_GET['id'];
		$status = $this->user_model->deletemybrand($cid);
		if($status==true)
		{
			header("Location:viewbrand");
			
		}
		else{
			echo "error";
		}
	}
	public function deletecategory()
	{
		$cid=$_GET['id'];
		$status = $this->user_model->deletemycategory($cid);
		if($status==true)
		{
			header("Location:viewcategory");
			
		}
		else{
			echo "error";
		}
	}
	//======================================================//
	public function editcustomer()
	{
		$cid=$_GET['id'];
		$data['cust']=$this->user_model->editmycustomer($cid);
		$this->load->view('header');
		$this->load->view('editcustomer',$data);
		$this->load->view('footer');
	}
	public function editcity()
	{
		$cid=$_GET['id'];
		$data['cit']=$this->user_model->editmycity($cid);
		$this->load->view('header');
		$this->load->view('editcity',$data);
		$this->load->view('footer');
	}
	//================================================================//
	public function updatecustomer()
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$interest=$_POST['interest'];
		$id=$_POST['id'];
		
		$status=$this->user_model->updatecustomer($name,$email,$mobile,$city,$state,$address,$gender,$interest,$id);
		if($status==true)
		{
			header("Location:viewcustomer");
		}
		else{
			echo "error";
		}
	}
	public function updatecity()
	{
		$city=$_POST['city'];
		$name=$_POST['name'];
		$id=$_POST['id'];
		
		$status= $this->user_model->updatecity($city,$name,$id);
		if($status==true)
		{
			header("Location:viewcity");
		}
		else{
			echo "error";
		}
		
	}
}//class closing
