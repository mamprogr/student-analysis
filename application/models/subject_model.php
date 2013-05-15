<?php
/**
 * 
 */
class Subject_model extends CI_Model 
{
	
	function __construct() 
	{
		 // Call the Model constructor
		 parent::__construct();
	}
		public function getAllSubject()
	{
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0) 
			return $result->result();
		return FALSE;
	}
	public function getById($id = '0')
	{
		$this->db->where('id',$id );
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0) 
			return $result->result();
		
		return FALSE;
	}
	public function getByName($name)
	{
		$this->db->where('Name', $name);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByIdScience($idscience)
	{
		$this->db->where('idScience', $idscience);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByDescription($description)
	{
		$this->db->where('Description', $description);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByBook($book)
	{
		$this->db->where('Book', $book);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByAuthor($author)
	{
		$this->db->where('Author', $author);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
		public function getByFromAge($fromage)
	{
		
		$this->db->where('FromAge',$fromage);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	
	public function getByToAge($toage)
	{
		
		$this->db->where('ToAge',$toage);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	
	public function getByFromAgeToAge($fromage,$toage)
	{
		$this->db->where('FromAge',$fromage);
		$this->db->where('ToAge',$toage);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function getByTermsAttendance($termsattendance)
	{
		$this->db->where('TermsAttendance', $termsattendance);
		$result = $this->db->get('subject');
		
		if($result->num_rows() > 0)
			return $result->result();

		return FALSE;
	}
	public function insertClass($name,$idscience,$description,$book,$author,$fromage)
	{
		$data = array(
			'Name' => $name ,
 			'idScience' => $idscience ,
 			'Description' => $description ,
 			'Book' => $book ,
 			'Author' => $author ,
 			'FromAge' => $fromage ,
 			'ToAge' => $toage ,
 			'TermsAttendance' => $termsattendance  
   			
		);
		
		$this->db->insert('subject',$data);
	}
}
