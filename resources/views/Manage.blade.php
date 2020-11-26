@extends('layouts.Master')

@section('title', 'Kelola')

@section('content')

<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p>TABEL</p>
      </div>
    <table class="table table-bordered table-striped" style="text-align: center" >
        <thead>
        <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
        @foreach($article as $a)
        <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->title}}</td>
        <td>{{$a->created_at}}</td>
        <td><a href="manage/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
            <a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
            <a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>

        </td>
        
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="manage/add" class="btn btn-dark float-right">Tambah Data</a>
</div>
@endsection 