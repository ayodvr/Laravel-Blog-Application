@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Stories <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Successful Stories</h1>
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
          <div class="img" style="background-image: url(/storage/cover_images/{{$post->cover_images}});"></div>
          <div class="text pl-md-5">
            <h4>Story About: <span>John Doe</span></h4>
            <p>{{$post->post_title}}</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
        @endforeach
      </div>
     
      @endif
      <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Categories</h3>
            
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Recent Blog</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <div class="tagcloud">
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->
@endsection
<div class="col-lg-2 sidebar pl-md-5 ftco-animate">
  <div class="sidebar-box">
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
</div>