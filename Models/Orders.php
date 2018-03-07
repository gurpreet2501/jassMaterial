<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	protected $table    = 'orders';
	protected $fillable = ['customer_id','name','address','phone_no','total','order_date'];

	// function machine(){
	// 	return $this->hasOne(Machines::class, 'id', 'machine_id');
	// }

	function orderItems(){
		return $this->hasMany(OrderItems::class, 'order_id', 'id');
	}
}