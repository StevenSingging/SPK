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
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($pst as $pn)
                  <tr align="center">
                  <th scope="row"><?php echo e($no++) + (($pst->currentPage()-1) * $pst->perPage()) ?></th>
                  <td>{{$pn->nis}}</td>
                  <td>{{$pn->name}}</td>
                  <td>{{$pn->penghasilan_ortu}}</td>
                  <td>{{$pn->listrik}}</td>
                  <td>{{$pn->kendaraan}}</td>
                  <td>{{$pn->rata_nilai}}</td>
                  <td>{{$pn->tahun_lulus}}</td>
                  <td>{{$pn->luas_tanah}}</td>
                  <td>{{$pn->jml_tanggungan}}</td>
                  @endforeach
                  </tbody>
                  <thead>
                  <tr align="center">
                    <th colspan="3">Nilai Standar</th>
                    <th>3</th>
                    <th>3</th>
                    <th>3</th>
                    <th>3</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($plz as $pl)
                  <tr align="center">
                  <th scope="row"><?php echo e($no++) + (($plz->currentPage()-1) * $plz->perPage()) ?></th>
                  <td>{{$pl->peserta->nis}}</td>
                  <td>{{$pl->peserta->name}}</td>
                  <td>{{$pl->A1}}</td>
                  <td>{{$pl->A2}}</td>
                  <td>{{$pl->A3}}</td>
                  <td>{{$pl->A4}}</td>
                  <td>{{$pl->A5}}</td>
                  <td>{{$pl->A6}}</td>
                  <td>{{$pl->A7}}</td>
                  @endforeach
                  </tbody>
                  </table>
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
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>     
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($bbt as $bt)
                  <tr align="center">
                  <th scope="row"><?php echo e($no++) + (($bbt->currentPage()-1) * $bbt->perPage()) ?></th>
                  <td>{{$bt->user->nis}}</td>
                  <td>{{$bt->user->name}}</td>
                  <td>{{$bt->A1}}</td>
                  <td>{{$bt->A2}}</td>
                  <td>{{$bt->A3}}</td>
                  <td>{{$bt->A4}}</td>
                  <td>{{$bt->A5}}</td>
                  <td>{{$bt->A6}}</td>
                  <td>{{$bt->A7}}</td>
                  @endforeach
                  </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead >
                  <tr align="center">
                    <th rowspan="2">No</th>
                    <th rowspan="2">NIS</th>
                    <th rowspan="2">Nama Peserta</th>
                    <th colspan="2">Hasil Perhitungan</th>
                    <th rowspan="2">Hasil Akhir</th>
                  </tr>
                  <tr align="center">
                    <th>CF</th>
                    <th>SF</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($hsl as $hs)
                  <tr align="center">
                  <th scope="row"><?php echo e($no++) + (($hsl->currentPage()-1) * $hsl->perPage()) ?></th>
                  <td>{{$hs->calon->nis}}</td>
                  <td>{{$hs->calon->name}}</td>
                  <td>{{$hs->CF}}</td>
                  <td>{{$hs->SF}}</td>
                  <td>{{$hs->total}}</td>
                  @endforeach
                  </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection