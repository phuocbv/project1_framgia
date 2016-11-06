<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\TheLoai;
Route::get('/', function () {
    return view('user.home');
});

Route::get('/giaodien',function(){
	return view('user.layout.index');
});

Route::get('/tintuc',function(){
	return view('user.tintuc.tintuc');
});

Route::get('/chitiettintuc',function(){
	return view('user.tintuc.chitiettintuc');
});


Route::get('/demohome',function(){
	return view('user.home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('theloai', 'TheloaiController');

Route::get('/index', function(){
	return view('admin.theloai.add');
});

Route::get('/demo', function(){
	$data = TheLoai::find(1)->loaitin;
	//return "hello";
	foreach ($data as $item) {
		echo $item->Ten." - ".$item->TenKhongDau."<br>";
	}
	//var_dump($data);
});

Route::post('getmsg', function(){
	$msg = "This is a simple message.";
    return response()->json(array('msg'=> $msg), 200);
});

Route::get('/menu', function(){
	return view('menu');
});

Route::post('/demo1', 'HomeController@ajax');
