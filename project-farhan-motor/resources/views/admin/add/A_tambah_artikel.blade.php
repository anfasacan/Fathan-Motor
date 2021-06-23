@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Artikel</h4>
  <p class="card-description">
    Tempat menambah data.

    @if(count($errors->all()))
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
              <Strong>Oops!</Strong> {{$error}}
          </div>
      @endforeach
    @endif

    @if(Session::has('success'))
      <div class="alert alert-success text-center">
          <strong>Success!</strong> {{Session::get('success')}}
      </div>
    @endif
  </p>
  <form  method="POST" class="forms-sample" action="/admin_artikel/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">Nomer</label>
      <input type="number" class="form-control" id="id" placeholder="Masukkan Nomer" name="id" value="{{old('id')}}">
    </div>

    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="{{old('judul')}}">
    </div>

    <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{old('tanggal')}}">
    </div>

    <div class="form-group">
      <label for="isi">Isi Paragraf 1</label>
      <textarea class="form-control" id="isi" name="isi" rows="4">{{old('isi')}}</textarea>
    </div>

    <div class="form-group">
      <label for="isi2">Isi Paragraf 2</label>
      <textarea class="form-control" id="isi2" name="isi2" rows="4" placeholder="dikosongkan saja bila tidak ada">{{old('isi2')}}</textarea>
    </div>

    <div class="form-group">
      <label for="isi3">Isi Paragraf 3</label>
      <textarea class="form-control" id="isi3" name="isi3" rows="4" placeholder="dikosongkan saja bila tidak ada">{{old('isi3')}}</textarea>
    </div>

    <div class="form-group">
      <label for="isi4">Isi Paragraf 4</label>
      <textarea class="form-control" id="isi4" name="isi4" rows="4" placeholder="dikosongkan saja bila tidak ada">{{old('isi4')}}</textarea>
    </div>

    <div class="form-group">
      <label for="gambar">File Foto</label>
      <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
    </div>

          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <a href="/admin_artikel" type="button" class="btn btn-success">Kembali!</a>
        </form>
      </div>

@endsection