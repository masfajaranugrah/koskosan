@if (session('success'))
    <div class="alert z-3 " role="alert" id="alert">
        <div class="setmolder alert-success">
            {{ toastr()->success('success') }}
        </div>
    </div>
@endif
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('simpan-type-kamar')}}" method="POST" id="myForm">
                    @csrf

                    <div class="form-group">
                        <label for="kos">Kos</label>
                        <select class="form-control" name="kos" id="kos">
                            <option value="">Pilih Nama kos yang ingin di lengkapi ketersedian kamar, dll</option>
                            @foreach ($Koss as $mykos)
                                <option value="{{ $mykos->id }}" {{ old('Kos') == $mykos->id ? 'selected' : null }}>
                                    {{ $mykos->kategori->nama_kos }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jm_kamar_luar">Jumlah Kamar Luar</label>
                        <input type="number" class="form-control" placeholder="1" id="jm_kamar_luar"
                            name="jm_kamar_luar" value="">
                    </div>

                    <div class="form-group">
                        <label for="km_kamarkosong_luar">Jumlah Kamar Kosong Luar</label>
                        <input type="number" class="form-control" placeholder="2" id="km_kamarkosong_luar"
                            name="km_kamarkosong_luar" value="">
                    </div>

                    <div class="form-group">
                        <label for="jm_kamar_dalam">Jumlah Kamar Dalam</label>
                        <input type="number" class="form-control" placeholder="3" id="jm_kamar_dalam" name="jm_kamar_dalam" value="">
                    </div>

                    <div class="form-group">
                        <label for="km_kamarkosong_dalam">Jumlah Kamar Kosong Dalam</label>
                        <input type="number" class="form-control" placeholder="4" id="km_kamarkosong_dalam"
                            name="km_kamarkosong_dalam" >
                    </div>


                    <div class="form-group">
                        <label for="fasilitas_bersama_luar">fasilitas bersama kamar luar</label>
                        <input type="hidden" class="form-control"  id="fasilitas_bersama_luar"
                            name="fasilitas_bersama_luar">
                        <trix-editor input="fasilitas_bersama_luar"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label for="fasilitas_km_luar">fasilitas kamar luar</label>
                        <input type="hidden" class="form-control"  id="fasilitas_km_luar"
                            name="fasilitas_km_luar" >
                        <trix-editor input="fasilitas_km_luar"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas_bersama_dalam">fasilitas bersama kamar dalam</label>
                        <input type="hidden" class="form-control"  id="fasilitas_bersama_dalam"
                            name="fasilitas_bersama_dalam" >
                        <trix-editor input="fasilitas_bersama_dalam"></trix-editor>

                    </div>
                    <div class="form-group">
                        <label for="fasilitas_km_dalam">fasilitas kamar dalam</label>
                        <input type="hidden" class="form-control"  id="fasilitas_km_dalam"
                            name="fasilitas_km_dalam" >
                        <trix-editor input="fasilitas_km_dalam"></trix-editor>

                    </div>

                    <div class="form-group">
                        <label for="harga_thn_luar">Harga tahunan kamar Luar</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_thn_luar"
                            name="harga_thn_luar" value="">
                    </div>
                    <div class="form-group">
                        <label for="harga_bln_luar">Harga bulanan Kamar Luar</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_luar"
                            name="harga_bln_luar" value="">
                    </div>
                    <div class="form-group">
                        <label for="harga_thn_dalam">Harga tahunan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_thn_dalam"
                            name="harga_thn_dalam" value="">
                    </div>
                    <div class="form-group">
                        <label for="harga_bln_dalam">Harga bulanan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_dalam"
                            name="harga_bln_dalam" value="">
                    </div>

                    <div class="form-group">
                        <label for="harga_bln_dalam">Harga bulanan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_dalam"
                            name="harga_bln_dalam" value="">
                    </div>

                    <div class="form-group">
                        <label for="harga_bln_dalam">Harga bulanan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_dalam"
                            name="harga_bln_dalam" value="">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="clearFormFields()">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Modal edit -->
 @foreach ($type_kamars as $type)
<div class="modal fade" id="edit-modal-{{ $type->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('edit-type', $type->id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="kos">Kos</label>
                        <select class="form-control" name="kos" id="kos">
                            <option value="{{ old('kos') == $mykos->id ? 'selected' : null }}"></option>
                            @foreach ($Koss as $mykos)
                                <option value="{{ $mykos->id }}" {{ old('kos') == $mykos->id ? 'selected' : null }}>
                                    {{ $mykos->kategori->nama_kos }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="jm_kamar_luar">Jumlah Kamar Luar</label>
                        <input type="number" class="form-control" placeholder="1" id="jm_kamar_luar"
                            name="jm_kamar_luar" value="{{ $type->jm_kamar_luar }}">
                    </div>

                    <div class="form-group">
                        <label for="km_kamarkosong_luar">Jumlah Kamar Kosong Luar</label>
                        <input type="number" class="form-control" placeholder="2" id="km_kamarkosong_luar"
                            name="km_kamarkosong_luar" value="{{  $type->km_kamarkosong_luar }}">
                    </div>

                    <div class="form-group">
                        <label for="jm_kamar_dalam">Jumlah Kamar Dalam</label>
                        <input type="number" class="form-control" placeholder="3" id="jm_kamar_dalam"
                        name="jm_kamar_dalam" value="{{  $type->jm_kamar_dalam }}">
                    </div>

                    <div class="form-group">
                        <label for="km_kamarkosong_dalam">Jumlah Kamar Kosong Dalam</label>
                        <input type="number" class="form-control" placeholder="4" id="km_kamarkosong_dalam"
                            name="km_kamarkosong_dalam" value="{{  $type->km_kamarkosong_dalam }}" >
                    </div>


                    <div class="form-group">
                        <label for="fasilitas_bersama_luar">fasilitas bersama kamar luar</label>
                        <input type="hidden" class="form-control" id="sss" name="fasilitas_bersama_luar" value="<?= htmlspecialchars($type->fasilitas_bersama_luar) ?>">
                        <trix-editor input="sss"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label for="fasilitas_km_luar">fasilitas kamar luar</label>
                        <input type="hidden" class="form-control" id="ssa" name="fasilitas_km_luar" value="<?= htmlspecialchars($type->fasilitas_km_luar) ?>"
                            >
                        <trix-editor input="ssa"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label for="fasilitas_bersama_dalam">fasilitas bersama kamar dalam</label>
                        <input id="fsd" type="hidden" name="fasilitas_bersama_dalam" value="<?= htmlspecialchars($type->fasilitas_bersama_dalam) ?>">
                        <trix-editor input="fsd"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label for="fasilitas_km_dalam">fasilitas kamar dalam</label>
                        <input type="hidden"  id="fkd" name="fasilitas_km_dalam" value="<?= htmlspecialchars($type->fasilitas_km_dalam) ?>">
                        <trix-editor input="fkd"></trix-editor>
                    </div>

                    <div class="form-group">
                        <label for="harga_thn_luar">Harga tahunan kamar Luar</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_thn_luar"
                            name="harga_thn_luar" value="{{  $type->harga_thn_luar }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_bln_luar">Harga bulanan Kamar Luar</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_luar"
                            name="harga_bln_luar" value="{{ $type->harga_bln_luar }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_thn_dalam">Harga tahunan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_thn_dalam"
                            name="harga_thn_dalam" value="{{  $type->harga_thn_dalam }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_bln_dalam">Harga bulanan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_dalam"
                            name="harga_bln_dalam" value="{{ $type->harga_bln_dalam }}">
                    </div>

                    <div class="form-group">
                        <label for="harga_bln_dalam">Harga bulanan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_dalam"
                            name="harga_bln_dalam" value="{{  $type->harga_bln_dalam }}">
                    </div>

                    <div class="form-group">
                        <label for="harga_bln_dalam">Harga bulanan kamar dalam</label>
                        <input type="number" class="form-control" placeholder="1" id="harga_bln_dalam"
                            name="harga_bln_dalam" value="{{ $type->harga_bln_dalam }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@extends('layouts.app')
@section('title', 'Input Barang')
@section('logoText','Admin Kos')
@section('logoTextSub','AK')
@include('Admin.AdminDashboard._side')
@section('main')

    <div class="card">
        <div class="col-12 col-md-6 col-lg-12">
            <div>
                <div class="card-header justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah
                        Barang</button>
                </div>
                <div class="card-body p-0">
                    <div>
                        <table id="data-tables" class="table table-striped table-bordered table-responsive"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="centerText">No</th>
                                    <th class="centerText">Nama Kos</th>
                                        <th class="centerText">jumlah kamar dalam</th>
                                       <th class="centerText">jumlah kamar kosong dalam</th>
                                       <th class="centerText">jumlah kamar luar</th>
                                       <th class="centerText">jumlah kamar kosong luar</th>
                                       <th class="centerText">fasilitas bersama dalam</th>
                                       <th class="centerText">fasilitas kamar dalam</th>
                                       <th class="centerText">fasilitas bersama luar</th>
                                       <th class="centerText">fasilitas kamar luar</th>
                                       <th class="centerText">harga tahunan kamar luar</th>
                                       <th class="centerText">harga bulanan kamar lar</th>
                                       <th class="centerText">harga tahunan bersama luar</th>
                                       <th class="centerText">haraga bulanan kamar luar</th>
                    <th class="centerText">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                  @foreach ($type_kamars as $type)
                  <tr class="centerText">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$type->kos->kategori->nama_kos}}</td>
                    <td>{{$type->jm_kamar_dalam}}</td>
                    <td>{{$type->km_kamarkosong_dalam}}</td>
                    <td>{{$type->jm_kamar_luar}}</td>
                    <td>{{$type->km_kamarkosong_luar}}</td>
                    <td>{!! $type->fasilitas_bersama_dalam !!}</td>
                    <td>{!! $type->fasilitas_km_dalam !!}</td>
                    <td>{!! $type->fasilitas_bersama_luar !!}</td>
                    <td>{!! $type->fasilitas_km_luar !!}</td>
                    <td>{{$type->harga_thn_dalam}}</td>
                    <td>{{$type->harga_bln_dalam}}</td>
                    <td>{{$type->harga_thn_luar}}</td>
                    <td>{{$type->harga_bln_luar}}</td>


                          <td style="text-align:center">
                                        <button href="#" class="btn btn-warning" style="width:100px">
                                            <a href="" class='text-white' data-toggle="modal"
                                                data-target="#edit-modal-{{ $type->id }}"><i
                                                    class="far fa-edit mr-3"></i>Edit</a>
                                        </button>
                                        <button class="btn btn-danger" style="width:100px">
                                            <a href="{{ route('hapus-type',$type->id) }}"
                                                class='text-white confirm-delete'><i
                                                    class="far fa-trash-alt mr-2"></i>Hapus</a>
                                        </button>
                                    </td>
                  </tr>
                  @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
