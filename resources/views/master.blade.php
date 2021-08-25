<!DOCTYPE html>
<html>
<head>
    <title>LMS!Learning Management System</title>
    @include('partials.style')
</head>
<div class="wrapper">

    <!-- <h2>This is the text</h2> -->
      @include('partials.nav')

      @yield('content')
</div>  


  @include('partials.footer')

</body>
</html>