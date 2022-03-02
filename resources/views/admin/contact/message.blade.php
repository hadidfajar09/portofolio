@extends('layouts.admin_master')

@section('title')
    Message
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
                    <h2>Home Message Page</h2>
                    
                    <div class="card">
                                       

                        <div class="card-header">
                          All Contact Data
                        </div>
                   <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" width="2%">No</th>
                          <th scope="col" width="5%">Name</th>
                          <th scope="col" width="5%">Email</th>
                          <th scope="col" width="5%">Subject</th>
                          <th scope="col" width="5%">Message</th>
                          <th scope="col" width="5%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($messages as $row)
                        <tr>
                          <th scope="row">{{ $i++ }}</th>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->email }}</td>
                          <td>{{ $row->subject }}</td>
                          <td>{{ $row->message }}</td>
                        

                          <td>
                            <a href="{{ url('message/delete/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
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