<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
	
	var $db;//create a object variable for database
		function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);//db connection
		}//construct closes
	//================================================//

	public function savecontact($name,$email,$mobile,$message)
	{
		$sql="insert into contacts(name,email,mobile,message) values('$name','$email','$mobile','$message')";
		$this->db->query($sql);
		return true;
	}
}
