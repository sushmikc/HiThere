<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //when user is in home page they will be able to access all groups
        $userName = Auth::user()->name;
        $groups = \App\Group::all();

        if($request->input('filter')) {
            $groups = \App\Group::where('name', '=', $request->input('filter'))->get(); 
        }

        return view('home', [
            "userName" => $userName,
            'groups' => $groups,
        ]);
    }
}
