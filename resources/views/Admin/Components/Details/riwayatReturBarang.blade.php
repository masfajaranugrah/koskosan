@extends('layouts.app')
@section('title','Riwayat Retur Barang')
@section('logoText','Admin Gudang')
@section('logoTextSub','AG')
@include('Admin.AdminDashboard._side')
@section('main')
<div class="card">
    <div class="col-12 col-md-6 col-lg-12 mt-3">
        <div class="card-body p-0">
            <table id="data-tables" class="table table-striped table-responsive table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th class="centerText">No</th>
                        <th class="centerText">Nama</th>
                        <th class="centerText">Nama Barang</th>
                        <th class="centerText">Jumlah Dikembalikan</th>
                        <th class="centerText">Alasan Dikembalikan</th>
                        <th class="centerText">Tanggal Dikembalikan</th>
                        <th class="centerText">Gambar</th>
                        <th class="centerText">Status</th>
                        <th class="centerText">Disetujui Oleh</th>
                        <th class="centerText">Ditolak Oleh</th>
                        <th class="centerText">Alasan Penolakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($returBarangs as $item)
                        <tr class="centerText">
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->pengambilanBarang->barang->nama }}</td>
                            <td>{{ $item->jumlah_pengembalian }}</td>
                            <td>{{ $item->alasan_pengembalian }}</td>
                            <td>{{ $item->tanggal_pengembalian }}</td>
                            <td>
                                <img src="{{ asset('storage/post-retur-gambar/' . $item->gambar) }}" alt="{{$item->gambar}}" class="img-fluid chocolat-image" width="100">
                            </td>
                            <td>
                                @php
                                $statusClass = [
                                    'menunggu disetujui' => 'btn-warning',
                                    'disetujui' => 'btn-success',
                                    'ditolak' => 'btn-danger',
                                ][$item->status];
                            @endphp
                            <span class="btn {{ $statusClass }} m-2 p-2" style="width:150px;">{{ $item->status }}</span>
                            </td>
                            <td>{{ $item->approved_by ?? '-' }}</td>
                            <td>{{ $item->rejected_by ?? '-' }}</td>
                            <td>{{ $item->alasan_penolakan ?? '-'}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
