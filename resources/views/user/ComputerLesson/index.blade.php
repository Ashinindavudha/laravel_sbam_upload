
@extends('user.include.app')
<body>

   @section('main-content')
<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        @foreach($lessons as $post)
        <div class="card mb-4">
          
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <a href="{{ route('computerlesson.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
            
            
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $post->created_at->diffForHumans() }} by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @endforeach
        <!-- Pagination -->
        <div class="clearfix">
          {{ $lessons->links() }}
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="text-align: center; font-size: 40px; color: #228B22;">Study More Here!</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{url('/phpprogramming')}}">PhP Programming </a>
                  </li>
                  <li>
                    <a href="{{url('/assignment')}}">C++ Programming</a>
                  </li>
                  <li>
                    <a href="{{url('/assignment')}}">Android Programming</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body" style="background-color: #262626;">
             @include('user.include.datetime')
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
</body>

</html>
