<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerProfileController extends Controller
{
    protected $officers = []; // Dummy data for demonstration

    public function __construct()
    {
        // Dummy data simulating a database
        $this->officers = [
            ['id' => 1, 'name' => 'Alice Smith', 'ic' => '1234567890', 'position' => 'Director'],
            ['id' => 2, 'name' => 'Bob Johnson', 'ic' => '0987654321', 'position' => 'Manager'],
        ];
    }

    // List all officers (Grade 54 and above)
    public function index(Request $request)
    {
        // Here we could add filtering logic based on $request parameters for "Kategori" and "Bahagian"
        return view('officer_profiles.index', ['officers' => $this->officers]);
    }

    // Show the form to create a new officer
    public function create()
    {
        return view('officer_profiles.create');
    }

    // Store a newly created officer
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ic' => 'required|string|max:12',
            'position' => 'required|string|max:255',
        ]);

        // Simulate storing the officer (in a real application, this would involve saving to the database)
        $newOfficer = [
            'id' => count($this->officers) + 1, // Generate new ID based on the current size
            'name' => $request->name,
            'ic' => $request->ic,
            'position' => $request->position,
        ];

        $this->officers[] = $newOfficer; // Add the new officer to the array

        return redirect()->route('officer_profiles.index')->with('success', 'Officer created successfully.');
    }

    // Show the form for editing an officer
    public function edit($id)
    {
        // Find the officer by ID
        $officer = collect($this->officers)->firstWhere('id', $id);

        // Check if officer exists
        if (!$officer) {
            return redirect()->route('officer_profiles.index')->withErrors('Officer not found.');
        }

        return view('officer_profiles.edit', compact('officer'));
    }

    // Update the specified officer
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ic' => 'required|string|max:12',
            'position' => 'required|string|max:255',
        ]);

        // Find the officer by ID
        $officerKey = collect($this->officers)->search(function ($officer) use ($id) {
            return $officer['id'] == $id;
        });

        // Check if officer exists
        if ($officerKey === false) {
            return redirect()->route('officer_profiles.index')->withErrors('Officer not found.');
        }

        // Update officer
        $this->officers[$officerKey] = [
            'id' => $id,
            'name' => $request->name,
            'ic' => $request->ic,
            'position' => $request->position,
        ];

        return redirect()->route('officer_profiles.index')->with('success', 'Officer updated successfully.');
    }

    // Remove the specified officer
    public function destroy($id)
    {
        // Find the officer by ID
        $officerKey = collect($this->officers)->search(function ($officer) use ($id) {
            return $officer['id'] == $id;
        });

        // Check if officer exists
        if ($officerKey === false) {
            return redirect()->route('officer_profiles.index')->withErrors('Officer not found.');
        }

        // Simulate deleting the officer (in a real application, this would involve deleting from the database)
        unset($this->officers[$officerKey]); // Remove the officer from the array
        $this->officers = array_values($this->officers); // Re-index the array

        return redirect()->route('officer_profiles.index')->with('success', 'Officer deleted successfully.');
    }
}
