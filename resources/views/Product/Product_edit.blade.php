
@extends('layouts.admin.app')

@section('internal_css')    
  <style type="text/css">
  .error{
    color:red;
  }

</style>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Add product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('Product_update')}}" method="post" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="id" value="{{ $result->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Product name</label>
                    <input type="text" name="Product_name" class="form-control" id="exampleInputName" placeholder="Enter Name" value="{{ $result->id}}">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputAbout">Qty</label>
                    <input type="text" name="Qty" class="form-control" id="exampleInputAbout" placeholder="Enter About" value="{{ $result->Qty}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAbout">Price</label>
                    <input type="text" name="Price" class="form-control" id="exampleInputAbout" placeholder="Enter About" value="{{ $result->Price}}">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      
                    </div>
                  </div>
            
                </div>
               
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
         
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('footer_script')

@endsection
