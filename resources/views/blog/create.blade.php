<?php
$cats = array();
$all_recs = App\Models\Category::where("cat_description","!=","")->get();
foreach ($all_recs as $rec) {
    $cats[$rec['id']] = $rec['cat_description'];
}




?>
@extends('layouts.master')
@section('title')
  Create Blog
@endsection

@section('content')




@if (!empty(Auth::user()))
  	<!-- Breadcroumb Area -->

  <div class="breadcroumb-area bread-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcroumb-title">
            <h1>Create Blog</h1>
            <h6><a href="/blog">Blog</a> / Create Blog</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Create Blog Section-->

  <div class="quotation-section sky-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            
            <h2> Create a New <b>Blog Post</b></h2>
          </div>
        </div>
      </div>
      <div class="quotation-block">
        <form class="quotation-form" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-8 col-sm-6">
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" data-required placeholder="Write your Post Title">

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
                <label>Post Body:</label>
                
                  <textarea class="form-control" id="summary-ckeditor" name="body">{{ old('body') }}</textarea>
                  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                  <script>
                    CKEDITOR.replace( 'body', {
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
                <button type="submit" class="main-btn">Create Post<i class="las la-arrow-right"></i></button>
              </div>
            </div>
          </div>

        </form>
        <div class="quotation-dtl text-white">
          <p><i class="las la-mobile"></i>Providing the Energy you Need</p>
        </div>
      </div>
    </div>
  </div>




  @else 
  <h3 style="text-align: center">you haven't registered, <span style="color:crimson"> you are not authorized to access this page</span></h3 style="text-align: center">;

  @endif 

@endsection