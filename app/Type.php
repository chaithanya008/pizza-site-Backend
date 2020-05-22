<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $hidden = ["created_at", "updated_at"];
    
    public function items()
    {
    	return $this->hasMany('App\Item');
    }
}
