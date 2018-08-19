<?php
class home extends MY_Controller
{
	public function index()
	{
		
		$this->load->view('head');
		$this->load->view('main');
		$this->load->view('foot');
	}
	public function center()
	{
		$this->load->view('head');
		$this->load->view('centers');
		$this->load->view('foot');
	}
	
	
}
?>