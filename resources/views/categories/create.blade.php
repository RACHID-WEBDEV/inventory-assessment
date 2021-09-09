@extends('layouts.master')
@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8" style="margin:auto">
            <h3>Category- Create New Category </h3>
            <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                <div class="card">
                    <div class="card-header 100%">
                        <label for="">Category:</label>
                        <input type="text" name="cat_description" class="form-control" value="" placeholder="Enter new category">
                        {{-- <input hidden type="text" name="slug" class="form-control" value="" placeholder="Enter new category"> --}}
                    </div>
                           

                    <div class="card-footer 100%">

                            <button type="submit" class="btn btn-success"> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
    
@endsection