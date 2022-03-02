@extends('layouts.admin_master')

@section('title')
    Edit Brand
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                
            <div class="col-md-8">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ session('success') }}</strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              <div class="card">
                  <div class="card-header">
                    Edit Brand
                  </div>
                  <div class="card-body">
                    <form action="{{  url('brand/update/'.$brands->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Update Brand Name</label>
                        <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ $brands->brand_name }}">
                          @error('brand_name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                     <br>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Upload Image</label>
                        <input type="file" class="form-control" name="brand_image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" >
                          @error('brand_image')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <img src="{{ asset($brands->brand_image) }}" style="height: 150px">
                        <input type="hidden" name="lama" value="{{ $brands->brand_name }}">

                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary">Update Brand</button>
                    </form>

                    
                 
                </div>
              </div>

          </div>
        </div>
        </div>
    </div>

  @endsection