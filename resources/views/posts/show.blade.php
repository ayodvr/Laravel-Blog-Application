@extends('layouts.app')
@section('content')
  <section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/resized-news-banner.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
  <div class="row no-gutters slider-text align-items-end">
    <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Back <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#"> <i class="ion-ios-arrow-forward"></i></a></span><span><i class="ion-ios-arrow-forward"></i></span></p>
    </div>
  </div>
  </div>
  </section>

  <section class="ftco-section ftco-degree-bg">
  <div class="container">
  <div class="row">
    <div class="col-md-8 ftco-animate">
      <em>Published {{$post['created_at']->toFormattedDateString()}}<a target="_blank"> by <b>{{$post->user->name}} </b> </a></em>
      <h1 class="mb-3">{{$post->post_title}}</h1>
      <p>
        <img src="/storage/cover_images/{{$post->cover_image}}" style ="width:100%" alt="" class="img-fluid">
      </p>
      <p>{!! $post->post_body !!}</p>
    </div> <!-- .col-md-8 -->
  </div> 
  </div>
  </section> <!-- .section -->
  <hr>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="margin-left:10vpx">Edit</a>
          {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('DELETE', ['class' =>'btn btn-danger'])}}
          {!! Form::close()!!}
    @endif
  @endif
@endsection