@extends('layouts.admin_master')

@section('title')
    About
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">

                    

                  <div class="col-md-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>{{ session('success') }}</strong> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    <h2>Home About Page</h2>
                    
                    <div class="card">
                      <a href="{{ route('add.about') }}"><button class="btn btn-info" style="float: right;">Add About</button></a>
                     

                        <div class="card-header">
                          All About Data
                        </div>
                   <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" width="2%">No</th>
                          <th scope="col" width="5%">Title</th>
                          <th scope="col" width="5%">Short Description</th>
                          <th scope="col" width="5%">Long Description</th>
                          <th scope="col" width="5%">Created at</th>
                          <th scope="col" width="5%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($abouts as $row)
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{ $row->title }}</td>
                          <td>{{ $row->short_des }}</td>
                          <td>{{ $row->long_des }}</td>
                          <td>
                            @if($row->created_at == NULL)
                            <span class="text-danger">No Date Save</span>

                            @else
                            {{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}
                          
                            @endif
                          </td>

                          <td>
                            <a href="{{ url('about/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('about/delete/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                   </div>
                    

                    

                </div>
            </div>
            
        </div>
        </div>




{{-- trash part --}}





    </div>
    @endsection