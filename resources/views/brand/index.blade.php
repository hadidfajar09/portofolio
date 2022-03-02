@extends('layouts.admin_master')

@section('title')
    Brand
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
                          All Brand
                        </div>
                   <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Brand</th>
                          <th scope="col">Image</th>
                          <th scope="col">Created at</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @php
                            $i = 1;
                        @endphp --}}
                        @foreach($brands as $row)
                        <tr>
                          <th scope="row">{{ $brands->firstItem()+$loop->index }}</th>
                          <td>{{ $row->brand_name }}</td>
                          <td><img src="{{ asset($row->brand_image) }}" style="height: 50px; width: 70px;"></td>
                          <td>
                            @if($row->created_at == NULL)
                            <span class="text-danger">No Date Save</span>

                            @else
                            {{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}
                          
                            @endif
                          </td>

                          <td>
                            <a href="{{ url('brand/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('brand/delete/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    {{$brands->links()}}
                   </div>
                    

                    

                </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                    Add Brand
                  </div>
                  <div class="card-body">
                    <form action="{{ route('store.brand') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Brand Name</label>
                        <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                          @error('brand_name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
           
                      <div class="form-group">
                        <label for="exampleInputEmail1">Brand Image</label>
                        <input type="file" class="form-control" name="brand_image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload">
                          @error('brand_image')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                     <br>
                      <button type="submit" class="btn btn-primary">Add Brand</button>
                    </form>

                    
                 
                </div>
              </div>

          </div>
        </div>
        </div>




{{-- trash part --}}





    </div>
    @endsection