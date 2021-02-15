@extends('layout.main')

@section('title','Library')

@section('content')

<div class="position">
<div class="container">

<h1>BOOK LIST</h1>

<a href="/create " class="btn btn-primary my-3"> Add book</a>

<!-- Notifikasi -->
 @if (session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
 @endif
  <!-- --- -->


<table class="table table-hover container bg-light ">
  <thead>
    <tr class="title">
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penulis Buku</th>
      <th scope="col">Jumlah Halaman</th>
      <th scope="col">Tahun terbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    @foreach($books as $book)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$book->judul_buku}}</td>
      <td>{{$book->penulis_buku}}</td>
      <td>{{$book->jumlah_halaman}}</td>
      <td>{{$book->tahun_terbit}}</td>
      <td><a href="/edit/{{ $book->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="/delete/{{$book->id}}"><button type="button" class="btn btn-danger">Delete</button</a>
      </td>
    </tr>
 
  </tbody>
  @endforeach
</table>
</div>
</div>
@endsection