<?php
class Register extends MY_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
	}
	
	public function submit()
	{
		
	}
	
	
}
?>