@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="margin-top:10px">
                <div>
                    <a href="posts/create" class ="btn btn-primary">Create Post</a>
                    <a href="categories/create" class ="btn btn-info pull-right">Create Category</a>
                </div>
                <div></div>
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div id="blog" class="row"> 
                            <div class="col-sm-2 paddingTop20">
                                <nav class="nav-sidebar">
                                    <ul class="nav">
                                        <li class="active"><a href="javascript:;">All Posts</a></li>
                                        <li class="nav-divider"></li>
                                    </ul>
                                </nav>
                            </div>
                           <div class="col-md-10 blogShort"> 
                           @if(count($myposts) > 0)
                                @foreach ($myposts as $post)
                                   <div>
                                    <h3>{{$post['post_title']}}</h3>
                                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                                        
                                            <em>Written {{$post['created_at']->diffForHumans()}}<a target="_blank"> by {{$post->user->name}}  </a></em>
                    
                                        <a class="btn btn-xs btn-primary pull-right marginBottom20" href="/posts/{{$post->id}}">READ MORE</a>
                                   </div>
                                        <br>
                                        <hr style="margin-bottom:10px">
                                @endforeach    
                            @else
                               <h1>Oops! You have no post.</h1> 
                            @endif  
                        </div>         
                        </div>
            </div>
            {{$myposts->links()}}
        </div>
    </div>
</div>
</div>
@endsection
