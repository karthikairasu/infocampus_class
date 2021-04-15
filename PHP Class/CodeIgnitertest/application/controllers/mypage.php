<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

	public function index()
	{    
	    $this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function addcitypage()
	{    
	    $this->load->view('header');
		$this->load->view('addcity');
		$this->load->view('footer');
	}
	public function addstatepage()
	{    
	    $this->load->view('header');
		$this->load->view('addstate');
		$this->load->view('footer');
	}
	public function addproductpage()
	{    
	    $this->load->view('header');
		$this->load->view('addproduct');
		$this->load->view('footer');
	}
	public function viewproductpage()
	{    
	    $this->load->view('header');
		$this->load->view('viewproduct');
		$this->load->view('footer');
	}
	public function contactpage()
	{    
	    $this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	public function contactlistpage()
	{    
	    $this->load->view('header');
		$this->load->view('contactlist');
		$this->load->view('footer');
	}
}
