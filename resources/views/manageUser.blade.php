@extends('layouts.Master')

@section('title', 'Manage')

@section('content')

<div class="container" style="padding-top: 100px">
    <div class="textCake text-warning" style="padding-top: 30px">
        <p>TABEL</p>
      </div>
    <table class="table table-bordered table-striped text-warning" style="text-align: center" >
        <thead>
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Roles</th>
        <th><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $u)
        <tr>
        <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->password}}</td>
        <td>{{$u->roles}}</td>
        <td><a href="manageUser/editUser/{{ $u->id }}" class="badge badge-warning ">Edit</a>
            <a href="manageUser/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a>
        </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="manageUser/addUser" class="btn btn-warning float-right">Tambah Data</a>
</div>
@endsection 