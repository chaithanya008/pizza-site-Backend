<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
	
	protected $fillable = ['name', 'contact', 'address', 'price_eur', 'price_usd', 'status'];
	protected $hidden = ["created_at", "updated_at"];

	public function items() {
    	return $this->hasMany('App\OrderItem');
    }
}
