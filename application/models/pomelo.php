<?php 
class Pomelo extends CI_Model{
	function get_all_pomelos(){
		return $this->db->query("SELECT * FROM pomelos")->result_array();
	}

	function add_pomelo($name)
	{
		$query = "INSERT INTO pomelos (name) VALUES (?)";
		$this->db->query($query, array($name));
		$pomelo_id = $this->db->insert_id();
		return $pomelo_id;
	}
}
?>