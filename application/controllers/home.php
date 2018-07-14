<?php
class home extends MY_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('mainpage');
		$this->load->view('footer');
	}
}
?>