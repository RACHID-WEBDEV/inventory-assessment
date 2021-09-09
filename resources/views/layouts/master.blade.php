<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Inventory Management </title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    	<!--Favicon-->
 	<link rel="icon" href="/assets/img/favicon.png" type="image/jpg" />
 	<!-- Bootstrap CSS -->
 	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
 	<!-- Font Awesome CSS-->
 	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
 	<!-- Line Awesome CSS -->
 	<link href="/assets/css/line-awesome.min.css" rel="stylesheet">
 	<!-- Animate CSS-->
 	<link href="/assets/css/animate.css" rel="stylesheet">
 	<!-- Bar Filler CSS -->
 	<link href="/assets/css/barfiller.css" rel="stylesheet">
 	<!-- Flaticon CSS -->
 	<link href="/assets/css/flaticon.css" rel="stylesheet">
 	<!-- Owl Carousel CSS -->
 	<link href="/assets/css/owl.carousel.css" rel="stylesheet">
 	<!-- Style CSS -->
 	<link href="/assets/css/style.css" rel="stylesheet">
 	<!-- Responsive CSS -->
 	<link href="/assets/css/responsive.css" rel="stylesheet">

 	<!-- jquery -->
 	<script src="/assets/js/jquery-1.12.4.min.js"></script>
 	
 	<style>
 	

button {
  padding: 0;
  border: none;
  outline: 0;
  cursor: pointer;
  font-size: 16px;
  background-color: transparent;
}

button:focus {
  outline: none;
}

a {
  text-decoration: none;
}

.contact-wrapper {
  position: fixed;
  right: 0;
  bottom: 80px;
  transform: translateX(100%);
  -webkit-transition: transform .4s ease-in-out;
  transition: transform .4s ease-in-out;
}

 .contact-wrapper.contact-wrapper--open {
   transform: translateX(-10px);
}

.contact-panel {
  background-color: #fff;
  border: 1px solid #7fc00b;
  max-width: 500px;
  border-radius: 4px;
  width: 100%;
  position: relative;
}

.contact-panel ul {
  list-style-type: none;
  padding: 15px;
  margin: 0;
  text-align: center;
}

.contact-panel ul li {
  margin: 0 10px;
  display: inline-block;
}

.contact-panel ul li a {
  border-radius: 50%;
  color: #7fc00b;
  height: 50px;
  width: 50px;
  display: inline-block;
  line-height: 50px;
  text-decoration: none;
  box-shadow: 0 1px 2px 1px rgba(170, 170, 170, 0.2);
  -webkit-transition: box-shadow .4s ease-in-out;
  transition: box-shadow .4s;
}

.contact-panel ul li a:hover {
  box-shadow: 0 2px 5px 1px rgba(170, 170, 170, 0.6);
}

.contact-panel ul li a i {
  font-size: 20px;
  line-height: 50px;
}

.contact-panel__header {
  position: relative;
  background-color:#7fc00b;
  color: #fff;
  font-size: 21px;
  line-height: 16px;
  padding: 15px;
  text-align: center;
  margin: 0;
}

.contact-close {
  border: 0;
  color: #ccc;;
  position: absolute;
  top: 0;
  right: 10px;
  line-height: 48px;
}

.contact-close:focus {
  outline: none;
}

.contact-button {
  border: 0;
  background-color: #7fc00b;
  color: #fff;
  cursor: pointer;
  padding: 8px 16px;
  -webkit-transition: background-color .4s ease-in-out;
  transition: background-color .4s ease-in-out;
  font-size: 16px;
  line-height: 20px;
  position: fixed;
  bottom: 10px;
  right: 10px;
  border-radius: 4px;
}

.contact-button:hover {
  background-color: #e47203;
}
 	</style>



</head>

<body>

    <!-- Pre-Loader -->
    <div id="loader">
        <div class="loading">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('layouts.header')

    @include('inc.message')


    @yield('content')


    {{-- @include('layouts.footer') --}}


  

   
 	<!-- Popper JS -->
 	<script src="/assets/js/popper.min.js"></script>
 	<!-- Bootstrap JS -->
 	<script src="/assets/js/bootstrap.min.js"></script>
 	<!-- Wow JS -->
 	<script src="/assets/js/wow.min.js"></script>
 	<!-- Way Points JS -->
 	<script src="/assets/js/jquery.waypoints.min.js"></script>
 	<!-- Counter Up JS -->
 	<script src="/assets/js/jquery.counterup.min.js"></script>
 	<!-- Owl Carousel JS -->
 	<script src="/assets/js/owl.carousel.min.js"></script>
 	<!-- Magnific Popup JS -->
 	<script src="/assets/js/magnific-popup.min.js"></script>
 	<!-- Sticky JS -->
 	<script src="/assets/js/jquery.sticky.js"></script>
 	<!-- Progress Bar JS -->
 	<script src="/assets/js/jquery.barfiller.js"></script>
 	<!-- Main JS -->
 	<script src="/assets/js/main.js"></script>
    <script>
          $(document).ready(function(){
           
              setInterval(() =>  $('.owl-prev').trigger('click'), 9000);
              
        });
    </script>
</body>


</html>
