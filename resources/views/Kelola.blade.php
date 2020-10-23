@extends('layouts.Master')

@section('title',' Kelola ')
    
@section('content')
    

 <!-- Page Content -->
 <div class="container" style="margin: 30px auto;">
 <a href="manage/add" class="btn btn-primary" style="margin-bottom: 15px;">Tambah Data</a>

 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>No</th>
 <th>Judul</th>
 <th>Tanggal</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach($article as $a)
 <tr>
 <td>{{$a->id}}</td>
 <td>{{$a->title}}</td>
 <td>{{$a->created_at}}</td>
 <td>
 <a href="article/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
 <a href="article/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a>
</td>
 
 </tr>
 @endforeach
 </tbody>
</table>


  </div>
  @endsection