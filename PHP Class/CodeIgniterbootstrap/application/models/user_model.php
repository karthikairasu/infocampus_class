<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model
{
	
	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//
	
	  public function savebrand($brandname)
	  {
		  
		  $sql="insert into brands(brandname) values('$brandname')";
		  $this->db->query($sql);//execute the query
		  return true;
	  }
	   public function savecity($city,$name)
	  {
		  
		  $sql="insert into citys(city,name) values('$city', '$name')";
		  $this->db->query($sql);//execute the query
		  return true;
	  }
	  public function savecategory($categoryname)
	  {
		  $sql="insert into categorys(categoryname) values('$categoryname')";
		  $this->db->query($sql);
		  return true;
	  }
	  public function savestate($statename)
	  {
		  $sql="insert into states(statename) values('$statename')";
		  $this->db->query($sql);
		  return true;
	  }
	  
	  public function savecustomer($name,$email,$mobile,$city,$state,$gender,$address,$interest)
	  {
		  $sql="insert into customers(name,email,mobile,city,state,gender,address,interest)
		  values('$name', '$email', '$mobile', '$city', '$state', '$gender', '$address', '$interest')";
		  $this->db->query($sql);
		  return true;
	  }
	 
	  public function saveproduct($name,$brand,$category,$price,$description)
	  {
		  $sql="insert into products(name,brand,category,price,description)
		  values ('$name', '$brand', '$category', '$price', '$description')";
		  $this->db->query($sql);
		  return true;
	  }
	 
	//================================================//views table
	  public function fetchallbrands()
	  {
		  $sql="select * from brands";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	  public function fetchallcity()
	  {
		  $sql="select * from citys";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	  public function fetchallstate()
	  {
		  $sql="select * from states";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	  	  public function fetchallcategory()
	  {
		  $sql="select * from categorys";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	   public function fetchallproducts()
	  {
		  $sql="select * from products";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	   public function fetchallcustomers()
	  {
		  $sql="select * from customers";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	//================================================//
	public function deletemycustomer($cid)
	{
		$sql="delete from customers where id='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function deletemyproduct($cid)
	{
		$sql="delete from products where id='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function deletemycity($cid)
	{
		$sql="delete from citys where id='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function deletemystate($cid)
	{
		$sql="delete from states where stateid='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function deletemybrand($cid)
	{
		$sql="delete from brands where brandid='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function deletemycategory($cid)
	{
		$sql="delete from categorys where categoryid='$cid'";
		$this->db->query($sql);
		return true;
	}
	//=================================================================//edit
	public function editmycustomer($cid)
	{
	$sql="select * from customers where id='$cid'";
    $res=$this->db->query($sql);
	$custdata=$res->row();//fetching single record
	return $custdata;
	
	}
	public function editmycity($cid)
	{
		$sql="select * from citys where id='$cid'";
		$res=$this->db->query($sql);
		$citydata=$res->row();
		return $citydata;
	}
	//================================================================//update
	public function updatecustomer($name,$email,$mobile,$city,$state,$address,$gender,$interest,$id)
	{
		$sql="update customers set name='$name',
		                          email='$email',
								  mobile='$mobile',
								  city='$city',
								  state='$state',
								  address='$address',
								  gender='$gender',
								  interest='$interest' where id='$id'";
								  
								  $this->db->query($sql);
								  return true;
	}
	public  function updatecity($city,$name,$id)
	{
		$sql="update citys set city='$city',
		                       name='$name' where id='$id'";
							   
							   $this->db->query($sql);
							   return true;
	}
}//model class closes

?>