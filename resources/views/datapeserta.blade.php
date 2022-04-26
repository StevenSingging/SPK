@extends('welcome')
<title>Data Peserta</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Beranda</a></li>
              <li class="breadcrumb-item active">Data Peserta</li>
            </ol>
          </div>
        </div>
      </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <nav class="navbar navbar-light">
                    <a class="btn btn-secondary" role="button" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
                </nav>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Asal Daerah</th>
                    <th>Sekolah</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  </table>
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Input Data Peserta</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        </div>
                      <form action="" method="post">
                      {{ csrf_field() }}
                        <div class="modal-body">
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="complain_msk" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="complain_msk" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Asal Daerah</label>
                            <input type="text" name="complain_msk" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" name="complain_msk" class="form-control" value="">
                        </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                      </div>
                    </div>  
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection