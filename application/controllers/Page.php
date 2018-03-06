<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Page extends CI_Controller
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
		

		$this->load->view('page/'.$view_name);
	}

	function contact_form_post(){
		$data = $_POST;
		if(isset($data['contact-form-submit']))
			unset($data['contact-form-submit']);

		if(isset($data['form_botcheck']))
			unset($data['form_botcheck']);

		$message =  "";
		foreach ($data as $key => $entry) 
	   		$message .= ucfirst(str_replace("_",' ',$key))." : ". $entry."<br>";

	   send_email($message);
	   success('Query Submitted Successfully');
	   redirect('/');	   
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */