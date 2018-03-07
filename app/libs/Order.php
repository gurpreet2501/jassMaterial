<?php 
namespace App\Libs;
use Models\Orders;
use Models\Products;
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

	public static function create($raw_data){

		try{
			$data = Order::updateTotals($raw_data);
			$order =  Orders::create($data);
			foreach ($data['order_items'] as $key => $item) 
				$order->orderItems()->create($item);

			return Resp::success($order->toArray());	

		}catch(Exception $e){
			return Resp::errorCode(102);
		}
		
	}

	public static function updateTotals($data){
		$order_items = [];

		foreach ($data['order_items'] as $key => $item) {
			$product = Products::where('id',$item['product_id'])->first();
			$data['order_items'][$key]['price'] = $product->todays_price;
			$data['order_items'][$key]['product_name'] = $product->name;

		}
	
		return Order::calculateOrderTotals($data);			

	} 
	public static function calculateOrderTotals($data){
		
		$total = 0;
		foreach ($data['order_items'] as $key => $item) {
			$total = $total+ ($item['qty']*$item['price']);
		}

		$data['total'] = $total;
		$data['order_date'] = date('Y-m-d H:i:s');

		return $data;

	}  


}