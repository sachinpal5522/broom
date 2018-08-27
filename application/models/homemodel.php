<?php
class homemodel extends CI_Model
{
	public function getData()
	{
		$query = $this->db->query("SELECT concat (fname,' ',lname) as name,phoneno,concat(street,',',city,',',country,' ',zip) as address, `date`, pname, description, path FROM advertisement a,user u where a.uid=u.uid;");
		$res=$query->result();
		return $res;
	}
}
?>