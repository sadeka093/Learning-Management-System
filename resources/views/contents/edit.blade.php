@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Course
        </div>
        <div class="card-body">
        
          <form action="{{ route('content.update',$content->id) }}" method="post">

            {{ csrf_field() }}
            <!-- {!! csrf_field() !!} -->
           <!--  <div class="form-group">
              <label for="exampleInputEmail1">Course Name</label>
              <input type="text" class="form-control" name="course_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $content->course_name }}">
            </div> -->
            <div class="form-group">
              <label for="exampleInputEmail1">Content Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $content->title }}">
            </div>
          
            

             <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $content->status }}">
            </div>
         

            <button type="submit" class="btn btn-primary">Update Content</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
