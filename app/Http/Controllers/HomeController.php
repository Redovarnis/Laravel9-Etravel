<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use App\Models\Setting;
use App\Models\Message;
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
        $spacing = 0;
        $imgcnt = Place::where('category_id', 1)->count();
        $sliderchunk = 4;
        $sliderdata = Place::limit($sliderchunk)->get();
        $placelist = Place::limit($sliderchunk)->get();
        $placelist2 = Place::where('category_id', 1)->get()->chunk($sliderchunk);
        $setting = Setting::first();
        return view('home.index', [
            'sliderdata'=>$sliderdata,
            'placelist' => $placelist,
            'placelist2' => $placelist2,
            'imgcnt' => $imgcnt,
            'sliderchunk' => $sliderchunk,
            'i' => $i,
            'setting' => $setting,
            'spacing' => $spacing
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        $spacing = 1;
        return view('home.about', [
            'setting' => $setting,
            'spacing' => $spacing
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        $spacing = 1;
        return view('home.references', [
            'setting' => $setting,
            'spacing' => $spacing
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        $spacing = 1;
        return view('home.contact', [
            'setting' => $setting,
            'spacing' => $spacing
        ]);
    }

    public function storemessage(Request $request)
    {
        //  dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->note = $request->input('note');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent successfully!');
    }

    public function place($id)
    {
        $data = Place::find($id);
        $keywords = Place::all()->where('id', $id);
        $posts = Place::limit(5)->get();
        $images = DB::table('images')->where('place_id', $id)->get();
        $spacing = 1;

        return view('home.place', [
            'data' => $data,
            'keywords' => $keywords,
            'posts' => $posts,
            'images' => $images,
            'spacing' => $spacing
        ]);
    }

    public function categoryplaces($id)
    {
        $category = Category::find($id);
        $keywords = Place::all()->where('id', $id);
        $posts = Place::limit(4)->get();
        $places = DB::table('places')->where('category_id', $id)->get();
        $spacing = 1;

        return view('home.categoryplaces', [
            'category' => $category,
            'keywords' => $keywords,
            'posts' => $posts,
            'places' => $places,
            'spacing' => $spacing
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
