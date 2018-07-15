<?php
class home extends MY_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('mainpage');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function registration()
	{
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
	}
	public function location()
	{
		$this->load->view('header');
		$this->load->view('location');
		$this->load->view('footer');
	}
	public function mainpage()
	{
		$this->load->view('header');
		$this->load->view('mainpage');
		$this->load->view('footer');
	}
	public function info()
	{
		$this->load->view('header');
		$this->load->view('info');
		$this->load->view('footer');
	}

}
?>