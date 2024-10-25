<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    // Example fake data (you would typically use a Model to interact with a database)
    protected $positions = [
        ['id' => 1, 'title' => 'Manager'],
        ['id' => 2, 'title' => 'Developer'],
        ['id' => 3, 'title' => 'Designer'],
    ];

    // Display a list of positions
    public function index()
    {
        // Use the fake data instead of fetching from the database
        return view('maintenance.jawatan', ['positions' => $this->positions]);
    }

    // Show the form for creating a new position
    public function create()
    {
        return view('maintenance.create_position');
    }

    // Store a newly created position
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Here you would typically save the new position to the database
        // For now, we just simulate a success message
        return redirect()->route('maintenance.jawatan')->with('success', 'Position created successfully! (fake data)');
    }

    // Show the form for editing a specific position
    public function edit($id)
    {
        // Find the position by ID using fake data
        $position = collect($this->positions)->firstWhere('id', $id);

        // Check if the position exists
        if (!$position) {
            abort(404); // Or handle not found error
        }

        return view('maintenance.edit_position', compact('position'));
    }

    // Update a specific position
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Here you would typically update the position in the database
        // For now, we just simulate a success message
        return redirect()->route('maintenance.jawatan')->with('success', 'Position updated successfully! (fake data)');
    }

    // Delete a specific position
    public function destroy($id)
    {
        // Here you would typically delete the position from the database
        // For now, we just simulate a success message
        return redirect()->route('maintenance.jawatan')->with('success', 'Position deleted successfully! (fake data)');
    }
}
