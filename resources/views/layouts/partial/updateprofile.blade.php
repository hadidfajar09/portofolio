@extends('layouts.admin_master')

@section('title')
    Update Profile
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2> Update Profile</h2>
    </div>
    
    <div class="card-body">
        
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('error') }}</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form class="form-pill" method="post" action="{{ route('profile.update') }}">
           @csrf
            <div class="form-group">
                <label for="exampleFormControlPassword3">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user['name'] }}">
              
            </div>

            <div class="form-group">
                <label for="exampleFormControlPassword3">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user['email'] }}">
                
            </div>
           
    
            <button type="submit" class="btn btn-primary btn-default">Change</button>
        </form>
    </div>
    </div>
@endsection
