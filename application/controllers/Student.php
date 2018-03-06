<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function detail()
	{	
		if(empty($_POST))
			return 404;

		$data = Models\Students::with('certificates')
								->with('courses')
								->where('enrollment_no', $_POST['enrollment_no'])->first();

		$this->load->view('student/detail',[
			'data' => $data
		]);
	}

	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */