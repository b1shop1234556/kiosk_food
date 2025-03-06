<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Task;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();  
        return view('rooms.index', compact('rooms')); 
        // return view('rooms.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roomname' => 'required|unique:rooms|max:255', // Fix typo here: 'reuired' => 'required'
            'location' => 'required',
            'capacity' => 'required|integer', // Ensure capacity is an integer
        ]);
    
        Room::create($request->all());
    
        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
        //
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        if (!$room){
            return response()->json(['message' => 'Room not found'], 404);
        }

        $validated = $request->validate([
            'roomname' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        $room->roomname=$validated['roomname'];
        $room->location=$validated['location'];
        $room->capacity=$validated['capacity'];


        $room->save();

        return redirect()->route('rooms.index')->with('success', 'Room Updated Successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room Delete Successfully');
        //
    }
}
