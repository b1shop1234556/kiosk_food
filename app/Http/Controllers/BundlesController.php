<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bundles;

class BundlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bundles = Bundles::all();  
        return view('bundles.index', compact('bundles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bundles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bundle_meal_name' => 'required|unique:bundles|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'bundle_image' => 'required|string',
        ]);
    
        Bundles::create($validated);
    
        return redirect()->route('bundles.index')->with('success', 'Bundle created successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Bundles $bundle)
    {
        return view('bundles.show', compact('bundle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bundles $bundle)
    {
        return view('bundles.edit', compact('bundle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bundles $bundle)
    {
        $validated = $request->validate([
            'bundle_meal_name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'bundle_image' => 'required|string',
        ]);

        $bundle->update($validated);
    
        return redirect()->route('bundles.index')->with('success', 'Bundle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bundles $bundle)
    {
        $bundle->delete();

        return redirect()->route('bundles.index')->with('success', 'Bundle deleted successfully.');
    }
}
