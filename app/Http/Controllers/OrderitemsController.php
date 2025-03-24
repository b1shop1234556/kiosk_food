<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderitems;
use App\Models\Menus;

class OrderitemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = Orderitems::all();
        return view('orderitems.index', compact('orderItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orderitems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|string|max:255',
            'menu_item_id' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'subtotal' => 'required|numeric|min:0',
        ]);

        Orderitems::create($validated);

        return redirect()->route('orderitems.index')->with('success', 'Order Item Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orderitems $orderitem)
    {
        return view('orderitems.show', compact('orderitem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orderitems $orderitem)
    {
        return view('orderitems.edit', compact('orderitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orderitems $orderitem)
    {
        $validated = $request->validate([
            'order_id' => 'required|string|max:255',
            'menu_item_id' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'subtotal' => 'required|numeric|min:0',
        ]);

        $orderitem->update($validated);

        return redirect()->route('orderitems.index')->with('success', 'Order Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orderitems $orderitem)
    {
        $orderitem->delete();

        return redirect()->route('orderitems.index')->with('success', 'Order Item Deleted Successfully');
    }
}