<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // Show the login page
    public function showLoginForm()
    {
        return view('user.login');
    }

    public function showLogin()
    {
        return view('user.login');
    }


    // Handle login requests
    public function login(Request $request)
    {
        // Validate the credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Use Auth::attempt to check credentials
        if (Auth::attempt($credentials)) {
            // Regenerate session to avoid session fixation attacks
            $request->session()->regenerate();

            // Redirect to the dashboard after successful login
            return redirect()->route('dashboard.index')->with('success', 'Logged in successfully');
        }

        // Redirect back to login with an error if login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // Fake login method for testing
    public function fakeLogin(Request $request)
    {
        Log::info('Fake login method called'); // Log to check if this is hit

        // Normally, you'd want to add some sort of session data here to mimic a real login
        $request->session()->put('user_id', 1); // Example: storing a user ID

        // Get the redirect route from the dropdown
        $redirectRoute = $request->input('module');

        // Redirect to the selected module page with a success message
        return redirect($redirectRoute)->with('success', 'Logged in successfully (fake login)');
    }



    // Handle logout requests
    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect()->route('login'); // Redirect to the login page
    }

    // Show the user profile page
    public function showProfile()
    {
        // Dummy user data for interface
        $user = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '0123456789',
            'position' => 'Software Engineer',
            'profile_picture' => 'default.jpg' // Dummy path to a default picture
        ];

        return view('user.profile', compact('user')); // Pass user data to the view
    }

    // Update profile (just for interface demonstration)
    public function updateProfile(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'position' => 'nullable|string|max:255',
            'profile_picture' => 'nullable|image|max:2048', // Image upload validation
        ]);

        // Here, you would typically save the user's data.
        // This is just a dummy response for demonstration.

        // Example of handling file upload
        if ($request->hasFile('profile_picture')) {
            // Handle the file upload logic (move the file, etc.)
            // $request->file('profile_picture')->storeAs('profile_pictures', $filename);
        }

        // Redirect back to the profile with a success message
        return redirect()->route('profile')->with('success', 'Profile updated successfully (dummy action).');
    }

    // Show the reset password page
    public function showResetPassword()
    {
        return view('user.reset_password'); // Render the reset password view
    }
}
