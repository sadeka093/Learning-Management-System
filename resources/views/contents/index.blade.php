@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
         Content List
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Course ID</th>
              <th>Content Title</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
              <?php $i=0; ?>
            @foreach($contents as $content)
            <tr>
              <td>{{  ++$i }}</td>
              <td>{{ $content->course_id }}</td>
              <td>{{ $content->title }}</td>
              <td>{{ $content->status }}</td>
          
              <td><a href="{{ route('content.edit', $content->id) }}" class="btn btn-success">Edit</a>

                 <a href="/delete/{{$content->id}}" class="btn btn-danger">delete</a>
          
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
    {{$contents->links()}}
  </span>
  <style>
    .w-5{
      margin-top: 20px;
      display:none;
    }
  </style>
@endsection
