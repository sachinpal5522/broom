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
	
	public function userWaste()
	{
		$this->load->database();
		$this->load->model('homemodel','hm');
		$result=$this->hm->getUserData();
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
			$data['pid']=$row->addid;
			$this->load->view('usrupload',$data);
		}
		$this->load->view('foot');
	}
	
	public function deleteusergarbage()
	{
		$data=$this->input->post();
		$id=$data['pid'];
		$this->load->database();
		$this->load->model('homemodel','hm');
		$result=$this->hm->delupload($id);
	}
}
?>