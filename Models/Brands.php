<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
	protected $table    = 'product_brands';
	protected $fillable = ['name'];

	// function machine(){
	// 	return $this->hasOne(Machines::class, 'id', 'machine_id');
	// }

	// function student(){
	// 	return $this->hasOne(Students::class, 'id', 'card_id');
	// }
}