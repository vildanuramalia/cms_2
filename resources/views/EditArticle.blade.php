@extends('layouts.Master')

@section('title',' Edit ')
    
@section('content')
    

 <!-- Page Content -->
 <div class="container">

<form action="/manage/update/{{$article->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$article->id}}"></br>
    <div class="form-group">
    <label for="title">Judul</label>
    <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
    </div>
    <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
    </div>
    <div class="form-group">
    <label for="image">Feature Image</label>
    <input type="file" class="form-control" required="required" name="image"></br>
    <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
    </div>
    <button type="submit" name="edit" class="btn btn-primary">Ubah Data</button>
 </form>
 <br>
</div>
@endsection