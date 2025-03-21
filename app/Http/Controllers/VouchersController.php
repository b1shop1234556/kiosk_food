<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vouchers;

class VouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vouchers = Vouchers::all();  
        return view('vouchers.index', compact('vouchers')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:vouchers|max:255',
            'discount' => 'required|numeric|min:0',
            'expiry_date' => 'required|date',
        ]);
    
        Vouchers::create($validated);
    
        return redirect()->route('vouchers.index')->with('success', 'Voucher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vouchers $voucher)
    {
        return view('vouchers.show', compact('voucher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vouchers $voucher)
    {
        return view('vouchers.edit', compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vouchers $voucher)
    {
        $validated = $request->validate([
            'code' => 'required|max:255|unique:vouchers,code,' . $voucher->id,
            'discount' => 'required|numeric|min:0',
            'expiry_date' => 'required|date',
        ]);
    
        $voucher->update($validated);
    
        return redirect()->route('vouchers.index')->with('success', 'Voucher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vouchers $voucher)
    {
        $voucher->delete();
    
        return redirect()->route('vouchers.index')->with('success', 'Voucher deleted successfully.');
    }
}