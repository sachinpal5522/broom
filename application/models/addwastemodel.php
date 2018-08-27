<?php
class addwastemodel extends CI_Model
{
		public function uploadwaste($data)
		{		
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1800;
			$config['max_height']           = 1000;

            $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileupload'))
                {
                        $error =$this->upload->display_errors();
                        $this->session->set_flashdata('uperror',$error);
						return redirect('home/addwaste');
                }
                else
                {
                        $file =$this->upload->data();
						$uid=$this->session->userdata('userid');
						$t=['uid'=>$uid,
							'type'=>$data['type'],
							'condition'=>$data['condition'],
							'pname'=>$data['pname'],
							'description'=>$data['desc'],
							'path'=>$file['file_name']
						];
						$this->db->insert('advertisement',$t);
						return redirect('home');
                }
			
		}
}
?>