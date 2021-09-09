@extends('layouts.master')
<style>
  @font-face {
    font-family: 'Poppins', sans-serif;
  font-style: normal;
  font-weight: 400;
  src: url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700") format('truetype');
}
.profile {
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 100px;
  font-family: "Open Sans", sans-serif;
}

/* One Profile */
.modal.hca-modal--clinical-quick-view-one .modal-header {
  box-shadow: 0 8px 8px -8px gray;
  padding: 20px 30px;
  font-size: 1.1em;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .close {
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 1;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .hca-modal-header--account-details ul {
  margin: 0;
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .hca-modal-header--account-details ul li {
  list-style-type: none;
  display: inline;
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .hca-modal-header--account-details li:before {
  content: " | ";
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .hca-modal-header--account-details li:first-child:before {
  content: none;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .hca-modal-header--account-details li:first-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-one .modal-header .hca-modal-header--account-balance span:last-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-one .modal-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--banner {
  padding: 40px 60px;
  height: auto;
  background: #7fc10b;
  box-shadow: inset 0px 3px 13px 2px rgba(0, 0, 0, 0.2);
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--banner img {
  height: 75px;
  width: 75px;
  background: #fff;
  margin-right: 15px;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--banner .hca-modal-body--visit-details {
  padding-top: 20px;
  color: #FFF;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--banner .hca-modal-body--visit-details span:nth-child(3) {
  font-size: 1.5em;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--banner .hca-modal-body_btn--full-details {
  padding-top: 20px;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content {
  padding: 40px 60px;
  height: auto;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .panel-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .panel-body h5 {
  line-height: 40px;
  background: #F4F4F4;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .providers-wrap {
  padding: 20px 0;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile {
  padding: 10px 0;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-name {
  font-size: 1.2em;
  color: #989898;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-type {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section {
  border-bottom: 1px solid #CCC;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section:last-child {
  border-bottom: none;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section .visit-title {
  font-weight: 900;
  font-size: 1em;
  padding-bottom: 10px;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section p {
  /* font-size: 1.2em; */
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--facility-details {
  padding: 20px 15px;
}
.modal.hca-modal--clinical-quick-view-one .modal-body .hca-modal-body--main-content .hca-modal-body--visit-duration .visit-duration-title {
  font-size: 1.2em;
}

/* Two Profile */

.modal.hca-modal--clinical-quick-view-two .modal-header {
  box-shadow: 0 8px 8px -8px gray;
  padding: 20px 30px;
  font-size: 1.1em;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .close {
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 1;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .hca-modal-header--account-details ul {
  margin: 0;
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .hca-modal-header--account-details ul li {
  list-style-type: none;
  display: inline;
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .hca-modal-header--account-details li:before {
  content: " | ";
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .hca-modal-header--account-details li:first-child:before {
  content: none;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .hca-modal-header--account-details li:first-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-two .modal-header .hca-modal-header--account-balance span:last-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-two .modal-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--banner {
  padding: 40px 60px;
  height: auto;
  background: #7fc10b;
  box-shadow: inset 0px 3px 13px 2px rgba(0, 0, 0, 0.2);
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--banner img {
  height: 75px;
  width: 75px;
  background: #fff;
  margin-right: 15px;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--banner .hca-modal-body--visit-details {
  padding-top: 20px;
  color: #FFF;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--banner .hca-modal-body--visit-details span:nth-child(3) {
  font-size: 1.5em;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--banner .hca-modal-body_btn--full-details {
  padding-top: 20px;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content {
  padding: 40px 60px;
  height: auto;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .panel-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .panel-body h5 {
  line-height: 40px;
  background: #F4F4F4;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .providers-wrap {
  padding: 20px 0;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile {
  padding: 10px 0;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-name {
  font-size: 1.2em;
  color: #989898;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-type {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section {
  border-bottom: 1px solid #CCC;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section:last-child {
  border-bottom: none;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section .visit-title {
  font-weight: 900;
  font-size: 1em;
  padding-bottom: 10px;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section p {
  /* font-size: 1.2em; */
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--facility-details {
  padding: 20px 15px;
}
.modal.hca-modal--clinical-quick-view-two .modal-body .hca-modal-body--main-content .hca-modal-body--visit-duration .visit-duration-title {
  font-size: 1.2em;
}

/* Three Profile */

.modal.hca-modal--clinical-quick-view-three .modal-header {
  box-shadow: 0 8px 8px -8px gray;
  padding: 20px 30px;
  font-size: 1.1em;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .close {
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 1;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .hca-modal-header--account-details ul {
  margin: 0;
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .hca-modal-header--account-details ul li {
  list-style-type: none;
  display: inline;
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .hca-modal-header--account-details li:before {
  content: " | ";
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .hca-modal-header--account-details li:first-child:before {
  content: none;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .hca-modal-header--account-details li:first-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-three .modal-header .hca-modal-header--account-balance span:last-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-three .modal-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--banner {
  padding: 40px 60px;
  height: auto;
  background: #7fc10b;
  box-shadow: inset 0px 3px 13px 2px rgba(0, 0, 0, 0.2);
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--banner img {
  height: 75px;
  width: 75px;
  background: #fff;
  margin-right: 15px;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--banner .hca-modal-body--visit-details {
  padding-top: 20px;
  color: #FFF;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--banner .hca-modal-body--visit-details span:nth-child(3) {
  font-size: 1.5em;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--banner .hca-modal-body_btn--full-details {
  padding-top: 20px;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content {
  padding: 40px 60px;
  height: auto;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .panel-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .panel-body h5 {
  line-height: 40px;
  background: #F4F4F4;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .providers-wrap {
  padding: 20px 0;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile {
  padding: 10px 0;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-name {
  font-size: 1.2em;
  color: #989898;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-type {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section {
  border-bottom: 1px solid #CCC;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section:last-child {
  border-bottom: none;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section .visit-title {
  font-weight: 900;
  font-size: 1em;
  padding-bottom: 10px;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section p {
  /* font-size: 1.2em; */
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--facility-details {
  padding: 20px 15px;
}
.modal.hca-modal--clinical-quick-view-three .modal-body .hca-modal-body--main-content .hca-modal-body--visit-duration .visit-duration-title {
  font-size: 1.2em;
}

/* Four Profile */

.modal.hca-modal--clinical-quick-view-four .modal-header {
  box-shadow: 0 8px 8px -8px gray;
  padding: 20px 30px;
  font-size: 1.1em;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .close {
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 1;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .hca-modal-header--account-details ul {
  margin: 0;
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .hca-modal-header--account-details ul li {
  list-style-type: none;
  display: inline;
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .hca-modal-header--account-details li:before {
  content: " | ";
  padding-right: 10px;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .hca-modal-header--account-details li:first-child:before {
  content: none;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .hca-modal-header--account-details li:first-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-four .modal-header .hca-modal-header--account-balance span:last-child {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-four .modal-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--banner {
  padding: 40px 60px;
  height: auto;
  background: #7fc10b;
  box-shadow: inset 0px 3px 13px 2px rgba(0, 0, 0, 0.2);
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--banner img {
  height: 75px;
  width: 75px;
  background: #fff;
  margin-right: 15px;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--banner .hca-modal-body--visit-details {
  padding-top: 20px;
  color: #FFF;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--banner .hca-modal-body--visit-details span:nth-child(3) {
  font-size: 1.5em;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--banner .hca-modal-body_btn--full-details {
  padding-top: 20px;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content {
  padding: 40px 60px;
  height: auto;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .panel-body {
  padding: 0;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .panel-body h5 {
  line-height: 40px;
  background: #F4F4F4;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .providers-wrap {
  padding: 20px 0;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile {
  padding: 10px 0;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-name {
  font-size: 1.2em;
  color: #989898;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .provider-profile .provider-type {
  color: #7fc10b;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section {
  border-bottom: 1px solid #CCC;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section:last-child {
  border-bottom: none;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section .visit-title {
  font-weight: 900;
  font-size: 1em;
  padding-bottom: 10px;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-details-wrap .visit-details-section p {
  /* font-size: 1.2em; */
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--facility-details {
  padding: 20px 15px;
}
.modal.hca-modal--clinical-quick-view-four .modal-body .hca-modal-body--main-content .hca-modal-body--visit-duration .visit-duration-title {
  font-size: 1.2em;
}
.brief:hover{
 color:#7fc10b;
}

</style>
@section('content')

 	<!-- Breadcroumb Area -->

 	<div class="breadcroumb-area bread-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcroumb-title">
            <h1>About Us</h1>
            <h6><a href="/">Home</a> / About Us</h6>
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
           <p>Neito Energy Limited is owned and managed by young, talented and vibrant Nigerians with main business focus on supply and distribution of petroleum products, supply and trading of products and provision of Logistic services across Nigeria.</p>
           <p>We draw on divers Strength and Strive with Pleasure to Create Customer Based Services. Our Company Trading Philosophy is Based on Market/Customer Driven Strategies aimed at Creating Values for Our Customers and Maximizing Our Resources to Achieve Target Objectives and Goals while Considering the Dynamic Global Economy.
          </p>
           {{-- <div class="row">
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
                     <p>Product Retailing at Depots & service retail outlets</p>
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
           </div> --}}
           <hr>
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
           <p class="counter-number"><span>18</span></p>
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

   <!-- About Section-->

   <div id="about-3" class="about-area section-padding">
     <div class="container">
       <div class="row">
  
         <div class="col-lg-6 col-md-12 col-sm-12">
           <div class="info-content-area">
             <div class="section-title">
               <h6>Our Business Focus</h6>
               <h2>We Delivering The Best <b>Global</b> Refueling <b>Solutions.</b></h2>
             </div>
           
             <p> The main business focus of the company is as follows:</p>
           </div>
  
           <div class="row">
             <div class="col-lg-11">
               <div class="progress-bar-area">
                 <div class="single-bar-item">
                   <h4>Petroleum products supply & trading with industries</h4>
                   <div id="bar1" class="barfiller">
                     <!-- <span class="tip">100%</span> -->
                     <span class="fill" data-percentage="100"></span>
                   </div>
                 </div>
  
                 <div class="single-bar-item">
                   <h4>Supply and distribution of petroleum products to end-users </h4>
                   <div id="bar2" class="barfiller">
                     <!-- <span class="tip">70%</span> -->
                     <span class="fill" data-percentage="100"></span>
                   </div>
                 </div>
               
                 <div class="single-bar-item">
                   <h4>Product retailing at depot and service retail outlets</h4>
                   <div id="bar3" class="barfiller">
                     <!-- <span class="tip">100%</span> -->
                     <span class="fill" data-percentage="100"></span>
                   </div>
                 </div>
                 <div class="single-bar-item">
                   <h4>Product haulage services,</h4>
                   <div id="bar4" class="barfiller">
                     <!-- <span class="tip">100%</span> -->
                     <span class="fill" data-percentage="100"></span>
                   </div>
                 </div>
                 <div class="single-bar-item">
                   <h4>General Merchandize.</h4>
                   <div id="bar5" class="barfiller">
                     <!-- <span class="tip">100%</span> -->
                     <span class="fill" data-percentage="100"></span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
  
  
  
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12">
           <div class="about-bg wow fadeInUp" data-wow-delay=".3s">
             <img src="assets/img/staff.jpg" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
  

    <!-- Team Section-->

  <div class="team-area section-padding gray-bg text-center pb-150">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 ">
          <div class="section-title text-center">
            <h6>Experts</h6>
            <h2>Meet Our <b>Dedicated</b> Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="single-team-member wow fadeInLeft" data-wow-delay=".2s">
            <div class="team-member-bg">
              <div class="team-content">
                <div class="team-title">
                  <a href="#">UGBADA JACKSON</a>
                </div>
                <div class="team-subtitle">
                  <p>Managing Director</p>
                  <a class="brief" href="#" data-toggle="modal" data-target=".hca-modal--clinical-quick-view-one">View Profile</a>

                </div>
              </div>
              <div class="team-social">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                  </li>

                </ul>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="single-team-member wow fadeInLeft" data-wow-delay=".4s">
            <div class="team-member-bg team-bg-2">
              <div class="team-content">
                <div class="team-title">
                  <a href="#">EZELOIRA CHRISTIAN</a>
                </div>
                <div class="team-subtitle">
                  <p>Sales & Operations</p>
                  <a class="brief" href="#" data-toggle="modal" data-target=".hca-modal--clinical-quick-view-two">View Profile</a>

                </div>
              </div>
              <div class="team-social">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="single-team-member wow fadeInRight" data-wow-delay=".6s">
            <div class="team-member-bg team-bg-3">
              <div class="team-content">
                <div class="team-title">
                  <a href="#">MICHELLE DAVIDS</a>
                </div>
                <div class="team-subtitle">
                  <p>Sales & Marketing</p>
                  <a class="brief" href="#" data-toggle="modal" data-target=".hca-modal--clinical-quick-view-three">View Profile</a>
                </div>
              </div>
              <div class="team-social">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="single-team-member wow fadeInRight" data-wow-delay=".8s">
            <div class="team-member-bg team-bg-4">
              <div class="team-content">
                <div class="team-title">
                  <a href="#">CHINKE JOSEPH</a>
                </div>
                <div class="team-subtitle">
                  <p>Head, Finance & Account</p>
                  <a class="brief" href="#" data-toggle="modal" data-target=".hca-modal--clinical-quick-view-four">View Profile</a>
                </div>
              </div>
              <div class="team-social">
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- Profile Details 1 --}}
  <section >

  
    <div class="modal fade hca-modal--clinical-quick-view-one" tabindex="-1" role="dialog" aria-labelledby="clinicalQuickViewModal">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <div class="row">          
             <div class="col-sm-6">
               <div class="hca-modal-header--account-details" id="account-details">
                 <ul>
                   <li>Neito Energy </li>
                   <li>Team</li>
                 </ul>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="hca-modal-header--account-balance" id="account-details"><span>Position:</span> <span>Managing Director </span> 
                 
               </div>
             </div>
           </div>
         </div>
         
         <div class="modal-body">
          
             <div class="hca-modal-body--banner">
               <div class="container-sm">
                 <div class="row">
                   <div class="col-xs-12 col-sm-8">
                     <div class="hca-modal-body--banner-image pull-left">
                     <img src="assets/img/team/1.jpg" height="75" width="75" alt="Team Member Photo" class="img-circle">
                     </div>
                     <div class="hca-modal-body--visit-details pull-left">
                       <span>UGBADA JACKSON</span><br>
                       <span>Managing Director  </span>
                     
                     </div>
                   </div>
                   <div class="col-xs-12 col-sm-4">
                     <div class="hca-modal-body_btn--full-details">
                     <button href="#" class="btn btn-default btn-lg btn-block" aria-label="See full visit details">Profile Details</button>
                     </div>
                   </div>
                 </div>
               </div>
             </div><!-- /.hca-modal-body--banner -->
             
             <div class="hca-modal-body--main-content">
               <div class="container-sm">
                 <div class="hca-modal-body--visit-details-wrap">
                   <div class="row">
                     <div class="col-sm-12">
                       <div class="col-sm-12">
                           <div class="visit-details-section">
                           <h5 class="visit-title">Profile Brief</h5>
                         <p>Jackson is a founding member and the Managing director of Neito Energy Limited. He is a proven professional in business development and also possesses diverse competence that cuts across the major spectrum of Marketing, Finance, Human Resources, Trading and Logistics. Jackson has many years of previous experience working with globally recognized oil companies in Nigeria including some of the major consulting firms today. 

                          He is a second class upper graduate of Business Administration  from University of Ado Ekiti. He also holds masters (MSc/MBA) degrees from University of Lagos Akoka and  Ladoke Akintola University of Technology respectively and a member of  Nigeria Institute of Management. He has attended various professional training programs
                          </p>
                         </div>
                       </div>
                     </div>
                    
                   </div>
                 </div>
               </div>
             </div>
           
           
              
         </div><!-- /.modal-body -->      
         
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
   
   </section>

  {{-- profile details 2 --}}
  <section >

  
    <div class="modal fade hca-modal--clinical-quick-view-two" tabindex="-1" role="dialog" aria-labelledby="clinicalQuickViewModal">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <div class="row">          
             <div class="col-sm-6">
               <div class="hca-modal-header--account-details" id="account-details">
                 <ul>
                   <li>Neito Energy </li>
                   <li>Team</li>
                 </ul>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="hca-modal-header--account-balance" id="account-details"><span>Position:</span> <span> Sales & Operations</span> 
                 
               </div>
             </div>
           </div>
         </div>
         
         <div class="modal-body">
          
             <div class="hca-modal-body--banner">
               <div class="container-sm">
                 <div class="row">
                   <div class="col-xs-12 col-sm-8">
                     <div class="hca-modal-body--banner-image pull-left">
                     <img src="assets/img/team/2.jpg" height="75" width="75" alt="Team Member Photo" class="img-circle">
                     </div>
                     <div class="hca-modal-body--visit-details pull-left">
                       <span>EZELOIRA CHRISTIAN</span><br>
                       <span>Sales & Operations </span>
                     
                     </div>
                   </div>
                   <div class="col-xs-12 col-sm-4">
                     <div class="hca-modal-body_btn--full-details">
                     <button href="#" class="btn btn-default btn-lg btn-block" aria-label="See full visit details">Profile Details</button>
                     </div>
                   </div>
                 </div>
               </div>
             </div><!-- /.hca-modal-body--banner -->
             
             <div class="hca-modal-body--main-content">
               <div class="container-sm">
                 <div class="hca-modal-body--visit-details-wrap">
                   <div class="row">
                     <div class="col-sm-12">
                       <div class="col-sm-12">
                           <div class="visit-details-section">
                           <h5 class="visit-title">Profile Brief</h5>
                         <p>Christian is a second class upper graduate of Mechanical/Production Engineering from Nnamdi Azikiwe University Awka, Before joining Neito Energy as  Head, Sales and Operations , he worked with many globally recognised Oil and gas companies including logistic companies. As the Head of operation he is in charge of product sourcing. He also manages and develops the company’s line of petroleum products, supply and distribution to large volume customers.  His duties also include establishing, building and maintaining long term business relationships, developing new opportunities and maintain a viable network of high net worth customers
                        </p>
                         </div>
                       </div>
                     </div>
                    
                   </div>
                 </div>
               </div>
             </div>
           
           
              
         </div><!-- /.modal-body -->      
         
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
   
   </section>
  {{-- Profile details 3 --}}
  <section >

  
    <div class="modal fade hca-modal--clinical-quick-view-three" tabindex="-1" role="dialog" aria-labelledby="clinicalQuickViewModal">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <div class="row">          
             <div class="col-sm-6">
               <div class="hca-modal-header--account-details" id="account-details">
                 <ul>
                   <li>Neito Energy </li>
                   <li>Team</li>
                 </ul>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="hca-modal-header--account-balance" id="account-details"><span> Position: </span><span> Sales and Marketing</span> 
                 
               </div>
             </div>
           </div>
         </div>
         
         <div class="modal-body">
          
             <div class="hca-modal-body--banner">
               <div class="container-sm">
                 <div class="row">
                   <div class="col-xs-12 col-sm-8">
                     <div class="hca-modal-body--banner-image pull-left">
                     <img src="assets/img/team/3.jpg" height="75" width="75" alt="Team Member Photo" class="img-circle">
                     </div>
                     <div class="hca-modal-body--visit-details pull-left">
                       <span>MICHELLE DAVIDS</span><br>
                       <span>Sales & Marketing</span>
                     
                     </div>
                   </div>
                   <div class="col-xs-12 col-sm-4">
                     <div class="hca-modal-body_btn--full-details">
                     <button href="#" class="btn btn-default btn-lg btn-block" aria-label="See full visit details">Profile Details</button>
                     </div>
                   </div>
                 </div>
               </div>
             </div><!-- /.hca-modal-body--banner -->
             
             <div class="hca-modal-body--main-content">
               <div class="container-sm">
                 <div class="hca-modal-body--visit-details-wrap">
                   <div class="row">
                     <div class="col-sm-12">
                       <div class="col-sm-12">
                           <div class="visit-details-section">
                           <h5 class="visit-title">Profile Brief</h5>
                           <p>Michelle is a second class upper graduate of Business Administration & management from University of Ado-Ekiti and also a Master holder from University of Ile-Ife. She had previously work for Neito-Biz Consulting Int’l and Maayolt Healthcare Ltd.
                            She is employed and trained in the area of Sales and Marketing. She currently oversees the Marketing arm of the Business with much focus on the Industrial Customers 
                            </p>
                         </div>
                       </div>
                     </div>
                    
                   </div>
                 </div>
               </div>
             </div>
           
           
              
         </div><!-- /.modal-body -->      
         
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
   
   </section>


  {{-- profile detail 4 --}}
  <section >

  
   <div class="modal fade hca-modal--clinical-quick-view-four" tabindex="-1" role="dialog" aria-labelledby="clinicalQuickViewModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="row">          
            <div class="col-sm-6">
              <div class="hca-modal-header--account-details" id="account-details">
                <ul>
                  <li>Neito Energy </li>
                  <li>Team</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="hca-modal-header--account-balance" id="account-details"><span>Position:</span><span>Head, Finance & Account</span> 
                
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal-body">
         
            <div class="hca-modal-body--banner">
              <div class="container-sm">
                <div class="row">
                  <div class="col-xs-12 col-sm-8">
                    <div class="hca-modal-body--banner-image pull-left">
                    <img src="assets/img/team/4.jpg" height="75" width="75" alt="Team Member Photo" class="img-circle">
                    </div>
                    <div class="hca-modal-body--visit-details pull-left">
                      <span>CHINKE JOSEPH</span><br>
                      <span>Head, Finance & Account </span>
                    
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="hca-modal-body_btn--full-details">
                    <button href="#" class="btn btn-default btn-lg btn-block" aria-label="See full visit details">Profile Details</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.hca-modal-body--banner -->
            
            <div class="hca-modal-body--main-content">
              <div class="container-sm">
                <div class="hca-modal-body--visit-details-wrap">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-12">
                          <div class="visit-details-section">
                          <h5 class="visit-title">Profile Brief</h5>
                        <p>Joseph is a multi-discipline personnel with a degree in Accounting from the  University of Lagos and also a member of Institute of Chartered accountants of Nigeria. He trained with so many Chartered Accounting firms where he acquired several skills in Accounting and Auditing. Before joining Neito Energy he worked as the consultant in-charge of several clients cutting across Construction, Manufacturing and Downstream Sector of the oil industry amongst others. His tasks cover prospect risk management, developing and advising on all accounting, financing and strategic aspects of the company’s business.
                        </p>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          
          
             
        </div><!-- /.modal-body -->      
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  </section>

  <!-- Client Area -->

  <div class="client-area pt-50 pb-40">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo-carousel owl-carousel">
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/1.png') }}" alt="">
              </div>
            </div>
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/2.png') }}" alt="">
              </div>
            </div>
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/3.png') }}" alt="">
              </div>
            </div>
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/4.png') }}" alt="">
              </div>
            </div>
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/5.png') }}" alt="">
              </div>
            </div>
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/6.png') }}" alt="">
              </div>
            </div> 
            <div class="single-logo-wrapper">
              <div class="logo-inner-item">
                <img src="{{ asset('assets/img/client/7.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection