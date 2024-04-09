<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;
use Illuminate\Http\Request;

class EmailController extends Controller {

    public function sendEmail()
    {
        $to_email = 'recipient@example.com';
        $data = ['name' => 'John Doe'];

        Mail::to($to_email)->send(new DemoEmail($data));

        return "Email sent successfully!";
    }
}
