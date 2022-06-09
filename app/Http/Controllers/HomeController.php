<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public function index()
    {
        $i = 0;
        $imgcnt = Place::where('category_id', 1)->count();
        $sliderchunk = 4;
        $sliderdata = Place::limit($sliderchunk)->get();
        $placelist = Place::limit($sliderchunk)->get();
        // specify a category_id to chunk those places by their category id
        $placelist2 = Place::where('category_id', 1)->get()->chunk($sliderchunk);
        return view('home.index', [
            'sliderdata'=>$sliderdata,
            'placelist' => $placelist,
            'placelist2' => $placelist2,
            'imgcnt' => $imgcnt,
            'sliderchunk' => $sliderchunk,
            'i' => $i,
        ]);
    }

    public function place($id)
    {
        $data = Place::find($id);
        $keywords = Place::all()->where('id', $id);
        $posts = Place::limit(5)->get();
        $images = DB::table('images')->where('place_id', $id)->get();

        return view('home.place', [
            'data' => $data,
            'keywords' => $keywords,
            'posts' => $posts,
            'images' => $images,
        ]);
    }

    public function categoryplaces($id)
    {
        $category = Category::find($id);
        $keywords = Place::all()->where('id', $id);
        $posts = Place::limit(4)->get();
        $places = DB::table('places')->where('category_id', $id)->get();

        return view('home.categoryplaces', [
            'category' => $category,
            'keywords' => $keywords,
            'posts' => $posts,
            'places' => $places,
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
