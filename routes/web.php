<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/test',function(){
    return App\Category::find(3)->posts;
});*/

/*Route::get('/results', function () {
    $posts = App\Post::where('post_title','like', '%' . request('query') . '%')->get();
    return view('results')->with('posts',$posts)
                            ->with('categories',\App\Category::take(4)->get())
                            ->with('query',request('query'));
});*/

Route::get('/',"websiteController@index");
Route::get('/about',"websiteController@about");
Route::get('/contact',"websiteController@contact");
Route::get('/service',"websiteController@service");
Route::get('/success-stories',"websiteController@success_stories");

Route::get('/results', "PostsController@search")->name("posts.search_index");
Route::get('/posts/all/{cat?}',"PostsController@cat_posts")->name("posts.cat_index");
Route::resource('/posts',"PostsController");
Route::resource('/categories',"CategoriesController");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
