<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">

         
          <a class="nav-link" href="{{ route('category.create') }}" >Add Category</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="{{ route('category_list') }}">Category List</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="{{ route('course.create') }}" >Add Course</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="{{ route('course_list') }}">Course List</a>
        </li>
         <li class="nav-item">

          <a class="nav-link" href="{{ route('content.create') }}" >Add Content</a>
        </li>  
        <li class="nav-item">

          <a class="nav-link" href="{{ route('content_list') }}">Content List</a>
        </li> 
        

        
        
      </ul>
      <form class="d-flex margin-right-100">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav mr-auto"></ul>
      <ul class="nav navbar-nav navbar-right">






      </ul>
    </div>
  </div>
</nav>