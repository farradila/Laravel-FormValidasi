@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Mahasiswa')

@section('konten')
<a href="/laravel-crud/public/mahasiswa" class="btn btn-danger">Kembali</a>
<br/>
<br/>
    <!-- isi bagian konten -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <!-- form validasi -->
    <form action="/laravel-crud/public/mahasiswa/simpan" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  name="nama" value="{{ old('nama') }}"> <br>
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control"  name="nim" value="{{ old('nim') }}"> <br>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control"  name="email" value="{{ old('email') }}"> <br>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control"  name="jurusan" value="{{ old('jurusan') }}"> <br>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
            <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
@endsection