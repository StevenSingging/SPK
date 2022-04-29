@extends('welcome')
<title>Data Penilaian</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Data Penilaian</li>
            </ol>
          </div>
        </div>
      </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Peserta</th>
                    <th>Hasil Perhitungan</th>
                    <th>Hasil Akhir</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($pln as $pn)
                  <tr align="center">
                  <th scope="row"><?php echo e($no++) + (($pln->currentPage()-1) * $pln->perPage()) ?></th>
                  <td>{{$pn->peserta->nis}}</td>
                  <td>{{$pn->peserta->name}}</td>
                  <td></td>
                  <td></td>
                  @endforeach
                  </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection