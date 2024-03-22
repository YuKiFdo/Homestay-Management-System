<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function viewPanel()
    {
        $title = "Register Customer";
        $description = "Change Application settings";
        return view('customers.register', compact('title', 'description'));
    }
}
