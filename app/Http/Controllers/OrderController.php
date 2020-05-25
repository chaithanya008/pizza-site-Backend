<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{

    public function placeOrder(Request $request)
    {
        // Throw an error if order value not exists in request
        if (!$request->has('order')) {
            return response()->json(['message' => 'Please select some item(s) to order'], 422);
        }

        $input = $request->all(); // Get all input values
        $orders = json_decode($input['order']); // Extract order data and convert to object

        // Extracting ids to query database for item details
        $ids = [];
        foreach($orders as $item) {
            $ids[] = $item->id;
        }

        // Query data with item ids
        $allItems = Item::whereIn('id', $ids)->get(['id', 'price_eur', 'price_usd']);

        // If menu item not found with item ids then throw error
        if (count($allItems) == 0) {
            return response()->json(['message' => 'Please select some item(s) to order'], 422);
        }
        
        // Create [id => [id, price_eur, price_usd]]
        $orderPrice = [];
        foreach($allItems as $item) {
            $orderPrice[$item['id']] = $item;
        }

        // Insert order
        $newOrder = Order::create([
            'name' => $input['name'],
            'contact' => $input['contact'],
            'address' => $input['address'],
            'status' => 'pending',
            'price_eur' => 0,
            'price_usd' => 0
        ]);

        // Insert items and calculate prize
        $priceEur = 0;
        $priceUsd = 0;
        foreach($orders as $order) {
            $orderPriceEur = $orderPrice[$order->id]['price_eur'] * $order->qty; // Sum of EUR * quantity
            $orderPriceUsd = $orderPrice[$order->id]['price_usd'] * $order->qty; // Sum of USD * quantity

            // Prepare order item details
            OrderItem::create([
                'order_id' => $newOrder->id,
                'item_id' => $order->id,
                'quantity' => $order->qty,
                'price_eur' => $orderPrice[$order->id]['price_eur'],
                'price_usd' => $orderPrice[$order->id]['price_usd'],
                'total_price_eur' => $orderPriceEur,
                'total_price_usd' => $orderPriceUsd,
            ]);

            $priceEur += $orderPriceEur; // Total sum of price in EUR
            $priceUsd += $orderPriceUsd; // Total sum of price in USD
        }

        // Update final price in Order table
        $newOrder->price_eur = $priceEur;
        $newOrder->price_usd = $priceUsd;
        $newOrder->save();

    	return response()->json([
            'message' => 'Order placed successfully',
            'data' => Order::with('items')->find($newOrder->id) // Show order information to user
        ]);
    }
    
    public function trackOrder(Request $request) {
        // Throw an error if order or contact not exists in request
        if (!$request->has('order') || !$request->has('contact')) {
            return response()->json(['message' => 'Order no or contact number can\'t be empty'], 422);
        }

        $input = $request->all(); // Fetch all input values

        try {
            // Querying database for order
            $order = Order::with('items')->where(['id' => $input['order'], 'contact' => $input['contact']])->first();
            return response()->json([
                'message' => 'Success',
                'data' => $order // Show order information to user
            ]);

            // Throw an error if order not found
        } catch(\Exception $e) {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }
}