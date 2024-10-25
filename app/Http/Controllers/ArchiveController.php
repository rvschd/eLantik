<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardMember;
use Carbon\Carbon;

class ArchiveController extends Controller
{
    // List expired board members
    public function expiredBoardMembers()
    {
        // Fake data for expired board members
        $expiredMembers = [
            (object)[
                'name' => 'John Doe',
                'ic' => '123456-78-9101',
                'position' => 'Board Member',
                'expiry_date' => Carbon::now()->subDays(30)->format('d-m-Y') // Expired 30 days ago
            ],
            (object)[
                'name' => 'Jane Smith',
                'ic' => '987654-32-1098',
                'position' => 'Senior Member',
                'expiry_date' => Carbon::now()->subDays(60)->format('d-m-Y') // Expired 60 days ago
            ],
            (object)[
                'name' => 'James Brown',
                'ic' => '112233-44-5566',
                'position' => 'Advisory Member',
                'expiry_date' => Carbon::now()->subDays(15)->format('d-m-Y') // Expired 15 days ago
            ]
        ];

        // Return the view with the fake data
        return view('archives.tamat_tempoh', compact('expiredMembers'));
    }

    // List inactive officers
    public function inactive()
    {
        // Dummy data for inactive officers
        $inactiveOfficers = [
            ['name' => 'Hannah Lee', 'position' => 'Officer', 'status' => 'Inactive'],
        ];

        return view('archives.pegawai_tidak_aktif', compact('inactiveOfficers'));
    }
}
