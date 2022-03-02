<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Categories 
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
                          All Category
                        </div>
                   <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Name Category</th>
                          <th scope="col">Pembuat</th>
                          <th scope="col">Created at</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @php
                            $i = 1;
                        @endphp --}}
                        @foreach($categories as $row)
                        <tr>
                          <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->user->name }}</td>
                          <td>
                            @if($row->created_at == NULL)
                            <span class="text-danger">No Date Save</span>

                            @else
                            {{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}
                          
                            @endif
                          </td>

                          <td>
                            <a href="{{ url('category/edit/'.$row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('softdelete/category/'.$row->id) }}" class="btn btn-danger">Trash</a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    {{$categories->links()}}
                   </div>
                    

                    

                </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                    Add Category
                  </div>
                  <div class="card-body">
                    <form action="{{ route('store.category') }}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                          @error('name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                     <br>
                      <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>

                    
                 
                </div>
              </div>

          </div>
        </div>
        </div>




{{-- trash part --}}




        <div class="container">
          <div class="row">

            <div class="col-md-8">
              
              <div class="card">

               

                  <div class="card-header">
                    Trash Category
                  </div>
             <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Pembuat</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @php
                      $i = 1;
                  @endphp --}}
                  @foreach($trash as $row)
                  <tr>
                    <th scope="row">{{ $trash->firstItem()+$loop->index }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->user->name }}</td>
                    <td>
                      @if($row->created_at == NULL)
                      <span class="text-danger">No Date Save</span>

                      @else
                      {{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}
                    
                      @endif
                    </td>

                    <td>
                      <a href="{{ url('category/restore/'.$row->id) }}" class="btn btn-warning">Restore</a>
                      <a href="{{ url('category/permanent/'.$row->id) }}" class="btn btn-danger">Delete Permanen</a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              {{$trash->links()}}
             </div>
              

              

          </div>
      </div>
      
  </div>
  </div>





    </div>
</x-app-layout>
