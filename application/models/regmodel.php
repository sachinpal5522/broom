<?php
class regmodel extends CI_Model
{
	public function uploadData($data)
	{
	 $this->db->select('*'); 
     $this->db->from('elogin');
     $this->db->where('userid', $data['inputEmail']);
     $query = $this->db->get();
	 
		if($query->num_rows()>0)
		{
			$this->session->set_flashdata('regerror','email already exist');
			return redirect('register');
		}
		else{
			
		$t=['uid'=>$data['inputEmail'],
			'fname'=>$data['firstName'],
			'lname'=>$data['lastName'],
			'phoneno'=>$data['inputPhone'],
			'street'=>$data['street'],
			'city'=>$data['city'],
			'country'=>$data['Country'],
			'zip'=>$data['zip']
			];
		
		$log=[
				'userid'=>$data['inputEmail'],
				'password'=>$data['inputPassword']
		];
				
			$this->db->insert('user', $t);
			$this->db->insert('elogin',$log);
			redirect('home');
		}
	}
}
?>