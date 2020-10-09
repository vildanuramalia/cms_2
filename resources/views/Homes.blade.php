@extends('layouts.Master')

@section('title', 'Home')
    
@section('content')
    

<!-- Page Content -->
<div class="container">
  
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
  
        <h1 class="my-4">We Bare Bears Character</h1>
  
        <!-- Blog Post -->
        @foreach ($article as $artic)
        <div class="card mb-4">
            <img class="card-img-top" src="{{$artic -> featured_image}}" width="640" height="360" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $artic->title }}</h2>
            <p class="card-text">{{ Str::limit($artic->content, 100, '...') }}</p>
                <a href="{{ './article/'.$artic->id }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on September 04, 2020 by Vil
            </div>
        </div>
        @endforeach
  
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
  
      </div>
  
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
  
  
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
          ❝	They weren’t brother's [sic] by birth, but they knew from the start, fate brought them together to be brother's [sic] by heart.❞ 
<p>—Cartoon Network, webarebears.official on Instagram</p>
          </div>
        </div>
  
      </div>
  
    </div>
    <!-- /.row -->
  
  </div>
  @endsection