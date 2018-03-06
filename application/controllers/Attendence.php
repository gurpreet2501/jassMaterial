<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use App\Libs\StudentAttendence;
use App\Response\Factory as Resp;
class Attendence extends CI_Controller
{
	function __construct()
	{ 
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		// $this->load->library('tank_auth');
		$this->load->library('email');


	}

	function add()
	{
		
		$data = $_GET;

		sendMail($data);

		$data['card_no'] = ltrim($data['card_no'], '$');

		if(!$this->checkIfEntryValid($data))
			return false; 

		
		$id = StudentAttendence::getCardId($data['card_no']);

		$card = Models\Cards::where('id',$id)->with('machine')->first();
		
		//Checking if card binds to any machine or not
		if(!isset($card->machine))
			return Resp::errorCode(102);

		//Checking if card belongs to that particular machine
		if($card->machine->serial_no != $data['machine_id']){
			return Resp::errorCode(103);
		}

		$card_type = strtolower($card->type);

		if($card_type == 'master'){
			Resp::success(StudentAttendence::toggleStatusAndReturn($card));
			return true;
		}
		
		
		//Check if machine enabled	
		if(!StudentAttendence::checkIfEnabled($card->machine))
			return Resp::errorCode(105);

		     
		//Check if attendence already exits for the day	
		
		if(StudentAttendence::checkIfEntryAlreadyExits($card, $card->school_id)){
			return Resp::errorCode(107);
		}

		if(StudentAttendence::markAttendence($card))
				return Resp::success('Attenence marked Successfully.');

					
	}

	function checkIfEntryValid($data){

		$machineExists = Models\Machines::where('serial_no', $data['machine_id'])->count();
		$cardExists = Models\Cards::where('card_no',$data['card_no'])->count();
		
		if($machineExists && $cardExists)
			return true;
		else 
			return Resp::errorCode(104);

	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */