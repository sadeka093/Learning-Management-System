@extends('master')
@section('content')
<!-- Start sidebar+content part -->
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
        @include('partials.left_sidebar')
    </div>

    <div class="col-md-8">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
  <!-- end sidebar+content part -->
  @endsection