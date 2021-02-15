@extends('layout.main')

@section('title','Edit Data')

@section('content')
<div class="position">
<div class="container col-6 mt-6">
<form method="post" action="/update/{{$book->id}}">

@csrf
@method('put')

<div class="form-group">
    <label for="judul_buku">Judul buku</label>
    <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" name="judul_buku" placeholder="input book's title " value ="{{ $book->judul_buku}}">
 
    @error('judul_buku')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group">
    <label for="penulis_buku">Penulis Buku</label>
    <input type="text" class="form-control @error('penulis_buku') is-invalid @enderror " id="penulis_buku" name="penulis_buku" placeholder="input author name" value ="{{ $book->penulis_buku}}">

    @error('penulis_buku')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
  </div>

  <div class="form-group">
    <label for="jumlah_halaman">Jumlah Halaman</label>
    <input type="tel" class="form-control @error('jumlah_halaman') is-invalid @enderror" id="jumlah_halaman" name="jumlah_halaman" placeholder="input number of pages" value ="{{ $book->jumlah_halaman}}">
    @error('jumlah_halaman')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
  </div>

  <div class="form-group">
    <label for="tahun_terbit">Tahun Terbit</label>
    <input type="tel" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" placeholder="input release year" value ="{{ $book-> tahun_terbit}}">
    @error('tahun_terbit')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  
  <button type="submit" class="btn btn-primary">submit</button>



</form>
</div>
</div>
@endsection