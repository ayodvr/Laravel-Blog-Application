@extends('layouts.frontend')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/storage/resized-news-banner.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end">
  <div class="col-md-9 ftco-animate pb-5">
      <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Back <i class="ion-ios-arrow-forward"></i></a></span> <span><i class="ion-ios-arrow-forward"></i></span></p>
  <h1 class="mb-0 bread">Search results {{$query}}</h1>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
<div class="row">
  @if(count($posts) > 0)
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
  </div>
  @else
    <h1 class="text-center">No post found!</h1>
  @endif 
</section>
@endsection
