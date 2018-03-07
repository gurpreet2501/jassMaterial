<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
	protected $table    = 'order_items';
	protected $fillable = ['product_name','order_id','price','product_id','qty'];


}