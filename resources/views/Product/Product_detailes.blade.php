
@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Detailes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Detailes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Detailes</h3>
              <div>
                
                 </div>
              </div>
              <!-- /.card-header -->
              <form action="{{ url('add_card')}}" method="post">
	@csrf
	<div>
		<div>
			<h1>Product Detailes</h1>
		</div>
		<input type="hidden" name="product_id" value="{{ $result->id}}">
		<div class="div">
	<img src="{{ asset('images/product/'.$result->image)}}" width="100px" height="100px"> 
	</div >
		<div class="div">
	Product name: {{ $result->Product_name}}
	</div>
	<div class="div">
	Qty:<input type="text" name="Qty" class="form-control">
	</div >
	<div class="div">
	Price:{{$result->Price}}	
	</div>
	
	<div class="div">
	<input type="submit" name="submit" value="Add card" class="btn">
	</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      </div>


    </section>
    <!-- /.content -->
  </div>

@endsection