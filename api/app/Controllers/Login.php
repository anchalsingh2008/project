<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends BaseController  // Make sure the class extends BaseController or Controller
{
    // Method to load login view
    public function index()
    {
        return view('login');  // Load the login view
    }

    // Method to handle logout
    public function logout()
    {
        $session = session();  // Start session
        $session->destroy();   // Destroy session on logout
        return redirect()->to('/login');  // Redirect to login page after logout
    }
}
