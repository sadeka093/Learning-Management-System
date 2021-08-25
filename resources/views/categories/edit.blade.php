@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Product
        </div>
        <div class="card-body">
        
          <form action="{{ route('category.update',$category->id) }}" method="post">

            {{ csrf_field() }}
            <!-- {!! csrf_field() !!} -->
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->title }}">
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->status }}">
            </div>
         

            <button type="submit" class="btn btn-primary">Update Category</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
