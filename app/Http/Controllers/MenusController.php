<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menus::all();  
        return view('menus.index', compact('menus')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:menus|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'menu_image' => 'nullable|string',
        ]);
    
        Menus::create($validated);
    
        return redirect()->route('menus.index')->with('success', 'Menu item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menus $menu)
    {
        return view('menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menus $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menus $menu)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'menu_image' => 'nullable|string',
        ]);
    
        $menu->update($validated);
    
        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menus $menu)
    {
        $menu->delete();
    
        return redirect()->route('menus.index')->with('success', 'Menu item deleted successfully.');
    }
}