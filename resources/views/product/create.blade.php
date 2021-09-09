<?php
$cats = array();
$all_recs = App\Models\Category::where("cat_description","!=","")->get();
foreach ($all_recs as $rec) {
    $cats[$rec['id']] = $rec['cat_description'];
}




?>
@extends('layouts.master')
@section('title')
  Create Product
@endsection

@section('content')




@if (!empty(Auth::user()))
  	<!-- Breadcroumb Area -->

  <div class="breadcroumb-area bread-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcroumb-title">
            <h1>Create Product</h1>
            <h6><a href="/product">Product</a> / Create Product</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Create Product Section-->

  <div class="quotation-section sky-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            
            <h2> Create a New <b>Product </b></h2>
          </div>
        </div>
      </div>
      <div class="quotation-block">
        <form class="quotation-form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-8 col-sm-6">
              <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" data-required placeholder="Write your Product Name">

              </div>
            </div>
            
            <div class="col-lg-4">
              <div class="form-group">
                <label for="phone">Image Upload:</label>
                <input type="file" name="image" id="" value="fileupload" accept="image/*" onchange="document.getElementById('show_img').src = window.URL.createObjectURL(this.files[0])" >

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="form-group">
                <label>Product Description:</label>
                
                  <textarea class="form-control" id="summary-ckeditor" name="description">{{ old('description') }}</textarea>
                  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                  <script>
                    CKEDITOR.replace( 'description', {
                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                        filebrowserUploadMethod: 'form'
                    });
                    </script>
              
              
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Image Preview:</label>
                <div class="form-group">
                  <img  id="show_img" height="300px" width="300px" />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="form-group">
                <label for="name">Quantiy</label>
                <input type="text" name="quantity" class="form-control" data-required placeholder=" Product Quantity ">

              </div>
            </div>
            
            <div class="col-lg-6 col-sm-6">
              <div class="form-group">
                <label for="phone">Price:</label>
                <input type="text" name="price" class="form-control" data-required placeholder=" Product Price ">

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="form-group">
                <label>Select Category:</label>
                <div class="form-group">
                  <select class="form-control" name="cat_id" id="">
                    <?php
                       foreach ($cats as $key => $value) {
                          echo"<option value='$key'>$value</option>";
                       }
  
                   ?>
                   </select>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="request-button">
                <button type="submit" class="main-btn">Create Product<i class="las la-arrow-right"></i></button>
              </div>
            </div>
          </div>

        </form>
        <div class="quotation-dtl text-white">
          <p><i class="las la-mobile"></i>Providing the best Products you need</p>
        </div>
      </div>
    </div>
  </div>




  @else 
  <h3 style="text-align: center">you haven't registered, <span style="color:crimson"> you are not authorized to access this page</span></h3 style="text-align: center">;

  @endif 

@endsection