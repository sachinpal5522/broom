<?php
class home extends MY_Controller
{
	public function index()
	{
		$this->load->database();
		$this->load->model('homemodel','hm');
		$result=$this->hm->getData();
		$this->load->view('head');
		foreach ($result as $row)
		{
			$data['name']=$row->name;
			$data['phoneno']=$row->phoneno;
			$data['address']=$row->address;
			$data['date']=$row->date;
			$data['description']=$row->description;
			$data['pname']=$row->pname;
			$data['path']=$row->path;	
			$this->load->view('main',$data);
		}
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
		$this->load->view('head');
		$this->load->view('addwaste');
		$this->load->view('foot');
	}
	
	public function uploadwaste()
	{
		$this->load->database();
		$data=$this->input->post();
		$this->load->model('addwastemodel','aw');
		$this->aw->uploadwaste($data);
		
	}
	public function information()
	{
		$this->load->view('head');
		$this->load->view('information');
		$this->load->view('foot');
	}
	public function aboutus()
	{
		$this->load->view('head');
		$this->load->view('aboutus');
		$this->load->view('foot');
	}
	
}
?>