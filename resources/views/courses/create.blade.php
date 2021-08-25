@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Category
        </div>
        <div class="card-body">
        
          <form action="{{ route('course.store') }}" method="post">

            {{ csrf_field() }}
            @include('partials.messages')
            <!-- {!! csrf_field() !!} -->
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Couse Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description">
            </div> 
              <div class="form-group">
              <label for="exampleInputPassword1">Details</label>
              <input type="text" class="form-control" name="details" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter details">
            </div>  
             <div class="form-group">
              <label for="exampleInputPassword1">Level</label>
              <input type="text" class="form-control" name="level" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter level">
            </div>  
             <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status">
            </div>
            

            <button type="submit" class="btn btn-primary">Add Course</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
