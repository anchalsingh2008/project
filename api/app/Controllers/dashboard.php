<?php

namespace App\Controllers;

use CodeIgniter\Controller;
class Dashboard extends BaseController
{
    public function index()
    {
        // Only allow access if the user is logged in
        $session = session();
        if (!$session->has('username')) {
            return redirect()->to('/login');
        }
        $db = \Config\Database::connect();ww2
        $query = $db->query("SELECT * FROM contactus"); // replace with your table name
        $result = $query->getResultArray();
        // Load the dashboard view
        return view('dashboard');
    }
}
