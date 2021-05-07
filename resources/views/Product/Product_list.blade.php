@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
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
                <h3 class="card-title">User List</h3>
              <div>
                <button class="btn btn-primary btn-sm float-sm-right" style="background:white; border-radius:22px;">
                  <a href=" {{ url('add_product')}} ">
                   <i class="fas fa-plus"></i> Add product
                  </a>
                </button>
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                      <tr>
                     <th>id</th>
                    <td>Name</td>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                                  
                  </tr>
                  </thead>
                  
                  <tbody>   
                @foreach($result as $key=>$value)
                  <tr>
                  <td>{{ $value->id}}</td>
                  <td>{{ $value->Product_name}}</td>
                  <td>{{ $value->Qty}}</td>
                  <td>{{ $value->Price}}</td>
                  <td> <img src="{{ asset('images/product/'.$value->image)}}" width="100px" height="100px"> </td>

                  <td>
                  	<button class="btn btn-success btn-sm" style="background:white; border-radius:22px;"><a href="{{ url('Product_edit/'.$value->id)}}"><i class="fas fa-edit"></i></a></button> <button class="btn btn-danger btn-sm" style="background:white; border-radius:22px;"><a href="{{ url('Product_delete/'.$value->id)}}" class="delete-data" data-id="'.$value->id.'"><i class="fas fa-trash"></i></a></button>
                  	<button class="btn btn-danger btn-sm" style="background:white; border-radius:22px;"><a href="{{ url('detailes/'.$value->id)}}" class="delete-data" data-id="'.$value->id.'"><i class="fas fa-eye"></i></a></button>
                  </td>
                              </tr>
                     @endforeach 
                  

                    </td>
                  </tbody>
                  


                </table>
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