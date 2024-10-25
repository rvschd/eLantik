<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardMember;

class BoardMemberController extends Controller
{
    // List all board members
    public function index()
    {
        // Dummy data for board members
        $boardMembers = [
            ['name' => 'Eve Davis', 'position' => 'Chairperson'],
            ['name' => 'Frank Harris', 'position' => 'Secretary'],
        ];

        return view('board_members.index', compact('boardMembers'));
    }

    // Show the form for editing a board member
    public function edit($id)
    {
        // Logic to fetch the board member data goes here
        $boardMember = ['name' => 'Eve Davis', 'position' => 'Chairperson'];

        return view('board_members.edit', compact('boardMember'));
    }

    // Update the specified board member
    public function update(Request $request, $id)
    {
        // Validate and update board member data
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        // Logic to update the board member in the database goes here

        return redirect()->route('board_members.index')->with('success', 'Board member updated successfully.');
    }

    // Terminate a board member's appointment
    public function terminate($id)
    {
        // Logic to terminate the board member's appointment goes here

        return redirect()->route('board_members.index')->with('success', 'Board member appointment terminated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:board_members',
            'position' => 'required|string|max:255',
        ]);

        BoardMember::create($request->all());

        return redirect()->route('board_members.index')->with('success', 'Board member added successfully!');
    }
}
