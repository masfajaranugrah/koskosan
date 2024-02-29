@extends('layouts.app')
@section('title','Input Barang')
@section('logoText','Admin Kos')
@section('logoTextSub','AK')
@include('Admin.AdminDashboard._side')
@section('main')

        <div class="modal-body">
        <form action="{{route('create-banner')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div  class="form-group">
                    <label for="nama">Judul banner</label>
            <input type="text" class="form-control" value=" " id="judul_banner" name="judul_banner">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" placeholder="Contoh : lorem more" id="deskripsi_banner" name="deskripsi_banner" value=" ">
            </div>
            <div class="form-group">
                <label for="deskripsi">link button1</label>
                <input type="text" class="form-control" placeholder="Contoh : lorem more" id="link_button1" name="link_button1" value=" ">
            </div>
            <div class="form-group">
                <label for="deskripsi">link button2</label>
                <input type="text" class="form-control" placeholder="Contoh : lorem more" id="link_button2" name="link_button2" value=" ">
            </div>
            <div class="form-group">
                <label for="deskripsi">nama_button1</label>
                <input type="text" class="form-control" placeholder="Contoh : lorem more" id="nama_button1" name="nama_button1" value=" ">
            </div>
            <div class="form-group">
                <label for="deskripsi">nama_button2</label>
                <input type="text" class="form-control" placeholder="Contoh : lorem more" id="nama_button2" name="nama_button2" value=" ">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">

            </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearFormFields()">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
            </div>
@foreach($barang as $barangs)
                <form action="{{ route('update-banner', $barangs->id) }}" id="update-banner-{{ $barangs->id }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Judul banner</label>
                        <input type="text" class="form-control" value="{{ $barangs->judul_banner }}" id="judul_banner" name="judul_banner">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" placeholder="Contoh : lorem more" id="deskripsi_banner" name="deskripsi_banner" value="{{ $barangs->deskripsi_banner }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">link button1</label>
                            <input type="text" class="form-control" placeholder="Contoh : lorem more" id="link_button1" name="link_button1" value="{{ $barangs->link_button1 }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">link button2</label>
                            <input type="text" class="form-control" placeholder="Contoh : lorem more" id="link_button2" name="link_button2" value="{{ $barangs->link_button2 }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">nama_button1</label>
                            <input type="text" class="form-control" placeholder="Contoh : lorem more" id="nama_button1" name="nama_button1" value="{{ $barangs->nama_button1}}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">nama_button2</label>
                            <input type="text" class="form-control" placeholder="Contoh : lorem more" id="nama_button2" name="nama_button2" value="{{ $barangs->nama_button2 }}">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                            @if ($barangs->gambar)
                                <div class="mt-2">
                                    <strong>Gambar Sebelumnya:</strong>
                                    <br>
                                    <img src="{{ asset('storage/post-barang-gambar/' . $barangs->gambar) }}" alt="Gambar Barang" width="100">
                                </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save change</button>

                        </div>
                </form>

@endforeach
@endsection
