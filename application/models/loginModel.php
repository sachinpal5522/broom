<?php
class loginModel extends CI_Model
{
	public function validate($data)
	{
		$this->db->select('*');
		$this->db->from('elogin');
		$this->db->where('userid',$data['inputEmail']);
		$this->db->where('password',$data['inputPassword']);
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
		$this->session->set_userdata('userid',$data['inputEmail']);
		return redirect('home');
		}
		else
		{
			$this->session->set_flashdata('logerror','LoginId/Password Not Correct');
			return redirect('login');
		}
	}
}
?>