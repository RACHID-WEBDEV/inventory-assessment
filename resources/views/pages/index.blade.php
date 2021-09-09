@extends('layouts.master')

   @section('content')
        <!-- Hero Area -->

    <div class="homepage-slides owl-carousel">
        <div class="single-slide-item">
            <div class="overlay"></div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                            <div class="section-title">
                                <h6>Welcome to Neito Energy</h6>
                                <h1> Keeping <b>Nigerians</b> on <br>the move <b>Everyday</b></h1>
                               <p class="section-title-text">We are committed in making life better for our customers by delivering<br> highest quality Petroleum products and services at their convenience.</p>
                           </div>
                            <a href="/about" class="main-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item hero-area-bg-2">
            <div class="overlay"></div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                            <div class="section-title">
                                <h6>Fueling The Future</h6>
                                <h1>We are leading <br> <b> Crude Oil</b> Retailer </h1> 
                                <!-- <p> Fuel Revolution, in modern history, the process of change from an agrarian and handicraft economy to one dominated by fuel and refueling services.</p> -->
                               <p class="section-title-text">We operate all over Nigeria to source and supply fuel to our Customers<br> through Satisfactory Services and Professionalism
                               </p>
                           </div>
                            <a href="/contact" class="main-btn">Contact Us</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

 

    <!-- Promo Area -->

    <div class="promo-area">
       <div class="promo-wrapper">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-3 col-sm-6">
                       <div class="single-counter-box wow fadeInLeft" data-wow-delay=".2s">
                           <p class="counter-number"><span>147.00</span></p>
                           <p class="qty">ltr</p>
                           <h6>Petrol</h6>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6">
                       <div class="single-counter-box wow fadeInLeft" data-wow-delay=".4s">
                           <p class="counter-number"><span>210.00</span></p>
                           <p class="qty">ltr</p>
                           <h6>Diesel</h6>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6">
                       <div class="single-counter-box wow fadeInLeft" data-wow-delay=".6s ">
                           <p class="counter-number"><span>180.00</span></p>
                           <p class="qty">ltr</p>
                           <h6>Kerosene</h6>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6">
                       <div class="single-counter-box wow fadeInLeft" data-wow-delay=".8s">
                           <p class="counter-number"><span>320.50</span></p>
                           <p class="qty">ltr</p>
                           <h6>Gas</h6>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>


       <!-- About Section -->

       <div class="about-area sky-bg section-padding pt-120">
           <div class="container">
               <div class="row no-gutters">
                   <div class="col-lg-5">
                       <div class="mt-10"></div>
                       <div class="about-bg-wrapper wow fadeInUp" data-wow-delay=".2s">
                           <div class="about-bg-innner bg-cover"></div>
                       </div>
                   </div>
                   <div class="col-lg-7">
                       <div class="about-content-wrapper wow fadeInUp" data-wow-delay=".4s">
                           <div class="section-title">
                               <h6>About Us</h6>
                               <h2>We're the Top <br><b>Petroleum Products </b> Supply and Trading</h2>
                           </div>
                           {{-- <p>Our Medium And Long Term Objective Is To Strengthen And Enhance Our Market Share In The Retail Marketing Of Petroleum Products, Supply and distribution to end-users and industries</p> --}}
                           <p>Neito Energy Limited is owned and managed by young, talented and vibrant Nigerians with main business focus on supply and distribution of petroleum products, supply and trading of products and provision of Logistic services across Nigeria.
                        </p>
                           <div class="row">
                               <div class="col-lg-6 col-md-6 col-12">
                                   <div class="key-feature">
                                       <div class="row no-gutters">
                                           <div class="col-lg-4">
                                               <div class="about-icon">
                                                   <img src="assets/img/icon/oil.png" alt="">
                                               </div>
                                           </div>
                                           <div class="col-lg-12">
                                               <h4>100% Pure Oil</h4>
                                               <p>Products Retailing at Depots & Service retail Outlets</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-6 col-md-6 col-12">
                                   <div class="key-feature">
                                       <div class="row no-gutters">
                                           <div class="col-lg-4">
                                               <div class="about-icon">
                                                   <img src="assets/img/icon/gauge.png" alt="">
                                               </div>
                                           </div>
                                           <div class="col-lg-12">
                                               <h4>Accurate Meter</h4>
                                               <p>Top Notch Accurate Metering  of Products </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <hr>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  
       <!-- Service Area -->
  
       <div id="service-2" class="service-area gray-bg section-padding">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center ">
                       <div class="section-title">
                           <h6>Industry Leaders</h6>
                           <!-- <h2>We Provide <b>Fuel</b> Service <br> all type of <b>vehicles</b></h2> -->
                           <h2>We are <b>Leading</b> Operator of <b>Petroleum Products</b> and services</h2>
                       </div>
                   </div>
               </div>
               <div class="row no-gutters">
                   <div class="col-lg-6 col-md-12 col-sm-12">
                       <div class="single-service-wrapper">
                           <div class="row no-gutters mt-30">
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-bg bg-cover">
                                   </div>
                               </div>
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-area">
                                       <div class="service-icon">
                                           <i class="flaticon-petrol"></i>
                                       </div>
                                       <h5>Petroleum Trading</h5>
                                       <p>supply and trading of products both in the local and regional market</p>
                                       <a href="/services/petroleum-trading" class="read-more">Read More</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-12 col-sm-12">
                       <div class="single-service-wrapper">
                           <div class="row no-gutters mt-30">
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-bg service-bg-2 bg-cover">
                                   </div>
  
                               </div>
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-area">
                                       <div class="service-icon">
                                           <i class="flaticon-diesel"></i>
                                       </div>
                                       <h5>Products Retailing</h5>
                                       <p>Sales of refined products at the depot on the basis of open market.</p>
                                       <a href="/services/products-retailing" class="read-more">Read More</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
  
               <div class="row no-gutters">
                   <div class="col-lg-6 col-md-12 col-sm-12">
                       <div class="single-service-wrapper">
                           <div class="row no-gutters mt-30">
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-area">
                                       <div class="service-icon">
                                           <i class="flaticon-gasoline"></i>
                                       </div>
                                       <h5>Petroleum Marketing</h5>
                                       <p>Supply and distribution of Automotive Gas Oil and fuel oil to end users </p>
                                       <a href="/services/petroleum-marketing" class="read-more">Read More</a>
                                   </div>
                               </div>
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-bg service-bg-3 bg-cover">
                                   </div>
  
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-12 col-sm-12">
                       <div class="single-service-wrapper">
                           <div class="row no-gutters mt-30">
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-area">
                                       <div class="service-icon">
                                           <img src="assets/img/icon/truck.png" alt="Logistics" srcset="">
                                           <!-- <i class="flaticon-charging-station"></i> -->
                                       </div>
                                       <h5>Logistics</h5>
                                       <p>Offers a reliable storage transport, and logistics service for commercial</p>
                                       <a href="/services/logistics" class="read-more">Read More</a>
                                   </div>
                               </div>
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-service-bg service-bg-4 bg-cover">
                                   </div>
  
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  
  
       <!--Achievement Section-->
  
       <div class="achievement-area">
           <div class="overlay-2"></div>
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="single-counter-box mt-20 wow fadeInLeft" data-wow-delay=".2s">
                           <p class="counter-number"><span>8000</span>+</p>
                           <h6>Peoples Serving Daily </h6>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="single-counter-box mt-20 wow fadeInLeft" data-wow-delay=".4s">
                           <p class="counter-number"><span>32</span></p>
                           <h6>Service Stations </h6>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="single-counter-box mt-20 wow fadeInLeft" data-wow-delay=".6s ">
                           <p class="counter-number"><span>17</span></p>
                           <h6>States Covered</h6>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="single-counter-box mt-20 wow fadeInLeft" data-wow-delay=".8s">
                           <p class="counter-number"><span>11</span>+</p>
                           <h6>Years in Service </h6>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  
       <!-- Extra Service -->
  
       <div id="xtra" class="xtra-service-wrap section-padding">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center ">
                       <div class="section-title">
                           <h6>We Also Do</h6>
                           <h2>More <b>Additional</b> Service in <br>Our Filling Station</h2>
                       </div>
                   </div>
               </div>
  
               <div class="row">
                   <div class="col-lg-3 col-md-6 col-sm-12 ">
                       <div class="xtra-serve-area mt-50 wow fadeInLeft" data-wow-delay=".3s">
                           <img src="assets/img/feature.png" alt="">
                           <h5>Car Evacaution</h5>
                           <a href="/services/additional-service" class="read-more">Read More</a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="xtra-serve-area mt-50 bg-cover wow fadeInLeft" data-wow-delay=".4s">
                           <img src="assets/img/Lubricants.png" alt="">
                           <h5>Lubricants Oils Sales</h5>
                           <a href="/services/additional-service" class="read-more">Read More</a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="xtra-serve-area mt-50 bg-cover wow fadeInRight" data-wow-delay=".4s">
                           <img src="assets/img/xtra/03.jpg" alt="">
                           <h5>Wheels Pumping</h5>
                           <a href="/services/additional-service" class="read-more">Read More</a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="xtra-serve-area mt-50 bg-cover wow fadeInRight" data-wow-delay=".3s">
                           <img src="assets/img/xtra/04.jpg" alt="">
                           <h5>Engine Repair</h5>
                           <a href="/services/additional-service" class="read-more">Read More</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    
    
        <!--CTA Section-->

        <div id="cta-2" class="cta-area">
           <div class="overlay-2"></div>
           <div class="container">
               <div class="row">
                   <div class="col-lg-5 col-md-8 col-12 wow fadeInUp" data-wow-delay=".3s">
                       <h6>24/7 We Are Here</h6>
                       <h2>Get a Free Quotation with our Expert</h2>
                   </div>
                   <div class="col-lg-6 offset-lg-1 col-md-4 text-right wow fadeInUp" data-wow-delay=".4s">
                       <div class="contact-info">
                           <a href="/contact" class="main-btn small-btn">Contact Us</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>

    <!-- Blog Section-->

    <div class="blog-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="section-title">
                        <h6>Blog</h6>
                        <h2>Latest <b>News</b> & <b>Blogs</b></h2>
                    </div>
                </div>

                <div class="col-lg-6 text-right">

                </div>
            </div>
            <div class="row">
                @if(count($posts)> 0)
                    @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog-item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="blog-bg">
                            <a href="/blog/{{$post->slug}}" class="item_image">
								<img src="/storage/images/{{$post->image}}" alt="Neito Energy Blog Image">
							</a>
                            {{-- <img src="assets/img/blog/1.jpg" alt=""> --}}
                        </div>
                        <div class="blog-content">
                            <p class="blog-meta"><i class="las la-user-circle"></i>Admin | <i class="las la-calendar-check"></i>{{ $post->created_at->format('d') }} <span>{{ $post->created_at->format('M') }}</p>
                            <h5> <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
                            </h5>
                           
							<p>	{!! \Illuminate\Support\Str::limit($post->body, 145, "...")!!}		</p>
                            <a href="/blog/{!!$post->slug!!}" class="read-more">Read More</a>
                        </div>

                    </div>
                </div>
                @endforeach
			
				@endif
               
            </div>
        </div>
    </div>

    <!-- Client Section -->

    <div class="client-area pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-carousel owl-carousel">
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/1.png" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/2.png" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/3.png" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/4.png" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/5.png" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/6.png" alt="">
                            </div>
                        </div>
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="assets/img/client/7.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection






