<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function ViewRoom()
    {
        $title = "View Room";
        $description = "Change Application settings";
        return view('room.list', compact('title', 'description'));
    }
}
