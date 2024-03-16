<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{

    /**
     * Display view all users of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $per_page = session( 'pagination_per_page' );
        $per_page = ( ! empty( $per_page ) ) ? $per_page : 20;
        $page     = ( ! empty( $_GET['page'] ) ) ? $_GET['page'] : 1;
        $offset   = ( $page * $per_page ) - $per_page;

        $customers   = Customer::orderBy('id', 'DESC')->paginate( $per_page );
        $title       = "Customer List";
        $description = "Some description for the page";

        return view('customer.list', compact('title', 'description', 'customers'));
    }

    /**
     * Display create users of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = "Create new Customer";
        $description = "Some description for the page";
        return view('customer.add', compact('title', 'description'));
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
            'email' => 'required|email|unique:customers',
            'phone' => 'required|numeric|unique:customers',
            'gender' => 'required',
            'profession' => 'required'
        ]);

        if ($validators->fails()) {
            return redirect()->route('customer.create', app()->getLocale())->withErrors($validators)->withInput();
        } else {
            $customer = new Customer();

            if ( $request->hasFile('profile-picture') && $request->file('profile-picture')->isValid() ) {
                $profile_picture = $request->file('profile-picture')->store('public');
                $customer->profile_picture = $profile_picture;
            }

            $customer->name       = $request->name;
            $customer->email      = $request->email;
            $customer->phone      = $request->phone;
            $customer->gender     = $request->gender;
            $customer->profession = $request->profession;
            $customer->address    = $request->address;
            $customer->status     = $request->status;

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
        $find_customer = Customer::where('id', $id)->get();

        return view('customer.edit', compact('title', 'description', 'find_customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $language, $id)
    {
        $validators = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('customers')->ignore($id)],
            'phone' => ['required', 'numeric', Rule::unique('customers')->ignore($id)],
            'gender' => 'required',
            'profession' => 'required'
        ]);

        if ($validators->fails()) {
            return redirect()->route('customer.edit', [app()->getLocale(), $id])->withErrors($validators)->withInput();
        } else {
            $customer = Customer::findOrFail($id);

            if ( $request->hasFile('profile-picture') && $request->file('profile-picture')->isValid() ) {
                $profile_picture = $request->file('profile-picture')->store('public');
                $customer->profile_picture = $profile_picture;
            }

            if ( $request->has('remove_profile_picture') && ! empty( $request->remove_profile_picture ) ) {
                Storage::delete( $customer->profile_picture );
                $customer->profile_picture = '';
            }

            $customer->name       = $request->name;
            $customer->email      = $request->email;
            $customer->phone      = $request->phone;
            $customer->gender     = $request->gender;
            $customer->profession = $request->profession;
            $customer->address    = $request->address;
            $customer->status     = $request->status;

            $customer->save();

            return redirect()->route('customer.list', app()->getLocale())->with('update', 'Customer updated successfully !');
        }
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
