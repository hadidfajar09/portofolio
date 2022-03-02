@extends('layouts.admin_master')

@section('title')
    Change Password
@endsection

@section('content')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
    <h2>Change Password</h2>
</div>

<div class="card-body">
    
    @if(session('error'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('error') }}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <form class="form-pill" method="post" action="{{ route('pass.update') }}">
       @csrf
        <div class="form-group">
            <label for="exampleFormControlPassword3">Current Password</label>
            <input type="password" class="form-control" name="old_password" id="current_password" placeholder="Current Password">
            @error('old_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
       
        <div class="form-group">
            <label for="exampleFormControlPassword3">New Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="New Password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlPassword3">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-default">Change</button>
    </form>
</div>
</div>
@endsection