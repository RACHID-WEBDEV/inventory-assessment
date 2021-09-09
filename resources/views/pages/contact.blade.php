@extends('layouts.master')
@section('content')
	 	<!-- Breadcroumb Area -->

		 <div class="breadcroumb-area bread-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcroumb-title">
							<h1>Contact</h1>
							<h6><a href="/">Home</a> / Contact</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
   
		<!-- Contact Area -->
   
		<div id="contact-us" class="contact-us-area section-padding">
			<div class="container">
				<div class="contact-us-wrapper">
					<div class="row no-gutters">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="contact-us-inner">
								<div class="info-i"><span><i class="las la-map-marker"></i></span></div>
								<h5>Location</h5>
								<p>2, Tokunbo Alli Street,<br> Off Toyin Street Ikeja Lagos</p>
								<a href="#">Find us on map</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="contact-us-inner">
								<div class="info-i"><span><i class="las la-clock"></i></span></div>
								<h5>Office Hour</h5>
								<p>Monday-Friday <br>08.00am-06.00pm</p>
								<a href="#">Get Direction</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="contact-us-inner">
								<div class="info-i"><span><i class="las la-mobile"></i></span></div>
								<h5>Phone Number</h5>
								<p>+234-8030428610</p><br>
								<a href="tel:08030428610">Call Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="contact-us-inner">
								<div class="info-i"><span><i class="las la-envelope"></i></span></div>
								<h5>E-mail Address</h5>
								<p>info@neitoenergy.com</p><br>
								<a href="mailto:info@neitoenergy.com">Mail Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   
   
		<!-- Contact Form -->
   
				  <div class="quotation-section sky-bg section-padding">
			   <div class="container">
				   <div class="row">
					   <div class="col-lg-8 offset-lg-2 text-center">
						   <div class="section-title">
							    <!-- <h2> Always at your <b>Service</b></h2> -->
							   <h2>Send Us A <b>Message</b></h2>
						   </div>
					   </div>
				   </div>
				   <div class="quotation-block">
						<form class="quotation-form" action="{{url('contactadd')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
					 
						   <div class="row">
							   <div class="col-lg-4 col-sm-6">
								   <div class="form-group">
									   <label for="name">Name</label>
									   <input type="text" class="form-control" name="name" placeholder="Full Name" required>
									</div>
							   </div>
							   <div class="col-lg-4 col-sm-6">
								   <div class="form-group">
									   <label for="email">Email</label>
									   <input name="email" type="email" class="form-control"  placeholder="Email" required>
								   </div>
							   </div>
							   <div class="col-lg-4">
								   <div class="form-group">
									   <label for="phone">Phone No.</label>
									   <input type="number" class="form-control" name="phone" placeholder="Phone No." required>
								   </div>
							   </div>
						   </div>
						   <div class="row">
							   <div class="col-lg-8">
								   <div class="form-group">
									   <label>Write a Message</label>
									   <textarea name="comment" required cols="30" rows="5" placeholder="Enter Your Message..."></textarea>
								   
								   </div>
							   </div>
							   <div class="col-lg-4">
								   <div class="form-group">
									   <label>Location</label>
									   <div class="form-group">
										   <div class="row no-gutters">
											   <div class="col-lg-12">
												   <input name="location" type="text" class="form-control" placeholder="Location" required>
											   </div>
										   </div>
									   </div>
								   </div>
								   <div class="request-button">
									   <button type="submit" class="main-btn">Send Message<i class="las la-arrow-right"></i></button>
								   </div>
							   </div>
						   </div>
					   
					   </form>
					   <div class="quotation-dtl text-white">
						   <p><i class="las la-mobile"></i>We are available at Our Filling Station Every Days of Week </p>
					   </div>
				   </div>
			   </div>
		   </div>
	  
   
@endsection