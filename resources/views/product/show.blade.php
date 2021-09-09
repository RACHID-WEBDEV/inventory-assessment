@extends('layouts.master')
@section('content')
	<!-- Breadcroumb Area -->

	<div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						<h1>Product-Details</h1>
						<h6><a href="/product">Back to Product</a> / Single Product </h6> 
						
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
						<img src="/storage/images/{{$product->image}}" alt="Blog details Image">
						<div class="blog-meta">
							<span><i class="las la-user"></i>Admin</span>
							<span><i class="las la-calendar"></i>{{ $product->created_at->format('M d Y') }}</span>
							{{-- <span><i class="las la-comments"></i>2 Comments</span> --}}
						</div>
						<h3>{{$product->name}}</h3>
						<p>{!!$product->description!!}	</p>
						
					</div>
					
				</div>
				<div class="col-lg-4">
					{{-- <div class="blog-search">
						<form action="/search" method="get">
							<input type="text" name="query" placeholder="Search Products..."/>
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
					@if (Route::has('login'))
						@auth
					<div class="popular-tag">
						<h5>Manage Product</h5>
								
						<span ><a href="{{ route('product.edit', $product->slug) }}"><button class="btn btn-success" type="submit">EDIT PRODUCT</button></a></span>
						
						<form action="{{route('product.destroy', $product->id)}}" method="post" enctype="multipart/form-data" >
							{{ csrf_field() }}
						@method('DELETE')
						<span><a href="#!"><button class="btn btn-danger" type="submit">DELETE-PRODUCT</button></a></span>
						</form> 
					
					
					
						
					</div>
					@endif
						@endif
					
					
				</div>
			</div>
		</div>
	</div>
			
@endsection


