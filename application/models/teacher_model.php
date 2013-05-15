<?php
/**
 * 
 */
class Teacher_model extends CI_Model 
{
	
	function __construct() 
	{
		 // Call the Model constructor
		 parent::__construct();
	}
		public function getAllTeacher()
	{
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function getById($id = '0')
	{
		$this->db->where('id',$id );
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByFirstName($firstname)
	{
		$this->db->where('FirstName', $firstname);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getBySecondName($secondname)
	{
		$this->db->where('SecondName', $secondname);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByBirthDate($birthdate)
	{
		$this->db->where('BirthDate', $birthdate);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByidPermission($idpermission)
	{
		$this->db->where('idPermission', $idpermission);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByTel($tel)
	{
		$this->db->where('Tel', $tel);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByMobile($mobile)
	{
		$this->db->where('Mobile', $mobile);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByEmail($email)
	{
		$this->db->where('Email', $email);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByFaceBook($facebook)
	{
		$this->db->where('FaceBook', $facebook);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByTwitter($twitter)
	{
		$this->db->where('Twitter', $twitter);
		$result = $this->db->get('teacher');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function insertTeacher($firstname,$secondname,$birthdate,$idpermission,$tel,$mobile,$email,$facebook,$twitter)
	{
		$data = array(
			'FatherName' => $firstname ,
 			'SecondName' => $secondname ,    			
 			'BirthDate' => $birthdate , 			
 			'idPermission' => $idpermission ,
 			'Tel' => $tel ,
 			'Mobile' => $mobile ,
 			'Email' => $email ,
 			'FaceBook' => $facebook ,
 			'Twitter' => $twitter 
		);
		
		$this->db->insert('teacher',$data);
	}
}
