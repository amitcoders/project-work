@extends('layouts.sidebar')
  
@section('content')
<br><br><br>
<div class="container" style="margin-right: -87px;">
<div class="row">
    <div class="col-lg-6">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
     <br><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-lg-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div><br>
        <br><br>
        <div class="col-lg-7 col-sm-7 col-md-7">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-lg-12 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
</div>
@endsection