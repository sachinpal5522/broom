<?php
class login extends MY_Controller
{
	public function index()
	{
		$this->load->view('login');
	}
	
	public function authorize()
	{
		$this->load->database();
		$this->load->model('loginModel','lm');
		$data=$this->input->post();
		$this->lm->validate($data);
		
	}
	
}
?>