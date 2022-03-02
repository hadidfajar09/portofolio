@extends('layouts.admin_master')

@section('title')
    About
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">

                  <div class="col-md-8">
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $i = 1;
                          @endphp
                          @foreach($images as $row)
                          <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td><img src="{{ asset($row->image) }}" style="height: 50px; width: 70px;"></td>
                            <td>
                              @if($row->created_at == NULL)
                              <span class="text-danger">No Date Save</span>
  
                              @else
                              {{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}
                            
                              @endif
                            </td>
  
                            <td>
                              <a href="{{ url('image/delete/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                     </div>          
            </div>
            <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                    Multi Image
                  </div>
                  <div class="card-body">
                    <form action="{{ route('store.image') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="image[]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload" multiple="">
                          @error('image')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                     <br>
                      <button type="submit" class="btn btn-primary">Add Image</button>
                    </form>

                    
                 
                </div>
              </div>

          </div>
        </div>
        </div>




{{-- trash part --}}





    </div>

    @endsection

