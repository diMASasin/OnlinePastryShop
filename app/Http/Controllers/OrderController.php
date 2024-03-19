<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $total = DB::table(table: 'orders' )->selectRaw(expression: 'sum(cake_order.one_cake_price * cake_order.amount) as total')
            ->join(table: 'cake_order', first: 'orders.id', operator: '=', second: 'cake_order.order_id')
            ->join(table: 'cakes', first: 'cakes.id', operator:'=', second: 'cake_order.cake_id')
            ->where ('orders.id', $id) ->first();

        return view('order', [
            'order' => Order::all()->where('id', $id)->first(),
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
