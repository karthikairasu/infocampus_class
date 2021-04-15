<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//
	public function fetchcontact()
	{
		$sql="select * from contacts";
		$res=$this->db->query($sql);
		$alldata=$res->result();
		return $alldata;
	}
	public function deletemycontact($id)
	{
		$sql="delete from contacts where id='$id'";
		$this->db->query($sql);
		return true;
	}
	public function editcontact($id)
	{
		$sql="select * from contacts where id='$id'";
		$res=$this->db->query($sql);
		$alldata=$res->row();
		return $alldata;
	}
	public function updatecontact($name,$email,$mobile,$message,$id)
	{
		$sql="update contacts set name='$name',
		                          email='$email',
								  mobile='$mobile',
								  message='$message'
								  where id='$id'";
								  $this->db->query($sql);
								  return true;
	}
	public function checkmylogin($email,$pass)
	{
		$sql="select * from admin where email='$email' and password='$pass'";
		$res=$this->db->query($sql);
		if($res->num_rows()>0)
		{
			$row=$res->row();//fetch practicular record
			//print_r($row);
			$data=array("id"=>$row->id,"name"=>$row->name);//making mixed array which we need to pass
			$this->session->set_userdata($data);//setting the session variable using set_userdata()
			return true;
		}
		else
		{
			return false;
		}
	}
	public function savecontactajax($name,$email,$mobile,$message)
	{
		$sql="insert into contacts(name,email,mobile,message) values('$name','$email','$mobile','$message')";
		$this->db->query($sql);
		return true;
		
	}
	public function deletecontactajax($cid)
	{
		$sql="delete from contacts where id='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function editcontactajax($cid)
	{
		$sql="select * from contacts where id='$cid'";
		$res=$this->db->query($sql);
		$mydata=$res->row();
		return $mydata;
	}
	public function updatecontactajax($name,$email,$mobile,$message,$id)
	{
		$sql="update contacts set name='$name',
		                          email='$email',
								  mobile='$mobile',
								  message='$message'
								  where id='$id'";
								  $this->db->query($sql);
								  return true;
	}
}

