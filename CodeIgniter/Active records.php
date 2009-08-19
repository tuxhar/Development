#advantages
	1)reduce code
	2)database independent
	3)saves from sql injection
#SELECT
	$this->db->select("firstname");
	$this->db->where("id",2);
	$query = $this->db->get("demotable");	
return	$query->result();
