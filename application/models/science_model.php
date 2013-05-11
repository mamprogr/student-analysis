<?php
/**
 * 
 */
class Science_model extends CI_Model 
{
	
	function __construct() 
	{
		 // Call the Model constructor
		 parent::__construct();
	}
	public function getAllScince()
	{
		$result = $this->db->get('science');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function getById($id = '0')
	{
		$this->db->where('id',$id );
		$result = $this->db->get('science');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByName($name)
	{
		$this->db->where('Name', $name);
		$result = $this->db->get('science');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function insertClass($name)
	{
		$data = array(
			'Name' => $name 
 			
		);
		
		$this->db->insert('science',$data);
	}
}
