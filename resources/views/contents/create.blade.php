@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Category
        </div>
        <div class="card-body">
        
          <form action="{{ route('content.store') }}" method="post">

            {{ csrf_field() }}

            @include('partials.messages')
            <!-- {!! csrf_field() !!} -->
           <!--  <div class="form-group">
              <label for="exampleInputEmail1">Course name</label>
              <input type="text" class="form-control" name="course_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Couse Name">
            </div> -->

              

                <div class="form-group">
              <label for="exampleInputEmail1">Select Course</label>
           <select class="form-control" name="course_id">
             <option value="">Please select a Course Name for the content</option>
          @foreach(App\Models\Course::orderBy('id','asc')->get() as $course)
          <option value="{{ $course->id}}">{{ $course->name }}</option>

         
                   @endforeach
           </select>
            </div> 



            <div class="form-group">
              <label for="exampleInputPassword1">Content title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter content title">
            </div> 
              <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter status">
            </div>
               
            <div class="form-group">
            <label for="additionalfile">Additional File</label>

            <input type="file" class="form-control" name="additionalfile" id="additionalfile" >
               
            </div>
            <div class="form-group">
            <label for="lecturevideo">Lecture Video</label>

            <input type="file" class="form-control" name="lecturevideo" id="lecturevideo" >
               
            </div>
            

            <button type="submit" class="btn btn-primary">Add Content</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
