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
	
	public function addwaste()
	{
		$this->load->view('addwaste');
	}
	
	public function uploadwaste()
	{
		$this->load->database();
		$data=$this->input->post();
		$this->load->model('addwastemodel','aw');
		$this->aw->uploadwaste($data);
		
	}
	
}
?>