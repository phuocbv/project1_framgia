<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TheLoai;

class TheloaiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
    	$list = TheLoai::paginate(5);
    	return view('admin.theloai.index')->with('list',$list);
    }

    public function edit($id){
    	$theloai = TheLoai::find($id);
    	return view('admin.theloai.edit')->with('theloai', $theloai);
    }

    public function update($id, Request $request){
    	$theloai = TheLoai::find($id);
    	if($theloai != null){
    		$theloai->update([
    			$d->
    		]);
    	}
    	
    	Session::flash('messages', 'Update complete!');
    	return redirect()->back();
    }
}
