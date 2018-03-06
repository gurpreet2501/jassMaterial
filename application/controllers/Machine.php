<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use App\Response\Factory as Resp;
class Machine extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function status()
	{
	    $concat = [];
		$machines = Models\Machines::select('name','status')->get();
	    if(!count($machines))
	    	return;

		foreach ($machines->toArray() as $key => $v) {
			$concat[$v['name']] = $v['status'];
			
		}

	    header('Content-Type: application/json', JSON_PRETTY_PRINT);
	    echo json_encode($concat);
		
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */