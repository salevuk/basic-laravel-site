<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('news', ['as' => 'news', function () {
    return view('news');
}]);

Route::get('contact', ['as' => 'contact.form', function () {
    return view('contact');
}]);

Route::get('contact/succes', ['as' => 'contact.succes', function () {
    return view('succes');
}]);

Route::get('about', ['as' => 'about', function () {
    return view('about');
}]);

Route::post('contact', ['as' => 'contact.submit', function () {
   $validation = validator(
        request()->only('name','email','message'),
        [
            'name' =>    'required',
            'email' =>   'required|email',
            'message' => 'required'
        ]
        );

    if ($validation->passes()) {
        /*return redirect()->route('contact.form')->with('message', 'Message is sent!');*/
        Mail::to('salevuk16@gmail.com')->send(new App\Mail\Contact(request()));
        return redirect()->route('contact.succes');
    }
    return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();
}]);




