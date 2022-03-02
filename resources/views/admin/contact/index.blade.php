@extends('layouts.admin_master')

@section('title')
    Contact
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
                    <h2>Home Contact Page</h2>
                    
                    <div class="card">
                      <a href="{{ route('add.contact') }}"><button class="btn btn-info" style="float: right;">Add Contact</button></a>
                     

                        <div class="card-header">
                          All Contact Data
                        </div>
                   <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" width="2%">No</th>
                          <th scope="col" width="5%">Address</th>
                          <th scope="col" width="5%">Email</th>
                          <th scope="col" width="5%">Phone</th>
                          <th scope="col" width="5%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($contacts as $row)
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{ $row->address }}</td>
                          <td>{{ $row->email }}</td>
                          <td>{{ $row->phone }}</td>
                        

                          <td>
                            <a href="{{ url('contact/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('contact/delete/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
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