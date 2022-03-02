<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Categories 
        </h2>
    </x-slot>

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
                    Edit Category
                  </div>
                  <div class="card-body">
                    <form action="{{  url('category/update/'.$categories->id) }}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Update Category Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ $categories->name }}">
                          @error('name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                     <br>
                      <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>

                    
                 
                </div>
              </div>

          </div>
        </div>
        </div>
    </div>
</x-app-layout>
