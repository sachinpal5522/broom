<?php
class Login extends MY_Controller
{
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function loging()
	{
		echo "this is is";
	}
}
?>