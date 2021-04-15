<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//
	 public function saveprofile($name,$email,$mobile,$city,$state,$occupation,$company,$proimage)
	 {
		 $sql="insert into profile(name,email,mobile,city,state,occupation,company,image)
		 values('$name','$email','$mobile','$city','$state','$occupation','$company','$proimage')";
		 $this->db->query($sql);
		 return true;
	 }
	public function fetchprofile()
	{
		$sql="select * from profile";
		$res=$this->db->query($sql);
		$alldata=$res->result();
		return $alldata;
	}
	public function deletemyprofile($id)
	{
		$sql="delete from profile where id='$id'";
		$this->db->query($sql);
		return true;
	}
	public function editmyprofile($id)
	{
		 $sql="select * from profile where id ='$id'";
		 $res=$this->db->query($sql);
		 $alldata=$res->row();
		 return $alldata;
	}
	 public function updateprofile($name,$email,$mobile,$city,$state,$occupation,$company,$pimage,$id)
	 {
		 $sql="update profile set name='$name',
		                          email='$email',
								  mobile='$mobile',
								  city='$city',
								  state='$state',
								  occupation='$occupation',
								  company='$company',
								  image='$pimage' where id='$id'";
		
		 $this->db->query($sql);
		 return true;
	 }
}
