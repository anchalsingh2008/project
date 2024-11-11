<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        $data = [
            'phone' => '+1-234-567-890',
            'email' => 'support@example.com',
            'address' => '1234 Example Street, City, Country'
        ];

        return view('contact', $data);  // Contact view ke sath data pass karein
    }

    public function submit()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // Processing form data (database me save ya email bhejne ke liye)

        return redirect()->to('/contact')->with('status', 'Message Sent Successfully!');
    }
}
