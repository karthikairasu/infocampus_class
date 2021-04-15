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
	 public function savecontact($title,$description,$imagename)
	  {
		  
		  $sql="insert into contact(title,description,image) values('$title','$description','$imagename')";
		  $this->db->query($sql);//execute the query
		  return true;
	  }
	  
	 public function fetchallcontact()
	  {
		  $sql="select * from contact";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
	  
	public function deletemycontact($id)
	{
		$sql="delete from contact where id='$id'";
		$this->db->query($sql);
		return true;
	}
	public function editmycontact($id)
	{
		 $sql="select * from contact where id ='$id'";
		 $res=$this->db->query($sql);
		 $alldata=$res->row();
		 return $alldata;
	}
	public function updatecontact($title,$description,$id)
	{
		$sql="update contact set title='$title',
		                         description='$description'
		                         where id='$id'";
								 $this->db->query($sql);
								 return true;
	}
   
    }
   