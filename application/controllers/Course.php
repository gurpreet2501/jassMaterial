<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Course extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index($view_name)
	{	

		if($view_name == 'contact_form_post')
			return $this->contact_form_post();
		

		$this->load->view('course/'.$view_name);
	}

	function detail($course_slug)
	{	
		
		
		$this->load->view('course/course-page-template');
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */