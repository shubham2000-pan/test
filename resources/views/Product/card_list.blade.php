
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
                
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                      <tr>
                    <th>id</th>
                    <th>Image</th>
                    <td>Name</td>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>total amount</th>
                    <th>Action</th>
                                  
                  </tr>
                  </thead>
                  
                  <tbody>   
                @foreach($result as $key=>$value)
                  <tr>
                    <td>{{ $value->card_id}}</td>
                    <td> <img src="{{ asset('images/product/'.$value->image)}}" width="100px" height="100px"> </td>
                    <td>{{ $value->Product_name}}</td>
                    <td>{{ $value->qty}}</td>
                    <td>{{ $value->Price }}</td>
                    <td>{{ $value->Price*$value->qty}}</td>

                  <td>
                  	 <button class="btn btn-danger btn-sm" style="background:white; border-radius:22px;"><a href="{{ url('card_delete/'.$value->card_id)}}" class="delete-data" data-id="'.$value->id.'"><i class="fas fa-trash"></i></a>
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