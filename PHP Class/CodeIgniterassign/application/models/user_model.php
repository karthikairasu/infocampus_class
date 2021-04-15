<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//
	
	public function saveregister($name,$age,$city,$pincode,$dob,$imagename,$gender)
	{
	$sql="insert into user(name,age,city,pincode,dob,imagename,gender)values('$name','$age','$city','$pincode','$dob','$imagename','$gender')";
	$this->db->query($sql);
	return true;
	}
	public function fetchalluser()
	{
		$sql="select * from user";
		$res=$this->db->query($sql);
		$alldata=$res->result();
		return $alldata;
	}
	public function deletemyuser($id)
	{
		$sql="delete from user where id='$id'";
		$this->db->query($sql);
		return true;
	}
	public function editmyuser($id)
	{
		$sql="select * from user where id='$id'"; 
		$res=$this->db->query($sql);
		$userdata=$res->row();
		return $userdata;
	}
    public function updateuser($name,$age,$city,$pincode,$dob,$gender,$id)
	{
		$sql="update user set name='$name',
		                      age='$age',
                              city='$city',
							  pincode='$pincode',
							  dob='$dob',
							  gender='$gender' where id='$id'";
								   
							  $this->db->query($sql);
							  return true;
	}
	 
}
