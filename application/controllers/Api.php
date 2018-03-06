<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use App\Response\Factory as Resp;

use App\Libs\Order;
class Api extends CI_Controller
{
	function __construct()
	{ 
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		// $this->load->library('tank_auth');
		$this->load->library('email');


	}

	function create_order(){
		if(empty($_POST))
			return;
			// Resp::errorCode();
		
		$data = $_POST['data'];
		
		$t = Order::create($data);	
		echo "<pre>";
		print_r($t);
		exit;


	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */