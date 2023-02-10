@extends('layouts.master')
@section('judul', 'Edit costumer')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Costumer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Costumer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">

        <form method="POST" action="/costumer/{{$costumer->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" value="{{$costumer->nama}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="text" name="alamat" value="{{$costumer->alamat}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Hp</label>
              <input type="text" name="no_hp" value="{{$costumer->no_hp}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Paket</label>
              <select name="nama_paket" value="{{$costumer->nama_paket}}" class="form-control" id="">
                <option value="">-Pilih Paket-</option>
                @foreach($paket as $data)
                <option value="{{$data->id}}"> {{$data->kode}} - {{$data->nama_paket}} - {{$data->harga}} </option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Hair Artis</label>
              <select name="hair_artis" class="form-control" id="">
                <option value="">-Pilih Hair Artis-</option>
                @foreach($hairartis as $data)
                <option value="{{$data->id}}">{{$data->nama}} - {{$data->no_hp}}</option>
                @endforeach
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    </section>
    @endsection