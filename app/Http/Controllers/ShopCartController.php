<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use App\Models\Order;
use App\Models\OrderPlace;
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

    public function order(Request $request)
    {
        $total = 0;
        return view("home.order", [
            'total'=>$total
        ]);
    }

    public function storeorder(Request $request)
    {
        $cardcheck = 'True';
        if ($cardcheck=='True') {
            $data = New Order();
            $data->name= $request->input('name');
            $data->address= $request->input('address');
            $data->email = $request->input('email');
            $data->phone= $request->input('phone');
            $data->total = $request->input('total');
            $data->user_id= Auth::id();
            $data->IP = $_SERVER['REMOTE_ADDR'];
            $data->save();

            $datalist = Shopcart::where('user_id', Auth::id())->get();
            foreach ($datalist as $rs) {
                $data2 = new OrderPlace();
                $data2->user_id = Auth::id();
                $data2->place_id = $rs->place_id;
                $data2->order_id = $data->id;
                $data2->price = 0;
                $data2->quantity = $rs->quantity;
                $data2->amount = 0;
                $data2->save();
            }
            $data3 = Shopcart::where('user_id', Auth::id());
            $data3->delete();

            return redirect()->route('shopcart.ordercomplete')->with('succes', 'Place Order Successfully Added!');
        }
        else {
            return redirect()->route('shopcart.ordercomplete')->with('error', 'Your credit card is not valid!');
        }
    }

    // write a ordercomplete function
    public function ordercomplete()
    {
        return view('home.ordercomplete');
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
    public function add($id)
    {
        $data = ShopCart::where('place_id', $id)->where('user_id', Auth::id())->first();
        if($data)
        {
            $data->quantity = $data->quantity + 1;
        } else {
            $data = new ShopCart();
            $data->place_id = $id;
            $data->user_id = Auth::id();
            $data->quantity = 1;
        }
        $data->save();

        return redirect()->back()->with('info', 'Place added to the cart');
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
