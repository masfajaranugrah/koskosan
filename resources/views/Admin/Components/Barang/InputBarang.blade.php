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
                <h5 class="modal-title" id="judulModal">Tambah Kos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('simpan-barang') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kategori">Nama Kos</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="">Masukan Nama Kos</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ old('kategori') == $kategori->id ? 'selected' : null }}>{{ $kategori->nama_kos }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Type Kos</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Masukan Kategori Kos</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}"
                                    {{ old('kategori') == $gender->id ? 'selected' : null }}>{{ $gender->gender }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan Barang</label>
                        <select class="form-control" name="satuan" id="satuan">
                            <option value="">Masukan Referensi terdekat kampus</option>
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}"
                                    {{ old('satuan') == $satuan->id ? 'selected' : null }}>{{ $satuan->fakultas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="hidden" class="form-control" placeholder="Contoh : Sapu ijuk" id="deskripsi"
                            name="deskripsi" value="">
                        <trix-editor input="deskripsi" placeholder="Contoh : Sapu ijuk"></trix-editor>

                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Alamat</label>
                        <input type="text" class="form-control" placeholder="Contoh : Sapu ijuk" id="alamat"
                            name="alamat" value="">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">harga pertama</label>
                        <input type="text" class="form-control" placeholder="Contoh : Sapu ijuk" id="harga1"
                            name="harga1" value="">
                    </div>
                    <label>to</label>
                    <div class="form-group">
                        <label for="deskripsi">harga kedua</label>
                        <input type="text" class="form-control" placeholder="Contoh : Sapu ijuk" id="harga2"
                            name="harga2" value="">
                    </div>
                    <div class="form-group">
                        <label for="type_kos">Type kamar dalam, luar</label><br />
                        <label style="color: red">* jika kos tersebut ada kamar dalam dan luar maka isikan dengan
                            2</label><br />
                        <label style="color: red">* jika kos tersebut hanya ada kamar luar maka isikan dengan
                            1</label><br />
                        <input type="number" class="form-control" id="type_kos" name="type_kos" min="0"
                            max='2'>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Banner</label>
                        <input type="file" class="form-control-file" id="banner" name="banner" required>
                    </div>
                    <div class="">
                        <div class="col-lg-12">
                            <div id="row">
                                <div class="input-group m-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                                id="DeleteRow"
                                                type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="file" name="gambar[]" class="form-control m-input">
                                </div>
                            </div>

                            <div id="newinput"></div>
                            <button id="rowAdder" type="button" class="btn btn-dark">
                                <span class="bi bi-plus-square-dotted">
                                </span> ADD
                            </button>
                        </div>
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
@foreach ($kos as $barang)
    <div class="modal fade" id="edit-modal-{{ $barang->id }}" tabindex="-1" role="dialog"
        aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{ route('edit-kos', $barang->id) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kos</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="" {{ old('kategori', $kategori->id) == '' ? 'selected' : '' }}>
                                    Masukan Referensi terdekat kampus
                                </option>
                                @foreach ($kategoris as $nameOption)
                                    <option value="{{ $nameOption->id }}" {{ old('kategori', $kategori->id) == $nameOption->id ? 'selected' : '' }}>
                                        {{ $nameOption->nama_kos }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                       <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="" {{ old('gender', $gender->id) == '' ? 'selected' : '' }}>
                                    Masukan Referensi terdekat kampus
                                </option>
                                @foreach ($genders as $genderOptions)
                                    <option value="{{ $genderOptions->id }}" {{ old('gender', $gender->id) == $genderOptions->id ? 'selected' : '' }}>
                                        {{ $genderOptions->gender }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="satuan">Fakultas</label>
                            <select class="form-control" name="satuan" id="satuan">
                                <option value="" {{ old('satuan', $satuan->id) == '' ? 'selected' : '' }}>
                                    Masukan Referensi terdekat kampus
                                </option>
                                @foreach ($satuans as $satuanOptions)
                                    <option value="{{ $satuanOptions->id }}" {{ old('satuan', $satuan->id) == $satuanOptions->id ? 'selected' : '' }}>
                                        {{ $satuanOptions->fakultas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input id="des" type="hidden" name="deskripsi" value="<?= htmlspecialchars($barang->deskripsi) ?>" >
                            <trix-editor input="des"></trix-editor>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Alamat</label>
                            <input type="text" class="form-control"
                                id="alamat" name="alamat" value="{{ $barang->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">harga pertama</label>
                            <input type="text" class="form-control"
                                id="harga1" name="harga1" value="{{ $barang->harga1 }}">
                        </div>
                        <label>to</label>
                        <div class="form-group">
                            <label for="deskripsi">harga kedua</label>
                            <input type="text" class="form-control" placeholder="Contoh : Sapu ijuk"
                                id="harga2" name="harga2" value="{{ $barang->harga2 }}">
                        </div>
                        <div class="form-group">
                            <label for="type_kos">Type kamar dalam, luar</label><br />
                            <label style="color: red">* jika kos tersebut ada kamar dalam dan luar maka isikan dengan
                                2</label><br />
                            <label style="color: red">* jika kos tersebut hanya ada kamar luar maka isikan dengan
                                1</label><br />
                            <input type="number" class="form-control" id="type_kos" name="type_kos" min="0"
                                max='2' value="{{ $barang->type_kos }}">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Banner</label>
                            <input type="file" class="form-control-file" id="banner" name="banner" required>

                        </div>
                        <div class="">
                        <div class="col-lg-12">
                            <div class="input-group m-3" id="rowEdit">
                                <div class="input-group-prepend">
                                    <button class="btn btn-danger DeleteRowEdit" type="button">
                                        <i class="bi bi-trash"></i>
                                        Delete
                                    </button>
                                </div>
                                <input type="file" name="gambar[]" class="form-control m-input">
                            </div>

                            <div id="newinputEdit"></div>

                            <button class="btn btn-dark AddRowEdit" type="button">
                                <span class="bi bi-plus-square-dotted"></span>
                                ADD
                            </button>
                        </div>
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
@section('title', 'Input Data Kos')
@section('description', 'Silahkan Input terlebih dahulu nama kos dan lain-nya kemudian akan di arahkan ke halaman berikutnya untuk melengkapi data kos yang anda inputkan')
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
                                    <th class="centerText">kos untuk siapa </th>
                                    <th class="centerText">Terdekat</th>
                                    <th class="centerText">Deskripsi</th>
                                    <th class="centerText">Type Kos</th>
                                    <th class="centerText">Banner</th>
                                    <th class="centerText">Gambar</th>
                                    <th class="centerText">Aksi</th>
                                </tr>

                            </thead>
                            @foreach ($kos as $barang)
                                <tr class="centerText">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barang->kategori->nama_kos }}</td>
                                    <td>{{ $barang->gender->gender}}</td>
                                    <td>{{ $barang->satuan->fakultas }}</td>
                                    <td>{!! $barang->deskripsi !!}</td>
                                    <td>{{ $barang->type_kos }}</td>

                                    <td>
                                        <img src="{{ asset('storage/banner/' . $barang->banner) }}"
                                            alt="{{ $barang->banner }}" class="img-fluid chocolat-image" width="100">

                                    </td>
                                    <td>
                                        @php
                                            $gambarArray = json_decode($barang->gambar);
                                        @endphp
                                        @foreach ($gambarArray as $image)
                                            <img src="{{ asset('storage/post-barang-gambar/' . $image) }}"
                                                alt="{{ $barang->gambar }}" class="img-fluid chocolat-image"
                                                width="100">
                                        @endforeach
                                    </td>
                                    <td style="text-align:center">
                                        <button href="#" class="btn btn-warning" style="width:100px">
                                            <a href="" class='text-white' data-toggle="modal"
                                                data-target="#edit-modal-{{ $barang->id }}"><i
                                                    class="far fa-edit mr-3"></i>Edit</a>
                                        </button>
                                        <button class="btn btn-danger" style="width:100px">
                                            <a href="{{ route('hapus-barang',$barang->id) }}"
                                                class='text-white confirm-delete'><i
                                                    class="far fa-trash-alt mr-2"></i>Hapus</a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
