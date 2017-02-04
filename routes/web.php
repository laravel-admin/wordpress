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

//  Custom pages
Route::get('{url}', function($url)
{
	$page = App\Models\Page::url($url);

	return view($page->template, compact('page'));
})->where('url', '(.*)');
