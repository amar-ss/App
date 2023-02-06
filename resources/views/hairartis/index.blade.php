@extends('layouts.master')
@section('judul', 'hair artis')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hair Artis</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
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
        <a href="/hairartis/form" class="btn btn-primary">Tambah Data</a>

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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No Hp</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>            
              </tr>
            </thead>
            <tbody>
                @foreach ($hairartis as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->no_hp}}</td>
                    <td>{{$item->harga}}</td>
                    <td>
                        <a href="/hairartis/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
                        <a href="/hairartis/hapus/{{$item->id}}" class="btn btn-sm btn-danger">hapus</a>
                    </td>
                  </tr>
                @endforeach
              
             
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection
