<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function officerProfiles()
    {
        return view('reports.nama_nokp_jawatan'); // Ensure this matches the blade file
    }

    public function unappointedOfficers()
    {
        return view('reports.pegawai_belum_dilantik'); // Ensure this matches the blade file
    }

    public function expiredBoardMembers()
    {
        return view('reports.ahli_lembaga_tamat_pendidikan'); // Ensure this matches the blade file
    }

    public function briefOfficerProfiles()
    {
        return view('reports.laporan_ringkas_profil'); // Ensure this matches the blade file
    }

    public function alpProfiles()
    {
        return view('reports.profil_alp'); // Ensure this matches the blade file
    }
}
