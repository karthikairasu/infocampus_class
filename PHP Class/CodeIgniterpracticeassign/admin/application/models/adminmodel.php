<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//
	public function checkmylogin($email,$password)
	{
		$sql="select * from admin where email='$email' and password='$password'";
		$res=$this->db->query($sql);
		if($res->num_rows()>0)
		{
			$row=$res->row();
			$data=array("id"=>$row->id,"name"=>$row->name);
			$this->session->set_userdata($data);
			return true;
		}
		else
		{
			return false;
		}
	}
}
