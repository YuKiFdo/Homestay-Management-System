<?php

namespace App\Http\Controllers;
use App\Models\Customers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use League\ISO3166\ISO3166;

class CustomersController extends Controller
{
    public function viewPanel()
    {
        $iso = new ISO3166();
        $countries = $iso->all();

        $title = "Register Customer";
        $description = "Change Application settings";
        return view('customers.register', compact('title', 'description' , 'countries'));
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

        $customers   = Customers::orderBy('id', 'DESC')->paginate( $per_page );
        $title       = "Customer List";
        $description = "Some description for the page";

        return view('customers.list', compact('title', 'description', 'customers'));
    }

     /**
     * Store a newly created customer resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $validators = Validator::make($request->all(), [
             'name' => 'required',
             'passport' => 'required|unique:customers',
             'telephone' => 'required|numeric|unique:customers',
             'email' => 'required|email|unique:customers',
             'country' => 'required|not_in:"Select A Country"',
         ]);

         if ($validators->fails()) {
             return redirect()->route('customer.view', app()->getLocale())->withErrors($validators)->withInput();
         } else {
             $customer = new Customers();

             $customer->name       = $request->name;
             $customer->passport      = $request->passport;
             $customer->telephone      = $request->telephone;
             $customer->email     = $request->email;
             $customer->dob = $request->dob;
             $customer->country    = $request->country;
            //  $customer->anniversary     = $request->anniversary || 'N/A';
            if ($request->anniversary == 0) {
                $customer->anniversary = 'N/A';
            } else {
                $customer->anniversary = $request->anniversary;
            }

             $customer->save();

             return redirect()->route('customer.list', app()->getLocale())->with('create', 'Customer created successfully !');
         }
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
        $find_customer = Customers::where('id', $id)->get();

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
         $find_customer = Customers::findOrFail($id);
         $find_customer->delete();
         return redirect()->route('customer.list', app()->getLocale())->with('delete', 'Customer deleted successfully !');
     }
}
