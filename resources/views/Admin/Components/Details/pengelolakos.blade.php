<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Tambah Kos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('create-pengelola')}}" method="POST" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            <label for="nama">Nama Pengurus</label>
                            <input type="text" class="form-control" placeholder="Contoh : Kos Al-fatih" id="nama" name="nama" value="">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="hidden" class="form-control" placeholder="Contoh : Sapu ijuk" id="deskripsi" name="deskripsi" value="">
                                <trix-editor input="deskripsi"></trix-editor>

                            </div>
                            <div class="form-group">
                                <label for="deskripsi">link whatsapp</label>
                                <input type="text" class="form-control" placeholder="Contoh : Sapu ijuk" id="link_whatsapp" name="link_whatsapp" value="">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <p class="text-danger">*File harus berekstensi .jpg|.png dan berukuran 225 pixels x 255 pixels</p>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearFormFields()">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal edit -->
@foreach ($pengurus as $author)
    <div class="modal fade" id="edit-modal-{{ $author->id }}" tabindex="-1" role="dialog"
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
                    <form action="{{ route('edit-pengurus', $author->id) }}" method="POST" id="myForm"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Pengurus</label>
                            <input type="text" class="form-control" placeholder="Contoh : Kos Al-fatih" id="nama" name="nama" value="{{ $author->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="hidden" class="form-control" id="des" name="deskripsi" value="<?= htmlspecialchars($author->deskripsi) ?>">
                                <trix-editor input="des"></trix-editor>

                            </div>
                            <div class="form-group">
                                <label for="link_whatsapp">link whatsapp</label>
                                <input type="text" class="form-control" id="link_whatsapp" name="link_whatsapp" value="{{ $author->link_whatsapp }}">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <p class="text-danger">*File harus berekstensi .jpg|.png dan berukuran 225 pixels x 255 pixels</p>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" required>
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
@section('title','Pengelola Kos')
@section('logoText','Admin Kos')
@section('logoTextSub','AK')
@include('Admin.AdminDashboard._side')
@section('main')
<div class="card">
    <div class="col-12 col-md-6 col-lg-12">
      <div >
        <div class="card-header justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
          Tambah Kategori
      </button>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table id="data-tables" class="table table-striped table-bordered  dataTable no-footer">
              <thead>
                <th class="centerText">No</th>
                <th class="centerText">Nama pengurus</th>
                <th class="centerText">Descripsi</th>
                <th class="centerText">Link_whatsapp</th>
                <th class="centerText">gambar</th>
                <th class="centerText">Aksi</th>
              </thead>
              @foreach($pengurus as $author)
              <tr class="centerText">
                <td>{{$loop->iteration}}</td>
                <td>{{ $author->nama }}</td>
                <td>{!! $author->deskripsi !!}</td>
                <td>{{ $author->link_whatsapp }}</td>
                 <td>
                    <img src="{{ asset('storage/profil-pengelola/' . $author->gambar) }}" alt="{{$author->gambar}}" class="img-fluid chocolat-image" width="100">
                </td>
                <td style="text-align:center">
                  <button href="#" class="btn btn-warning" style="width:100px" data-toggle="modal" data-target="#edit-modal-{{ $author->id }}"><i class="far fa-edit mr-3"></i>Edit</button>
                  <button  class="btn btn-danger" style="width:100px"> <a href="{{route('hapus-pengurus',+ $author->id)}}" class='text-white confirm-delete'>
                  <i class="far fa-trash-alt mr-2"></i>Hapus</a></button>
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
