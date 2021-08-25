@extends('master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
         Category List
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Category Title</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
              <?php $i=0; ?>
            @foreach($categories as $category)
            <tr>
              <td>{{  ++$i }}</td>
              <td>{{ $category->title }}</td>
              <td>{{ $category->status }}</td>
          
              <td><a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Edit</a>

                 <a href="/delete/{{$category->id}}" class="btn btn-danger">delete</a>
          
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
    {{$categories->links()}}
  </span>
  <style>
    .w-5{
      margin-top: 20px;
      display:none;
    }
  </style>
@endsection
