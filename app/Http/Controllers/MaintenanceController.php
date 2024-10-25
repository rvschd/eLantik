<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    // Show maintenance page
    public function index()
    {
        // Logic for maintenance tasks (like cleaning up expired entries)
        return view('maintenance.index');
    }

    // Perform specific maintenance task
    public function performTask(Request $request)
    {
        // Logic to perform a maintenance task (like deleting expired data)
        return redirect()->route('maintenance.index')->with('success', 'Maintenance task completed successfully.');
    }

    // Manage Companies/Agencies
    public function manageCompanies()
    {
        // Example fake data
        $companies = [
            ['id' => 1, 'name' => 'Company A', 'agency' => 'Agency A'],
            ['id' => 2, 'name' => 'Company B', 'agency' => 'Agency B'],
            ['id' => 3, 'name' => 'Company C', 'agency' => 'Agency C']
        ];

        return view('maintenance.syarikat_agensi', compact('companies'));
    }

    // Manage System Users
    public function manageUsers()
    {
        // Example fake data
        $users = [
            ['id' => 1, 'name' => 'User 1', 'email' => 'user1@example.com'],
            ['id' => 2, 'name' => 'User 2', 'email' => 'user2@example.com']
        ];

        return view('maintenance.users', compact('users'));
    }

    // Manage Positions
    public function managePositions()
    {
        // Example fake data
        $positions = [
            ['id' => 1, 'title' => 'Manager'],
            ['id' => 2, 'title' => 'Developer']
        ];

        return view('maintenance.jawatan', compact('positions'));
    }

    // System Logs (filtered by user)
    public function systemLogs()
    {
        // Example fake data
        $logs = [
            ['id' => 1, 'user' => 'User 1', 'action' => 'Logged in', 'time' => '2024-10-20 10:00:00'],
            ['id' => 2, 'user' => 'User 2', 'action' => 'Logged out', 'time' => '2024-10-20 12:00:00']
        ];

        return view('maintenance.logs', compact('logs'));
    }

    // Manage Offices/Departments
    public function manageOffices() // Updated method for managing offices
    {
        // Example fake data
        $offices = [
            ['id' => 1, 'name' => 'Main Office'],
            ['id' => 2, 'name' => 'Branch Office'],
            ['id' => 3, 'name' => 'Regional Office']
        ];

        return view('maintenance.offices', compact('offices')); // Adjust the view name as necessary
    }

    // Manage Appointment Statuses
    public function manageAppointmentStatuses()
    {
        // Example fake data
        $statuses = [
            ['id' => 1, 'status' => 'Active'],
            ['id' => 2, 'status' => 'Inactive']
        ];

        return view('maintenance.status_pelantikan', compact('statuses'));
    }
    public function storeUser(Request $request)
    {
        // Logic to store a new user (this is just a placeholder)
        return redirect()->route('maintenance.users.index')->with('success', 'User added successfully.');
    }

    public function updateUser(Request $request, $id)
    {
        // Logic to update an existing user (this is just a placeholder)
        return redirect()->route('maintenance.users.index')->with('success', 'User updated successfully.');
    }

    public function deleteUser($id)
    {
        // Logic to delete a user (this is just a placeholder)
        return redirect()->route('maintenance.users.index')->with('success', 'User deleted successfully.');
    }

    public function deletePosition($id)
    {
        // Logic to delete the position by ID
        return redirect()->route('maintenance.jawatan')->with('success', 'Position deleted successfully.');
    }

    public function manageDepartments()
    {
        // Example fake data (this would normally come from a database)
        $offices = [
            'HR Department',
            'IT Department',
            'Finance Department',
        ];

        // Returning the view with offices data
        return view('maintenance.pejabat_bahagian', compact('offices'));
    }
    public function fileUploadManagement()
    {
        $files = [
            'document1.pdf',
            'image2.jpg',
            'report3.xlsx',
        ];

        return view('maintenance.muat_naik_fail', compact('files'));
    }
}
