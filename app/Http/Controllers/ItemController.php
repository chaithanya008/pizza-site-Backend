<?php

namespace App\Http\Controllers;

use App\Type;

class ItemController extends Controller
{

    public function getMenu()
    {
    	return response()->json([
            'data' => Type::with('items')->get()
        ]);
    }
    
}