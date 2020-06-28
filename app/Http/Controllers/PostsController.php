<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Post;
use App\Category;
use App\User;
use DB;



class PostsController extends Controller
{

    public function __construct()
    {
        $show_items = array('index','show','cat_posts','search');//Show  these methods without auth
        $this->middleware('auth',['except' => $show_items]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $posts = Post::orderBy('created_at','desc')->paginate(4);
        $categories = Category::withCount('posts')->get();
        return view("posts.index")->with('posts',$posts)->with('categories',$categories);
                                                        
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::take(4)->get();
        return view("posts.create")->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'post_title' => 'required',
                'post_body'  => 'required',
                'categories_id'=> 'required',
                'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle file uploads
        if($request->hasFile('cover_image')){
        //Get file name with the extension
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //Get just extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //Upload image
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        } else {
        $fileNameToStore = 'noimage.jpg';
        }

        //Create post
        //dd($request->all());
        $post = new Post;
        $post->post_title = $request->post_title;
        $post->post_body =  $request->post_body;
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->categories_id =  $request->categories_id;
        //$post->slug = Str::slug($request->post_title);
    
        $post->save();

        return redirect('/')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $categories = Category::take(4)->get();
        return view('posts.show')->with('post',$post)->with('categories',$categories);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
         //Checking for correct user
         if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'post_title' => 'required',
            'post_body'  => 'required',
            'categories_id'=> 'required'
    ]);

    //Handle file uploads
    if($request->hasFile('cover_image')){
        //Get file name with the extension
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //Get just extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //Upload image
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        } 

    //Update post
    //dd($request->all());
    $post = Post::find($id);
    $post->post_title = $request->post_title;
    $post->post_body =  $request->post_body;
    $post->categories_id =  $request->categories_id;
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
    $post->save();

    return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

         //Checking for correct user
         if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        if($post->cover_image !== 'noimage.jpg'){
        //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');
    }

    public function cat_posts($cat_name = null)
    {
            $posts = Post::orderBy('created_at','desc')->where('categories_id', $cat_name)->paginate(3);
            $categories = Category::withCount('posts')->get();
            return view("posts.index")->with('posts',$posts)
                                            ->with('categories',$categories)
                                            ->with("cat_id",$cat_name);

    }

    public function search()
    {
        $posts = Post::where('post_title','like', '%' . request('query') . '%')->get();
        return view('results')->with('posts',$posts)
                            ->with('categories',\App\Category::take(4)->get())
                            ->with('query',request('query'));

    }
}
