<?php

namespace App\Http\Controllers;
use App\User;
use Request;
use App\Http\Requests;
//use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ajax(){
        if(Request::ajax()) {
            $data = User::all()->toJson();
            print_r($data);
            //echo $data;
            die;
        }
    }
}
