<?php 
namespace App\Libs;
use Models\Orders;
use App\Response\Factory as Resp;
/**
* 
*/
class Order 
{
	
	function __construct()
	{
		# code...
	}

	public static function create($data){
		try{
			$order =  Orders::create($data);
			foreach ($data['order_items'] as $key => $item) {
				$order->orderItems()->create($item);
			}

			return Resp::success($order->toArray());	
		}catch(Exception $e){
			return Resp::errorCode(101);
		}
	}

	
}