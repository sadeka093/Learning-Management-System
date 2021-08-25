@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Course
        </div>
        <div class="card-body">
        
          <form action="{{ route('course.update',$course->id) }}" method="post">

            {{ csrf_field() }}
            <!-- {!! csrf_field() !!} -->
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->name }}">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->description }}">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Details</label>
              <input type="text" class="form-control" name="details" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->details }}">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Level</label>
              <input type="text" class="form-control" name="level" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->level }}">
            </div>
            

             <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->status }}">
            </div>
         

            <button type="submit" class="btn btn-primary">Update Course</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
