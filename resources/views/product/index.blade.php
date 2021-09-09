@extends('layouts.master')

@section('content')
 	<!-- Breadcroumb Area -->

 	<div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						
						@if(isset($cat_title) && $cat_title != "") <h1 class="page_title">{{$cat_title}}</h1> @else <h1> Our Products</h1> @endif
						<h6><a href="/">Home</a> / Product</h6>
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
							<a href="/product/{{$product->slug}}" class="item_image">
								<img src="/storage/images/{{$product->image}}" alt="Inventory Image">
							</a>
						</div>
						<div class="blog-content">
							<p class="blog-meta"><i class="las la-user-circle"></i>Admin | <i class="las la-calendar-check"></i>{{ $product->created_at->format('d') }} <span>{{ $product->created_at->format('M') }}</span></p>
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
				&nbsp;
				{!! $products->links() !!}

				
				</div>
				
				
				
		
		
	
				<div class="col-lg-4">
					{{-- <div class="blog-search">
						<form action="/search" method="get">
							<input type="text" name="query" placeholder="Search Posts..."/>
							<button type="submit"><i class="las la-search"></i></button>
						</form> 

					</div> --}}
					<div class="blog-category">
						<h5>Categories</h5>
						@if(count($categories)> 0)
						@foreach($categories as $category) 
						<a class="active" href="/product/category/{{$category->id}}"><span>{{$category->cat_description }} ({{$cat_count[$category->id]}})</span></a>
						
						@endforeach
						@endif   
						
					</div>
					
				
									
					<div class="recent-post">
						<h5>Recent Products</h5>
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


