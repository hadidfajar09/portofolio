@extends('layouts.admin_master')

@section('title')
    Edit About
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit About</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('about/update/'.$abouts->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title </label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Title" value="{{ $abouts->title }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
               
              
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description</label>
                    <textarea class="form-control" name="short_des" id="exampleFormControlTextarea1" rows="3">{{ $abouts->short_des }}</textarea>
                    @error('short_des')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Long Description</label>
                    <textarea class="form-control" name="long_des" id="exampleFormControlTextarea1" rows="3">{{ $abouts->long_des }}</textarea>
                    @error('long_des')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
               
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

   
   
</div>
@endsection
