<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $table    = 'categories';
	protected $fillable = ['name'];

	// function machine(){
	// 	return $this->hasOne(Machines::class, 'id', 'machine_id');
	// }

	// function student(){
	// 	return $this->hasOne(Students::class, 'id', 'card_id');
	// }
}