@extends('layouts.Master')

@section('title', 'Manage')

@section('content')
<div class="container" style="padding-top: 90px" >
    <div class="textCake text-warning" style="padding-top: 10px">
        <p>MASUKKAN DATA</p>
      </div>
    <form action="/KelolaUser/create" method="post">
        @csrf
        <div class="form-group text-warning">
            <label for="name">Name</label>
            <input type="text" class="form-control"
            required="required" name="name"></br>
        </div>
    <hr style="background-color: orangered" > 

    <div class="form-group text-warning">  
        <label for="name">E-mail</label>
        <input type="text" class="form-control"
            required="required" name="name">
    <hr style="background-color: orangered">
            <label for="password">Password</label>
            <input type="password" class="form-control text-warning"
            required="required" name="password"></br>
        </div>
        <div class="form-group text-warning">
            <label for="roles">Roles</label>
            <input type="text" class="form-control"
            required="required" name="roles"></br>
        </div>

        <button type="submit" name="add" class="btn btn-warning float-right" style="margin-bottom: 90px">Tambah Data</button>
    </form>
</div> 
@endsection