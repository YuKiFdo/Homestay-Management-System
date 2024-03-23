<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function viewPanel()
    {
        $title = "Register Customer";
        $description = "Change Application settings";
        return view('customers.register', compact('title', 'description'));
    }

      /**
     * Display view all users of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $per_page = session( 'pagination_per_page' );
        $per_page = ( ! empty( $per_page ) ) ? $per_page : 20;
        $page     = ( ! empty( $_GET['page'] ) ) ? $_GET['page'] : 1;
        $offset   = ( $page * $per_page ) - $per_page;

        $customers   = Customer::orderBy('id', 'DESC')->paginate( $per_page );
        $title       = "Customer List";
        $description = "Some description for the page";

        return view('customers.list', compact('title', 'description', 'customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($language, $id)
    {
        $title         = 'Edit Customer';
        $description   = 'Some description for the page';
        $find_customer = Customer::where('id', $id)->get();

        return view('customer.edit', compact('title', 'description', 'find_customer'));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete($language, $id)
     {
         $find_customer = Customer::findOrFail($id);
         $find_customer->delete();
         return redirect()->route('customer.list', app()->getLocale())->with('delete', 'Customer deleted successfully !');
     }
}
