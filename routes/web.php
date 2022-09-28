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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pdf/view', function() { //ONLY SHOW (MENTIONED IN DOCUMENTATION), BUT IT IS DOWNLOADED
    $html = view('pdfs.example')->render();

    return PDF::load($html)->show();
});


Route::get('/pdf/download', function() {  //DOWNLOAD PDF
    
    $html = view('pdfs.example')->render();

    return PDF::load($html)->download();
});

Route::get('/pdf/output', function() {  // SEND FILE
    $html = view('pdfs.example')->render();

    PDF::load($html)
        ->filename('/tmp/example1.pdf')
        ->output();

    return 'PDF saved';
});

Route::get('/pdf/paperSize', function() {  //DEFINE FILE NAME
    $html = view('pdfs.example')->render();

    return PDF::load($html, 'A4', 'landscape')
        ->output();
});

Route::get('/pdf', 'PdfController@helloWorld')->name('helloWorld');



Route::get('/test', 'PdfController@test')->name('test');