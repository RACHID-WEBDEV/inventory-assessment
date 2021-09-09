
@extends('layouts.master')
@section('title')
    Search Post
@endsection
<?php 
//$categories = App\Models\Category::all();
?>
@section('content')
  	<!-- Breadcroumb Area -->

	  <div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						
						 <h1>Search Result: {{$query}} </h1> 
						<h6><a href="/">Home</a> / Blog</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog Area  -->


	

	<div id="blog-page" class="blog-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					@if(count($posts)> 0)
						@foreach ($posts as $post)
					<div class="single-blog-item">
						<div class="blog-bg">
							<a href="/blog/{{$post->slug}}" class="item_image">
								<img src="/storage/images/{{$post->image}}" alt="image_not_found">
							</a>
						</div>
						<div class="blog-content">
							<p class="blog-meta"><i class="las la-user-circle"></i>Admin | <i class="las la-calendar-check"></i>{{ $post->created_at->format('d') }} <span>{{ $post->created_at->format('M') }}</span></p>
							<a href="/blog/{{$post->slug}}">{{$post->title}}</a>
							<p>	{!! \Illuminate\Support\Str::limit($post->body, 150, "...")!!}		</p>
							<a href="/blog/{!!$post->slug!!}" class="read-more">Read More</a>
							<div>
								<i class="las la-heart"></i>20 |
								<i class="las la-comments"></i>9
							</div>
						</div>
					</div>
					@endforeach
			
					@else
					<h2 style="text-align: center">Oops..., <span style="color:crimson"> No Posts Found!</span></h2>
					@endif
				
			

				
				</div>
				
				
				
		
		
	
				<div class="col-lg-4">
					<div class="blog-search">
						<form action="/search" method="get">
							<input type="text" name="query" placeholder="Search Posts..."/>
							<button type="submit"><i class="las la-search"></i></button>
						</form> 

					</div>
					<div class="blog-category">
						<h5>Categories</h5>
						@if(count($categories)> 0)
						@foreach($categories as $category) 
						<a class="active" href="/blog/category/{{$category->id}}"><span>{{$category->cat_description }} ({{$cat_count[$category->id]}})</span></a>
						
						@endforeach
						@endif   
						
					</div>
					
				
									
					<div class="recent-post">
						<h5>Recent Post</h5>
						@if(count($postts)> 0)
						@foreach ($postts as $postt)
						{{-- <a href="{{$postt->slug}}" > --}}
							<img src="/storage/images/{{$postt->image}}" alt="Blog image">
						{{-- </a> --}}
						<div class="single-recent-post">
							<h6><a href="/blog/{{$postt->slug}}">{{$postt->title}}</a></h6>
							<p class="blog-date"><i class="las la-calendar"></i>{{ $postt->created_at->format('M d Y') }}</p>
						</div>
						@endforeach
       
						@endif
						
					</div>
				
					
					<div class="helpline-section">
						<div class="overlay-2"></div>
						<div class="helpline-content text-center">
							<p>Providing The Energy You Need</p>
							<h4>Need Consultancy Help</h4>
						
							<a href="/contact"><button type="submit"> Contact Us</button></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		

@endsection