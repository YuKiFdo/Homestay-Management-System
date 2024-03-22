<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function View()
    {
        $title = "View Customer";
        $description = "Change Application settings";
        return view('customers.list', compact('title', 'description'));
    }
}
