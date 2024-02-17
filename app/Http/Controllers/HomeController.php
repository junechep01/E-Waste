<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');   
    }

    public function contact(){
        return view('contact');
    }
    public function login(){
        return view('login');
    }

    public function user_dashboard()
    {
        return view('user_account.dashboard' );
    }
    
    public function my_orders()
    {
        return view('user_account.orders');
    }

    public function my_address()
    {
        return redirect()->back();
        return view('user_account.address');
    }

    public function account_details()
    {
        return view('user_account.accountdetails');
    }

    public function collect_request()
    {
        return view('user_account.request');
    }

    public function store_request(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image_name = "image";

        if ($request->image) {
            $newImageName = time() . '-' . $image_name. '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/orders'), $newImageName);        
        }


        auth()->user()->requests()->create([
            'date' => $request->date,
            'time' => $request->time,
            'image' => $newImageName,
            'message' => $request->message,
            'user_id' => auth()->user()->id,    
        ]);

        return back()->with('success', 'Request submitted successfully!');
    }
}
