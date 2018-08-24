<?php
class register extends MY_Controller
{
	public function index()
	{
		$this->load->view('register');
	}

	public function sineup()
	{
		$this->load->database();
		$this->load->model('regmodel','rm');
		$data=$this->input->post();
		$this->rm->uploadData($data);
	}
}
?>
