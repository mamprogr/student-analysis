<?php
/**
 * 
 */
class Class_model extends CI_Model 
{
	
	function __construct() 
	{
		 // Call the Model constructor
		 parent::__construct();
	}
	public function getAllClass()
	{
		$result = $this->db->get('class');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function getById($id = '0')
	{
		$this->db->where('id',$id );
		$result = $this->db->get('class');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByName($name)
	{
		$this->db->where('Name', $name);
		$result = $this->db->get('class');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByIdSupervisor($idSupervisor)
	{
		$this->db->where('idSupervisor', $idSupervisor);
		$result = $this->db->get('class');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function insertClass($name,$idSupervisor)
	{
		$data = array(
			'Name' => $name ,
 			'idSupervisor' => $idSupervisor 
   			
		);
		
		$this->db->insert('class',$data);
	}
}
