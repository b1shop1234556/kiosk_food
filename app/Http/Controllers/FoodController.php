<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();  
        return view('foods.orderList', compact('foods')); 
        // return view('foods.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foods.createOrder');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([        
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|string',
            'category' => 'required|string',
            'stock' => 'required|integer',
        ]);
            
    
        Food::create($request->all());
    
        return redirect()->route('foods.orderList')->with('success', 'Food added successfully.');
        //
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        return view('foods.editOrder', compact('food'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        if (!$food){
            return response()->json(['message' => 'Food not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|string',
            'category' => 'required|string',
            'stock' => 'required|integer',
        ]);

        $food->name=$validated['name'];
        $food->price=$validated['price'];
        $food->image=$validated['image'];
        $food->category=$validated['category'];
        $food->stock=$validated['stock'];


        $food->save();

        return redirect()->route('foods.orderList')->with('success', 'Food Updated Successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return redirect()->route('foods.orderList')->with('success', 'Food Delete Successfully');
        //
    }

    public function order()
    {
        return view('foods.editOrder');
    }

    public function payment()
    {
        return view('foods.payment');
    }

    public function menu()
    {
        return view('foods.menu');
    }
}

