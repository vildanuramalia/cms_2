@extends('layouts.Master')

@section('title', 'Kelola')

@section('content')

<div class = "col-lg-8">
    <div class = "card-header text-warning">
        <h3>EDIT ARTICLE</h3>
    </div>
    </br>
    </br>
    <form action="/manageUser/update/{{$user->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}"><br>
        <div class="form-group text-warning">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"><br>
        </div>
        <div class="form-group text-warning">
            <label for="email">Email</label>
            <input type="text"  class="form-control" required="required" name="email" value="{{$user->email}}"></br>
        </div>
        <div class="form-group text-warning">
            <label for="password">Password</label>
            <input type="password" class="form-control" required="required" name="password" value="{{$user->password}}"></br>
        </div>
        <div class="form-group text-warning">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles" value="{{$user->roles}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-warning float-right">Ubah Data</button>
    </form>
</div>
@endsection