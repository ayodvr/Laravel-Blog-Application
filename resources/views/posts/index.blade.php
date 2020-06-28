@extends('layouts.frontend')
@section('content')

<?php

$cat_desc = "";
if(isset($cat_id) && $cat_id != ""){
$cat_item = App\Category::findorfail($cat_id);
$cat_desc = $cat_item['description'];
}

?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/resized-news-banner.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end">
  <div class="col-md-9 ftco-animate pb-5">
      <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Back <i class="ion-ios-arrow-forward"></i></a></span> <span><i class="ion-ios-arrow-forward"></i></span></p>
    <h1 class="mb-0 bread">@if(isset($cat_id) && $cat_id != "") {{$cat_desc}} Posts  @endif</h1>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
<div class="row">
  @if(!empty($posts))
  <div class="col-lg-8 ftco-animate">
    @foreach($posts as $post)
    <div class="story-wrap d-md-flex align-items-center">
      <div class="img" style="background-image: url('/storage/cover_images/{{$post->cover_image}}');"></div>
      <div class="text pl-md-5">
        <h4><span>{{$post->post_title}}</span></h4>
      <p><a href="/posts/{{$post->id}}" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
    @endforeach
    {{$posts->links()}}
  </div>
  @endif  

<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
  <div class="sidebar-box">
    <form method="GET" action="/results" class="search-form">
      <div class="form-group">
        <span class="fa fa-search"></span>
        <input type="text" class="form-control" name="query" placeholder="Type a keyword and hit enter">
      </div>
    </form>
  </div>
  <div class="sidebar-box ftco-animate">
    <div class="categories">
      @if(!empty($categories))
      <h3>Categories</h3>
        @foreach($categories as $cat)
        <li>
          <a href="/posts/all/{{$cat->id}}">{{$cat->description}} - ({{$cat->posts_count}})</a>
          </li>
          @endforeach
        </div>
       @endif
    </div>
  </div>
</section>
@endsection
