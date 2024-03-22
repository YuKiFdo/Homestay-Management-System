<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function AddRoom()
    {
        $title = "Add Room";
        $description = "Change Application settings";
        return view('room.room', compact('title', 'description'));
    }
}
