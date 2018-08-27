<?php
class addwastemodel extends CI_Model
{
		public function uploadwaste($data)
		{
			$uid=$this->session->userdata('userid');
			$t=['uid'=>$uid,
				'type'=>$data['type'],
				'condition'=>$data['condition'],
				'pname'=>$data['pname'],
				'description'=>$data['desc']
			];
			
			$this->db->insert('advertisement',$t);
			redirect('home/addwaste');
			
		}
}
?>