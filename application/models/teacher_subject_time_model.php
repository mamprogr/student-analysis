<?php
/**
 * 
 */
class Teacher_Subject_Time_model extends CI_Model 
{
	
	function __construct() 
	{
		 // Call the Model constructor
		 parent::__construct();
	}
	public function getAllTeacher_Subject_Time()
	{
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function getById($id = '0')
	{
		$this->db->where('id',$id );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByIdTeacher($idteacher = '0')
	{
		$this->db->where('idTeacher',$idteacher );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByIdSubject($idsubject = '0')
	{
		$this->db->where('idSubject',$idsubject );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByIdClass($idclass = '0')
	{
		$this->db->where('idClass',$idclass );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getBySessionNum($sessionNum)
	{
		$this->db->where('SessionNum',$sessionnum );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByStartDate($startdate)
	{
		$this->db->where('StartDate',$startdate );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByEndDate($enddate)
	{
		$this->db->where('EndDate',$enddate );
		$result = $this->db->get('teacher_subject_time');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function insertTeacher_Subject_Time($idteacher,$idsubject,$idclass,$sessionNum,$startdate,$enddate)
	{
		$data = array(
			'idTeacher' => $idteacher ,
 			'idSubject' => $idsubject ,    			
 			'idClass' => $idclass , 			
 			'SessionNum' => $sessionNum ,
 			'StartDate' => $startdate ,
 			'EndDate' => $enddate 
 			
		);
		
		$this->db->insert('teacher_subject_time',$data);
	}
}
