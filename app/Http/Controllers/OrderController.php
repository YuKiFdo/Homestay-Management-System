<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function view()
    {
        $title = "Order Foods";
        $description = "Change Application settings";
        return view('food.order', compact('title', 'description'));
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

        $orders   = Order::orderBy('id', 'DESC')->paginate( $per_page );
        $title = "View Orders";
        $description = "Some description for the page";

        return view('food.vieworder', compact('title', 'description', 'orders'));
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
        //
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
        $title         = 'Edit Order';
        $description   = 'Some description for the page';
        $find_order = Order::where('id', $id)->get();

        return view('orders.edit', compact('title', 'description', 'find_order'));
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
         $find_order = Order::findOrFail($id);
         $find_order->delete();
         return redirect()->route('orders.list', app()->getLocale())->with('delete', 'Order deleted successfully !');
     }


     


}
