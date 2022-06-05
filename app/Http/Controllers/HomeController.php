<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $total = 4;
        $sliderdata = Place::limit($total)->get();
        $placelist = Place::limit($total)->get();
        $placelist2 = Place::where('category_id', 1)->get()->chunk(4);
        return view('home.index', [
            'sliderdata'=>$sliderdata,
            'placelist' => $placelist,
            'placelist2' => $placelist2,
            'total' => $total,
        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id, $number)
    {
        return view('home.test2',
        [
            'id' => $id,
            'number' => $number,
            'sum' => $id + $number
        ]);
    }

    public function save()
    {
        return view('home.test3',
        [
            'fname' => $_REQUEST['fname'],
            'lname' => $_REQUEST['lname']
        ]);

    }

    public function header()
    {
        return view('home.deletethis');
    }
}
