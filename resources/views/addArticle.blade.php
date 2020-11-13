@extends('layouts.Master')

@section('title','Kelola')
   
@section('content')
    

 <!-- Page Content -->
 <div class="container" style="margin: 30px auto;">
    <form action="/article/create" method="post">
        @csrf
        <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control"
        required="required" name="title"></br>
        </div>
        <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control"
        required="required" name="content"></br>
        </div>
        <div class="form-group">
        <label for="image">Feature Image</label>
        <input type="file" class="form-control"
        required="required" name="image"></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>

        <form action="/article/create" method="post" enctype="multipart/form-data">

    </form>
  </div>
  @endsection