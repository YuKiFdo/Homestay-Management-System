<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{

    public function view()
    {
        $title = "Add Room";
        $description = "Change Application settings";
        return view('room.room', compact('title', 'description'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = session( 'pagination_per_page' );
        $per_page = ( ! empty( $per_page ) ) ? $per_page : 20;
        $page     = ( ! empty( $_GET['page'] ) ) ? $_GET['page'] : 1;
        $offset   = ( $page * $per_page ) - $per_page;

        $rooms   = Room::orderBy('id', 'DESC')->paginate( $per_page );
        $title = "View Room";
        $description = "Some description for the page";
        return view('room.list', compact('title', 'description', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'room_name' => 'required',
            'room_type' => 'required',
            'bed_type' => 'required',
            'kids_price' => 'required|numeric',
            'adult_price' => 'required|numeric',
        ]);

        if ($validators->fails()) {
            return redirect()->route('room.view', app()->getLocale())->withErrors($validators)->withInput();
        } else {
            $room = new Room();
            $room->name = $request->room_name;
            $room->type = $request->room_type;
            $room->bedtype = $request->bed_type;
            $room->kidprice = $request->kids_price;
            $room->adultprice = $request->adult_price;
            $room->save();

            $messageData = [
                'text' => 'Room added successfully!!',
                'type' => 'success', // 'success', 'warning', 'danger', 'info
                'icon' => 'check-circle'
            ];
            return redirect()->route('room.view', app()->getLocale())->with('success', $messageData);
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($language, $id)
     {
         $find_room = Room::findOrFail($id);
         $find_room->delete();
         return redirect()->route('room.list', app()->getLocale())->with('delete', 'Customer deleted successfully !');
     }
}
