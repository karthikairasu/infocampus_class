<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
 class Main extends CI_Controller
 {
//========================================================================//	 
	 public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function aboutpage()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
		
	}
	public function portfoliopage()
	{
		$this->load->view('header');
		$this->load->view('portfolio');
		$this->load->view('footer');
		
	}
	public function servicespage()
	{
		$this->load->view('header');
		$this->load->view('services');
		$this->load->view('footer');
		
	}
	public function contactpage()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
		
	}
 }


?>