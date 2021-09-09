@extends('layouts.master')
@section('content')
	<!-- Breadcroumb Area -->

	<div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						<h1>Blog-Details</h1>
						<h6><a href="/blog">Back to Blog</a> / Single Blog </h6> 
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Blog Area  -->

	<div id="blog-page" class="blog-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-blog-wrap">
						<img src="/storage/images/{{$post->image}}" alt="Blog details Image">
						<div class="blog-meta">
							<span><i class="las la-user"></i>Admin</span>
							<span><i class="las la-calendar"></i>{{ $post->created_at->format('M d Y') }}</span>
							{{-- <span><i class="las la-comments"></i>2 Comments</span> --}}
						</div>
						<h3>{{$post->title}}</h3>
						<p>{!!$post->body!!}	</p>
						
					</div>
					
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
					@if (Route::has('login'))
						@auth
					<div class="popular-tag">
						<h5>Manage Post</h5>
								
						<span ><a href="{{ route('blog.edit', $post->slug) }}"><button class="btn btn-success" type="submit">EDIT - POSTS</button></a></span>
						
						<form action="{{route('blog.destroy', $post->id)}}" method="post" enctype="multipart/form-data" >
							{{ csrf_field() }}
						@method('DELETE')
						<span><a href="#!"><button class="btn btn-danger" type="submit">DELETE-POST</button></a></span>
						</form> 
					
					
					
						
					</div>
					@endif
						@endif
					
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


