<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custvouchers;

class CustvouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $custvouchers = Custvouchers::all();
        return view('custvouchers.index', compact('custvouchers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('custvouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|string|max:255',
            'voucher_id' => 'required|string|max:255',
            'used' => 'required|boolean',
            'used_on' => 'nullable|date',
            'valid_from' => 'required|date',
        ]);

        Custvouchers::create($validated);
        return redirect()->route('custvouchers.index')->with('success', 'Customer Voucher added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Custvouchers $custvoucher)
    {
        return view('custvouchers.show', compact('custvoucher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Custvouchers $custvoucher)
    {
        return view('custvouchers.edit', compact('custvoucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Custvouchers $custvoucher)
    {
        $validated = $request->validate([
            'customer_id' => 'required|string|max:255',
            'voucher_id' => 'required|string|max:255',
            'used' => 'required|boolean',
            'used_on' => 'nullable|date',
            'valid_from' => 'required|date',
        ]);

        $custvoucher->update($validated);
        return redirect()->route('custvouchers.index')->with('success', 'Customer Voucher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Custvouchers $custvoucher)
    {
        $custvoucher->delete();
        return redirect()->route('custvouchers.index')->with('success', 'Customer Voucher deleted successfully.');
    }
}
