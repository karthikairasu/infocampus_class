<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view("header");
		$this->load->view("home");
		$this->load->view("footer");
	}
	public function addcity()
	{
		$this->load->view("header");
		$this->load->view("addcity");
		$this->load->view("footer");
		
	}
	public function addstate()
	{
		$this->load->view("header");
		$this->load->view("addstate");
		$this->load->view("footer");
		
	}
	public function addcategory()
	{
		$this->load->view("header");
		$this->load->view("addcategory");
		$this->load->view("footer");
		
	}
	public function addbrand()
	{
		$this->load->view("header");
		$this->load->view("addbrand");
		$this->load->view("footer");
		
	}
	public function addcustomer()
	{
		$this->load->view("header");
		$this->load->view("addcustomer");
		$this->load->view("footer");
		
	}
	public function addproduct()
	{
		$this->load->view("header");
		$this->load->view("addproduct");
		$this->load->view("footer");
		
	}
}
