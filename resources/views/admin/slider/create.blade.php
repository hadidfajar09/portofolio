@extends('layouts.admin_master')

@section('title')
    Add Slider
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Slider</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.slider') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title </label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Slider Title">
                    @error('title')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                </div>
               
              
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('description')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                </div>
                @error('image')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

   
   
</div>
@endsection
