<?php
class login extends MY_Controller
{
	public function index()
	{
		$this->load->view('login');
	}
	
	public function authorize()
	{
		  redirect('home');
	}
	
}
?>