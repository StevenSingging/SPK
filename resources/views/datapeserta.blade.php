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
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Data Peserta</li>
            </ol>
          </div>
        </div>
      </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <nav class="navbar navbar-light">
                    <a class="btn btn-secondary" role="button" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
                </nav>
            </div>
                <div class="card-body">  
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Penghasilan Ortu</th>
                    <th>Daya Listrik</th>
                    <th>Jumlah Kendaraan</th>
                    <th>Rata-Rata Nilai</th>
                    <th>Tahun Lulus</th>
                    <th>Luas Tanah</th>
                    <th>Jumlah Tanggungan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($pst as $p)
                  <tr align="center">
                  <th scope="row"><?php echo e($no++) + (($pst->currentPage()-1) * $pst->perPage()) ?></th>
                  <td>{{$p->name}}</td>
                  @if($p->penghasilan_ortu == 1)
                  <td>>=5.000.000</td>
                  @endif
                  @if($p->penghasilan_ortu == 2)
                  <td>>=3.500.000</td>
                  @endif
                  @if($p->penghasilan_ortu == 3)
                  <td>>=2.500.000</td>
                  @endif
                  @if($p->penghasilan_ortu == 4)
                  <td>< 2.500.000</td>
                  @endif
                  @if($p->listrik == 1)
                  <td>>= 2.200 watt</td>
                  @endif
                  @if($p->listrik == 2)
                  <td>1.300 watt</td>
                  @endif
                  @if($p->listrik == 3)
                  <td>900 watt</td>
                  @endif
                  @if($p->listrik == 4)
                  <td>450 watt</td>
                  @endif
                  @if($p->kendaraan == 1)
                  <td>>=5</td>
                  @endif
                  @if($p->kendaraan == 2)
                  <td>>=3</td>
                  @endif
                  @if($p->kendaraan == 3)
                  <td>>=2</td>
                  @endif
                  @if($p->kendaraan == 4)
                  <td><=1</td>
                  @endif
                  @if($p->rata_nilai == 1)
                  <td>>=7.50</td>
                  @endif
                  @if($p->rata_nilai == 2)
                  <td><=7.50</td>
                  @endif
                  @if($p->tahun_lulus == 1)
                  <td>2022</td>
                  @endif
                  @if($p->tahun_lulus == 2)
                  <td>2021</td>
                  @endif
                  @if($p->tahun_lulus == 3)
                  <td>2020</td>
                  @endif
                  @if($p->luas_tanah == 1)
                  <td>>=596 m2</td>
                  @endif
                  @if($p->luas_tanah == 2)
                  <td>>=285 m2</td>
                  @endif
                  @if($p->luas_tanah == 3)
                  <td>>=144 m2</td>
                  @endif
                  @if($p->luas_tanah == 4)
                  <td><=72 m2</td>
                  @endif
                  @if($p->jml_tanggungan == 1)
                  <td><=2</td>
                  @endif
                  @if($p->jml_tanggungan == 2)
                  <td><=3</td>
                  @endif
                  @if($p->jml_tanggungan == 3)
                  <td><=4</td>
                  @endif
                  @if($p->jml_tanggungan == 4)
                  <td><=1</td>
                  @endif
                  </tr>
                  @endforeach
                  </tbody>
                  </table>
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Input Data Calon Peserta</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        </div>
                      <form action="{{route('simpandata')}}" method="post">
                      {{ csrf_field() }}
                        <div class="modal-body">
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="number" name="nis" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Penghasilan Orang Tua</label>
                            <select class="custom-select form-control-border" name="penghasilan_ortu">
                            <option selected="selected">Pilih Penghasilan</option>
                                <option value="1">>=5.000.000 </option>
                                <option value="2">>=3.500.000 </option>
                                <option value="3">>=2.500.000 </option>
                                <option value="4">< 2.500.000 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Daya Listrik</label>
                            <select class="custom-select form-control-border" name="listrik">
                            <option selected="selected">Pilih Daya Listrik</option>
                                <option value="1">>= 2.200 watt </option>
                                <option value="2">1.300 watt </option>
                                <option value="3">900 watt </option>
                                <option value="4">450 watt </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kendaraan</label>
                            <select class="custom-select form-control-border" name="kendaraan">
                            <option selected="selected">Pilih Jumlah Kendaraan</option>
                                <option value="1">>=5 </option>
                                <option value="2">>=3 </option>
                                <option value="3">>=2 </option>
                                <option value="4"><=1 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rata-Rata Nilai Semester 5</label>
                            <select class="custom-select form-control-border" name="rata_nilai">
                            <option selected="selected">Pilih Jumlah Kendaraan</option>
                                <option value="1">>=7.50 </option>
                                <option value="2"><=7.50 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <select class="custom-select form-control-border" name="tahun_lulus">
                            <option selected="selected">Pilih Tahun Lulus</option>
                                <option value="1">>2022 </option>
                                <option value="2">2021 </option>
                                <option value="3">2020 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Luas Tanah</label>
                            <select class="custom-select form-control-border" name="luas_tanah">
                            <option selected="selected">Pilih Luas Tanah</option>
                                <option value="1">>=596 m2 </option>
                                <option value="2">>=285 m2 </option>
                                <option value="3">>=144 m2 </option>
                                <option value="4"><=72 m2 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Tanggungan</label>
                            <select class="custom-select form-control-border" name="jml_tanggungan">
                            <option selected="selected">Pilih Tanggungan</option>
                                <option value="1"><=2 </option>
                                <option value="2"><=3 </option>
                                <option value="3"><=4 </option>
                                <option value="4">>=5 </option>
                            </select>
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
@include('sweetalert::alert')
@endsection