<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
class websiteController extends Controller
{
    /*public function index(){
        $title = 'Welcome to Ayapp';
        return view('website.index')->with('title',$title);
    }
    */
    
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(9);
        $categories = Category::take(4)->get();
        return view('website.index')->with('posts',$posts)->with('categories',$categories);
    }

    public function about(){
        return view('website.aboutus');
    }

    public function service(){
        return view('website.service');
    }

    public function contact(){
        return view('website.contact');
    }

    public function main(){
        return view('website.main');
    }

    public function blog(){
        return view('website.blog');
    }

    public function blog_single(){
        return view('website.blog-single');
    }

    public function success_stories(){
        return view('website.success-stories');
    }

  
}
