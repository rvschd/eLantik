<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointments.index'); // This is your index view
    }

    public function memo()
    {
        return view('appointments.memo'); // Create this view
    }

    public function suratPelantikan()
    {
        return view('appointments.surat_pelantikan'); // Create this view
    }

    public function sejarahLantikan()
    {
        return view('appointments.sejarah_lantikan'); // Create this view
    }

    public function search(Request $request)
    {
        // Sample dummy data for candidates
        $candidates = [
            ['name' => 'John Doe', 'ic' => '123456-78-9012', 'position' => 'Position A'],
            ['name' => 'Jane Smith', 'ic' => '987654-32-1098', 'position' => 'Position B'],
            ['name' => 'Michael Johnson', 'ic' => '321654-09-8765', 'position' => 'Position C'],
            ['name' => 'Emily Davis', 'ic' => '654321-12-3456', 'position' => 'Position D'],
        ];

        $searchTerm = $request->input('search');
        $filteredCandidates = [];

        if ($searchTerm) {
            // Filter candidates based on the search term
            foreach ($candidates as $candidate) {
                if (stripos($candidate['name'], $searchTerm) !== false || stripos($candidate['ic'], $searchTerm) !== false) {
                    $filteredCandidates[] = $candidate;
                }
            }
        } else {
            // If no search term, return all candidates
            $filteredCandidates = $candidates;
        }

        return view('appointments.search', ['candidates' => $filteredCandidates, 'searchTerm' => $searchTerm]);
    }

    public function maklumatPelantikan()
    {
        return view('appointments.maklumat_pelantikan'); // Create this view
    }
}
