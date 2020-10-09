@extends('layouts.Master')

@section('title',' Article ')

    
@section('content')
    

 <!-- Page Content -->
 <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Vilda</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 04, 2020 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$article->featured_image}}" alt="">

        <hr>

        <!-- Post Content -->
        {{$article->content}}

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">John</h5>
            I Love We Bare Bears
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Max Caulfield</h5>
            Can't Wait To see WBB every morning

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Kate Mars</h5>
                Me Too
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Victoria</h5>
                Yeah me too
              </div>
            </div>

          </div>
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
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">We Bare Bears Character</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://webarebears.fandom.com/wiki/Grizzly_Bear">Grizz</a>
                  </li>
                  <li>
                    <a href="https://webarebears.fandom.com/wiki/Panda_Bear">Panda</a>
                  </li>
                  <li>
                    <a href="https://webarebears.fandom.com/wiki/Ice_Bear">Ice Bear</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://webarebears.fandom.com/wiki/Chloe_Park">Chloe</a>
                  </li>
                  <li>
                    <a href="https://webarebears.fandom.com/wiki/Dana_Tabes">Tabes</a>
                  </li>
                  <li>
                    <a href="https://webarebears.fandom.com/wiki/Charlie_(character)">Charlie</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">We Bare Bears Fact</h5>
          <div class="card-body">
          ❝	
They weren’t brother's [sic] by birth, but they knew from the start, fate brought them together to be brother's [sic] by heart.

❞
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  @endsection