    @extends('layouts.app')
    @section('content')
    <div class="hero-wrap">
		@if(!empty($posts))
	    <div class="home-slider owl-carousel">
			@foreach($posts as $post)
		<div class="slider-item" style="background-image:url('/storage/cover_images/{{$post->cover_image}}');">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-10 ftco-animate">
		          	<div class="text w-100 text-center">
					  <h1 class="mb-4">{{$post->post_title}}</h1>
					  <p><a href="/posts/{{$post->id}}" class="btn btn-blog">Read More</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
		  </div>
		  @endforeach
		</div>
		@endif
	  </div>
	  <section class="ftco-section">
		<div class="container">
			@if(count($posts) > 0)
			<div class="row d-flex">
				@foreach($posts as $blog)
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					<a href="/posts/{{$blog->id}}" class="block-20 rounded" style="background-image: url('/storage/cover_images/{{$blog->cover_image}}');">
					  </a>
					  <div class="text mt-3">
						  <div class="meta mb-2">
						  <div><a>{{$blog->created_at->toFormattedDateString()}}</a></div>
						  <div><a>by {{$blog->user->name}}</a></div>
						  {{-- <div><a class="meta-chat"><span class="fa fa-comment"></span></a></div> --}}
						</div>
						<h1 class="heading"><a href="/posts/{{$blog->id}}">{{$blog->post_title}}</a></h1>
					  </div>
					</div>
				</div>
				@endforeach
			</div>
			@endif
			{{$posts->links()}}
		</div>
	  </section>
 @endsection
    

