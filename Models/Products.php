<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $table    = 'products';
	protected $fillable = ['name','image','description','general_price','todays_price','stock_available',' 	category_id','stock_flag'];

	// function machine(){
	// 	return $this->hasOne(Machines::class, 'id', 'machine_id');
	// }

	// function student(){
	// 	return $this->hasOne(Students::class, 'id', 'card_id');
	// }
}