<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model {
    protected $fillable = ['order_id', 'item_id', 'quantity', 'price_eur', 'price_usd', 'total_price_eur', 'total_price_usd'];
	protected $hidden = ["created_at", "updated_at"];
}
