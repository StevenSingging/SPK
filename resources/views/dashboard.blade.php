@extends('welcome')
<title> Dashboard</title>
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <div class="row">
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h3></h3>
                
                <p>Data Peserta</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('peserta')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3></h3>

                <p>Data Kriteria</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('kriteria')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Data Penilaian</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('penilaian')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
       
        <!-- /.row -->
        <!-- Main row -->
      
      </div>
      <!-- Main content -->
   
      
      </div>
      </div>    
@endsection