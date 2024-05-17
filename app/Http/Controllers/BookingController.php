<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Customers;
// validator
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function view()
    {
        $title = "Booking A Room";
        $description = "Change Application settings";
        // get all customers cus_id column
        $customers = Customers::all();
        // get all rooms room_id column
        $rooms = Room::all();
        return view('booking.add', compact('title', 'description', 'customers', 'rooms'));
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

        $bookings   = Booking::orderBy('id', 'DESC')->paginate( $per_page );
        $title = "Booking A Room";
        $description = "Some description for the page";
        return view('booking.list', compact('title', 'description', 'bookings'));
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
            'room_id' => 'required',
            'customer_id' => 'required',
        ]);

        $package = $request->packages;

         if ($validators->fails()) {
              return redirect()->route('booking.add', app()->getLocale())->withErrors($validators)->withInput();
         } else {
              $booking = new Booking();
              $booking->booking_id = 'BK - ' . str_pad(Booking::count() + 1, 3, '0', STR_PAD_LEFT);
              $booking->cusid = Customers::where('id', $request->customer_id)->first()->cusid;
              $booking->room_id = Room::where('id', $request->room_id)->first()->name;
            //   get room type from room table
              $booking->type = Room::where('id', $request->room_id)->first()->type;
              $booking->kids = $request->kids;
                $booking->adults = $request->adults ||0;
              $booking->checkin = $request->checkin;
              $booking->checkout = $request->checkout;
              if ($package == null) {
                  $booking->package = 'Room Only';
              } elseif ($package == '1') {
                  $booking->package = 'Trip to Sigiriya';
              } elseif ($package == '3') {
                  $booking->package = 'Trip to Kandy';
              }

              $booking->status = 'Pending';
              $booking->save();
              return redirect()->route('booking.list', app()->getLocale())->with('success', 'Booking created successfully !');
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice($language, $id)
    {
        $title = "Invoice";
        $description = "Some description for the page";
        return view('bill.bill', compact('title', 'description'));
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
         $find_booking = Booking::findOrFail($id);
         $find_booking->delete();
         return redirect()->route('booking.list', app()->getLocale())->with('delete', 'Booking deleted successfully !');
     }


}
