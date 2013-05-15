<?php
/**
 * 
 */
class Student_model extends CI_Model 
{
	
	function __construct() 
	{
		 // Call the Model constructor
		 parent::__construct();
	}
		public function getAllStudent()
	{
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function getById($id = '0')
	{
		$this->db->where('id',$id );
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByFirstName($firstname)
	{
		$this->db->where('FirstName', $firstname);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getBySecondName($secondname)
	{
		$this->db->where('SecondName', $secondname);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByFatherName($fathername)
	{
		$this->db->where('FatherName', $fathername);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByJoinDate($joindate)
	{
		$this->db->where('JoinDate', $joindate);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByBirthDate($birthdate)
	{
		$this->db->where('BirthDate', $birthdate);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByClass($class)
	{
		$this->db->where('Class', $class);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByTel($tel)
	{
		$this->db->where('Tel', $tel);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByMobile($mobile)
	{
		$this->db->where('Mobile', $mobile);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByEmail($email)
	{
		$this->db->where('Email', $email);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByFaceBook($facebook)
	{
		$this->db->where('FaceBook', $facebook);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByTwitter($twitter)
	{
		$this->db->where('Twitter', $twitter);
		$result = $this->db->get('student');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function insertStudent($firstname,$secondname,$fathername,$joindate,$birthdate,$class,$tel,$mobile,$email,$facebook,$twitter)
	{
		$data = array(
			'FatherName' => $firstname ,
 			'SecondName' => $secondname , 
			'FatherName' => $fathername ,
 			'JoinDate' => $joindate ,   			
 			'BirthDate' => $birthdate ,
 			'Class' => $class ,
 			'Tel' => $tel ,
 			'Mobile' => $mobile ,
 			'Email' => $email ,
 			'FaceBook' => $facebook ,
 			'Twitter' => $twitter 
		);
		
		$this->db->insert('student',$data);
	}
}
