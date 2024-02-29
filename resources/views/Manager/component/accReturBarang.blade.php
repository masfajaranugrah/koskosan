@foreach ($returBarangs as $item)
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Alasan Ditolak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('retur-barang-ditolak-manager', $item->id)}}" method="POST" id="myForm">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="alasan_penolakan" name="alasan_penolakan" value="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearFormFields()">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@extends('layouts.app')
@section('title','Acc Retur Barang')
@section('logoText','Manager Gudang')
@section('logoTextSub','MG')
@include('manager.ManagerDashboard._side')
@section('main')
<div class="card mt-3">
    <div class="col-12 col-md-6 col-lg-12 mt-3">
           <div class="card-body p-0">
             <div>
               <table id="data-tables" class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="centerText">Nama Pengambil</th>
                                <th class="centerText">Nama Barang</th>
                                <th class="centerText">Jumlah Pengembalan</th>
                                <th class="centerText">Tanggal Pengembalian</th>
                                <th class="centerText">Status</th>
                                <th class="centerText">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($returBarangs as $item)
                                <tr class="centerText">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->pengambilanBarang->barang->nama }}</td>
                                    <td>{{ $item->jumlah_pengembalian }}</td>
                                    <td>{{ $item->tanggal_pengembalian }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        @if ($item->status === 'menunggu disetujui')
                                        <form method="POST" action="{{route('retur-barang-disetujui-manager', $item->id)}}">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-lg" style="width:150px;">Disetujui</button>
                                        </form>
                                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#formModal" style="width:150;">Ditolak</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection
