<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Faq;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        $spacing = 1;
        return view('home.faq', [
            'datalist' => $datalist,
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

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }

    public function storecomment(Request $request)
    {
        // dd($request); // Check your values
        $data = new Comment();
        $data->user_id = Auth::id(); // Logged in user id
        $data->place_id = $request->input('place_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('place',['id'=>$request->input('place_id')])->with('success', 'Your comment has been sent successfully!');
    }

    public function place($id)
    {
        $data = Place::find($id);
        $keywords = Place::all()->where('id', $id);
        $posts = Place::limit(5)->get();
        $images = DB::table('images')->where('place_id', $id)->get();
        $spacing = 1;
        $reviews = Comment::where('place_id', $id)->where('status', 'True')->get();

        return view('home.place', [
            'data' => $data,
            'keywords' => $keywords,
            'posts' => $posts,
            'images' => $images,
            'spacing' => $spacing,
            'reviews' => $reviews
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'These credentials do not match our records.',
        ])->onlyInput('email');
    }


}
