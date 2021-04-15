<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model {
	
	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//
	
	public function saveblog($title,$description,$blogimage)
	{
		$sql="insert into blogs(title,description,image) values('$title','$description','$blogimage')";
		$this->db->query($sql);
		return true;
	}
	
	public function fetchallblog()
	  {
		  $sql="select * from blogs";
		  $res=$this->db->query($sql);
		  $alldata=$res->result();
		  return $alldata;
	  }
    public function deletemyblog($cid)
	{
		$sql="delete from blogs where id='$cid'";
		$this->db->query($sql);
		return true;
	}
	public function editmyblog($cid)
	{
		$sql="select * from blogs where id='$cid'";
		$res=$this->db->query($sql);
		$blogdata=$res->row();
		return $blogdata;
	}
	public function updateblog($title,$description,$bimage,$id)
	{
		$sql="update blogs set title='$title',
		                           description='$description',
								   image='$bimage'
								   where id='$id'";
								   $this->db->query($sql);
								   return true;
	}
	
}
