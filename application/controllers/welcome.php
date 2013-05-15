<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$parm1  = array(
		0 => 1 ,
		1 => 2,
		2 => 3 ,
		3 => "2" ,
		4 => "2" ,
		5 => "2" ,
		6 => 2  ,
		7=> 2  ,
		8 => "2" , 
		);
 		
		$this->load->model("subject_model");
		
		if($data = $this->subject_model->getByName(1))
		{
			var_dump($data);
			$parm1  = array(
				0 => $data[0] ,
				1 => 2,
				2 => 3 ,
				3 => "2" ,
				4 => "2" ,
				5 => "2" ,
				6 => 2  ,
				7=> 2  ,
				8 => "2" , 

		);
		}else{
			echo " not found";
			var_dump($data);
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */