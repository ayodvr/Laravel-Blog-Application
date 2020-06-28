@extends('layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end">
  <div class="col-md-9 ftco-animate pb-5">
      <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
    <h1 class="mb-0 bread">Services</h1>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center pb-5 mb-3">
  <div class="col-md-7 heading-section text-center ftco-animate">
    <h2>We can help you in different situations</h2>
    <span class="subheading">We offer Services</span>
  </div>
</div>
    <div class="row">
  <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
    <div class="d-block text-center">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-goal"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">Career &amp; Business</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>      
  </div>
  <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
    <div class="d-block text-center">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-stress"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">Mental &amp; Physical Care</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>    
  </div>
  <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
    <div class="d-block text-center">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-crm"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">People &amp; Relationships</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>      
  </div>
  <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
    <div class="d-block text-center">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-marriage"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">Life coaching</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>      
  </div>
</div>
</div>
</section>


<section class="ftco-section bg-light">
<div class="container">
    <div class="row justify-content-center pb-5 mb-3">
  <div class="col-md-7 heading-section text-center ftco-animate">
    <h2>Why coaching work?</h2>
    <span class="subheading">Other Services</span>
  </div>
</div>
    <div class="row d-flex no-gutters">
        <div class="col-md-6 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
                <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
        <div class="col-md-6 pl-md-5 py-md-5">
            <div class="services-2 w-100 d-flex">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
                <div class="text pl-4">
                    <h4>Accountability</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="services-2 w-100 d-flex">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
                <div class="text pl-4">
                    <h4>Expertise</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="services-2 w-100 d-flex">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
                <div class="text pl-4">
                    <h4>Speed</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="services-2 w-100 d-flex">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-event"></span></div>
                <div class="text pl-4">
                    <h4>Delivery</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
    </div>
</div>
</div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="bg-secondary w-100 rounded p-4">
            <div class="row">
              <div class="col-md-7 d-flex align-items-center">
                <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 18px;">Subcribe for our weekly tips</h2>
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
          </div>
          </div>
        </div>
      </div>
</div>
</section>
@endsection