@extends('layouts.master')
@section('title')
    Personal Post
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
								
								 <h1> My Product Post  </h1> 
								<h6><a href="/blog">Blog</a> / My Product Posts</h6>
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
							@if(count($products)> 0)
								@foreach ($products as $product)
							<div class="single-blog-item">
								<div class="blog-bg">
									<a href="/blog/{{$product->slug}}" class="item_image">
										<img src="/storage/images/{{$product->image}}" alt="image_not_found">
									</a>
								</div>
								<div class="blog-content">
									<a href="/product/{{$product->slug}}">{{$product->name}}</a>
							<br>
							<p> Price: <a href="#" >{{ $product->price }} </a></p>
							<p>	{!! \Illuminate\Support\Str::limit($product->description, 150, "...")!!}		</p>
							<a href="/product/{!!$product->slug!!}" class="read-more">Read More</a>

									<div>
										<i class="las la-heart"></i>20 |
										<i class="las la-comments"></i>9
									</div>
								</div>
							</div>
							@endforeach
					
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
								<a class="active" href="/product/category/{{$category->id}}"><span>{{$category->cat_description }} ({{$cat_count[$category->id]}})</span></a>
								
								@endforeach
								@endif   
								
							</div>
							
						
											
							<div class="recent-post">
								<h5>Recent Product</h5>
								@if(count($productts)> 0)
								@foreach ($productts as $productt)
								{{-- <a href="{{$productt->slug}}" > --}}
									<img src="/storage/images/{{$productt->image}}" alt="Blog image">
								{{-- </a> --}}
								<div class="single-recent-post">
									<h6><a href="/product/{{$productt->slug}}">{{$productt->name}}</a></h6>
									<p class="blog-date"><i class="las la-calendar"></i>{{ $productt->created_at->format('M d Y') }}</p>
								</div>
								@endforeach
			   
								@endif
								
							</div>
						
							
						
						</div>
					</div>
				</div>
			</div>

@endsection