<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index($id=null)
	{	
		
		$products = Models\Products::where('category_id',$id)->get();
		$this->load->view('category',[
			'products' => $products
		]);
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */