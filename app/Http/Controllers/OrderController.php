<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    private $validate_rules = [
        'user_id' => 'required|integer',
        'flower_id' => 'required|integer',
        'value' => 'required|integer'
    ];
    public function index()
    {
        return Order::all();
    }

    public function show(int $id)
    {
        $order = Order::findOrFail($id);
        return response()->json($order);
    }

    public function show_by_user(int $id)
    {
        $orders = Order::query()->where('user_id', $id)->get();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|integer|exists:flowers,id', 
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        $items = $request->get('items');
        
        $order_created = [];

        foreach ($items as $item) {
            
            $order_created[] = Order::create([
                'user_id' => $request->input('user_id'),
                'flower_id' => $item['id'],
                'value' => $item['quantity'],
            ]);
        }
        return response()->json($order_created, 201);   
    }

    public function update(Request $request, int $id)
    {
        $order = Order::findOrFail($id);

        $request->validate($this->validate_rules);

        $order->fill($request->except(['id']));

        $order->save();

        return response()->json($order);
    }
}
