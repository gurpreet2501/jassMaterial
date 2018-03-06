<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		auth_force();
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('crud.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}



	public function products()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('products');
			$crud->required_fields('name','price','stock');
			$crud->unique_fields('name');
			$crud->display_as('category_id' ,'Product Category');
			$crud->display_as('brand_id' ,'Product brand');
			$crud->set_field_upload('image','assets/uploads/files');
			$crud->set_relation('category_id','product_categories','name');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function product_categories()
	{
			$crud = new grocery_CRUD();
			$crud->unset_texteditor('course_desc');
			$crud->set_theme('datatables');
			$crud->set_table('product_categories');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);

	}

	public function product_orders()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('orders');
			$crud->columns('name','phone_no','order_date','order_status','total');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->edit_fields('order_status');
			$crud->field_type('user_id','hidden',user_id());
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);

	}

	public function product_brands()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('product_brands');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);

	}

	public function course_pages()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->columns('course_title','course_desc','course_type');
			$crud->set_table('course_pages');
			$crud->required_fields('name');
			$crud->unique_fields(array('course_title'));
			$crud->required_fields('course_title','course_desc');
			$crud->callback_before_insert(array($this,'addCouseSlug'));
			$crud->field_type('course_slug','hidden');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);

	}

	function addCouseSlug($post_array){
		$post_array['course_slug'] = generateSeoURL($post_array['course_title']);
		return $post_array; 
	}


	public function addGalleryImages(){
		  
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('gallery_images');
			$crud->required_fields('image');
			$crud->columns('image','slide_type');
			$crud->display_as('slide_type','For');
			$crud->set_field_upload('image','assets/images/gallery');
			$crud->field_type('created_at','hidden',date('Y-m-d H:i:s'));
			$crud->field_type('updated_at','hidden',date('Y-m-d H:i:s'));
			$output = $crud->render();
			$this->_example_output($output);

  //       $jsFiles = [
		// 	base_url('assets/js/jquery-ui-1.12.1.custom/jquery-ui.min.js'),
		// 	base_url('assets/js/components/datepicker.js'),
		// 	base_url('assets/js/vue.min.js'),
		// 	base_url('assets/js/vue/gallery.js?432'),
		// ];

		// $cssFiles = [base_url('assets/js/jquery-ui-1.12.1.custom/jquery-ui.min.css')];

		// $data = [
		// 		'js_files' => $jsFiles,
		// 		'css_files' => $cssFiles,
		// 		'for_js' => [
		// 		]
		// ];
	


		// $this->load->view('gallery/add-images',$data);
	}

	// function galleryDataPost(){
		
		
	// 	foreach($_FILES as $key => $file):
			
	// 		try{
				
	// 			if(Models\GalleryImages::where('img_index',$key)->count())
	// 				Models\GalleryImages::where('image_index', $key)->update([
	// 					'img' => $file['name']
	// 				]);
	// 			else	
 //                    Models\GalleryImages::create([
	// 					'img' => $file['name'],
	// 					'image_index' => $key
	// 				]);
				
				
	// 			// @fileobject , @foldername
	// 	   		uploadImage($file,'gallery');

	// 		}catch(Exception $e){
	// 			echo "Unable to upload file. Please Try again.";
	// 		}
			
	// 	endforeach;

	// 	success('Images Uploaded Successfully');
	// 	redirect('data/addGalleryImages');
	
	// }

	function on_update_encrypt_password_callback($post_array){
		if($post_array['password'] != '__DEFAULT_PASSWORD_'){
      $password=$post_array['password'];
			$hasher = new PasswordHash(
	    		$this->config->item('phpass_hash_strength', 'tank_auth'),
		    	$this->config->item('phpass_hash_portable', 'tank_auth')
			);

			$post_array['password'] = $hasher->HashPassword($password);
			$post_array['activated'] = 1;
			return $post_array;
		}

		unset($post_array['password']);
		return $post_array;
	}

	  function edit_password_callback($post_array){
		return '<input type="password" class="form-control" value="__DEFAULT_PASSWORD_" name="password" style="width:462px">';
	}


}
