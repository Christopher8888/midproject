@extends('layout.main')

@section('title','Create books')

@section('content')

<div class="position">
<div class="container col-6 ">
<form method="post" action="/library">

@csrf

<div class="form-group">
    <label for="judul_buku">Judul buku</label>
    <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" name="judul_buku" placeholder="input book's title " value ="{{ old( 'judul_buku')}}">
 
    @error('judul_buku')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group">
    <label for="penulis_buku">Penulis Buku</label>
    <input type="text" class="form-control @error('penulis_buku') is-invalid @enderror " id="penulis_buku" name="penulis_buku" placeholder="input author name" value ="{{ old( 'penulis_buku')}}">

    @error('penulis_buku')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
  </div>

  <div class="form-group">
    <label for="jumlah_halaman">Jumlah Halaman</label>
    <input type="tel" class="form-control @error('jumlah_halaman') is-invalid @enderror" id="jumlah_halaman" name="jumlah_halaman" placeholder="input number of pages" value ="{{ old( 'jumlah_halaman')}}">
    @error('jumlah_halaman')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
  </div>

  <div class="form-group">
    <label for="tahun_terbit">Tahun Terbit</label>
    <input type="tel" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" name="tahun_terbit" placeholder="input release year" value ="{{ old('tahun_terbit')}}">
    @error('tahun_terbit')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  
  <button type="submit" class="btn btn-primary">submit</button>



</form>
</div>
</div>
@endsection