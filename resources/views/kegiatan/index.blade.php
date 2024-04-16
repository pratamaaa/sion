@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
        <!-- SidebarSearch Form -->
      <nav class="navbar navbar-light bg-light justify-content-between">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
        </form>
      </nav>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="example2" class="table table-bordered table-hover" width="800px">
                  <thead>
                  <tr>
                    <th rowspan="2" style="text-align:center" width="auto">No</th>
                    <th rowspan="2" style="text-align:center" width="150px">No Undangan</th>
                    <th rowspan="2" style="text-align:center" width="150px">Tanggal</th>
                    <th rowspan="2" style="text-align:center" width="300px">Judul Kegiatan</th>
                    <th rowspan="2" style="text-align:center" width="200px">Narasumber</th>
                    <th colspan="3" style="text-align:center" width="50px">Status</th>
                    <!-- <th rowspan="2" style="text-align:center" width="200px">Aksi</th> -->
                  </tr>
                  <tr>
                    <th style="text-align:center">Input Data</th>
                    <th style="text-align:center">Transfer</th>
                    <th style="text-align:center">Verifikasi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_kegiatan as $d)
                    <tr>
                        <td style="text-align:center">{{ $loop->iteration }}</td>
                        <td style="text-align:left">{{$d->no_und}}</td>
                        <td style="text-align:center">{{$d->tanggal}}</td>
                        <td style="text-align:left">{{$d->nama_kegiatan}}</td>
                        <td style="text-align:left">{{$d->nama_narsum}}</td>
                        <td style="text-align:center">{{$d->name}}</td>
                        <td style="text-align:center">{{$d->name}}</td>
                        <td style="text-align:center">{{$d->name}}</td>
                        <!-- <td style="text-align:center">
                            <a href="" class="btn btn-primary">
                                <i class="fas fa-search" title="Detail Usulan"></i>
                            </a>
                            <a href="" class="btn btn-info">
                                <i class="fas fa-user" title="Matriks Narsum"></i>
                            </a>
                            <a href="" class="btn btn-success" title="Input Bukti Transfer">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="" class="btn btn-danger" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td> -->
                    </tr>
                    @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection