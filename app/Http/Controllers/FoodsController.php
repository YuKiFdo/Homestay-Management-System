<?php

namespace App\Http\Controllers;
use App\Models\Food;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodsController extends Controller
{

    public function view()
    {
        $title = "Add Food";
        $description = "Change Application settings";
        return view('food.add', compact('title', 'description'));
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

        $foods   = Food::orderBy('id', 'DESC')->paginate( $per_page );
        $title = "View Foods";
        $description = "Some description for the page";
        return view('food.list', compact('title', 'description', 'foods'));
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
           'name' => 'required',
           'price' => 'required',
       ]);

         if ($validators->fails()) {
              return redirect()->route('food.add', app()->getLocale())->withErrors($validators)->withInput();
         } else {
              $food = new Food();
              $food->code =  'FOOD - ' . str_pad(Food::count() + 1, 3, '0', STR_PAD_LEFT); // Generating the custom ID
              $food->fname = $request->name;
              $food->fprice = $request->price;
              $food->save();
              return redirect()->route('foods.list', app()->getLocale())->with('success', 'Food added successfully !');
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
         $find_food = Food::findOrFail($id);
         $find_food->delete();
         return redirect()->route('foods.list', app()->getLocale())->with('delete', 'Food deleted successfully !');
     }





}
