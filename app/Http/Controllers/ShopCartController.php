<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;



class ShopCartController extends Controller
{

    public static function countshopcart()
    {
        return ShopCart::where('user_id', Auth::id())->count();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cart = ShopCart::where('user_id', Auth::id())->get();
        return view('home.user.shopcart',[
            'cart' => $cart
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $data = ShopCart::where('place_id', $id)->where('user_id', Auth::id())->first();
        if($data){
            $data->quantity = $data->quantity + $request->input('quantity');
        } else {
            $data = new ShopCart();
            $data->place_id = $id;
            $data->user_id = Auth::id();
            $data->quantity = $request->input('quantity');
        }

        $data->save();

        return redirect()->back()->with('info', 'Place added to the cart');
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
        // write a code to update the shopcart
        $data = ShopCart::find($id);
        $data->quantity = $request->input('quantity');
        $data->save();

        return redirect()->back()->with('info', 'Quantity updated');
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
        $data = ShopCart::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Place removed from the cart');
    }
}
