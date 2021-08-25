@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
         Course List
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th> Course Name </th>
              <th> level </th>
              <th> Status </th>
              <th> Action </th>

            </tr>
              <?php $i=0; ?>
            @foreach($courses as $course)
            <tr>
              <td>{{  ++$i }}</td>
              <td>{{ $course->name }}</td>
              <td>{{ $course->level }}</td>
              <td>{{ $course->status }}</td>
          
             <td><a href="{{ route('course.edit', $course->id) }}" class="btn btn-success">Edit</a>

                 <a href="/delete/{{$course->id}}" class="btn btn-danger">delete</a>
          
              </td>
             
            
            </tr>
            @endforeach
          </table>
         
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->

   <span>
    {{$courses->links()}}
  </span>
  <style>
    .w-5{
      margin-top: 20px;
      display:none;
    }
  </style>
@endsection
