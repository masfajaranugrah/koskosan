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
                        <form action="{{route('create-footer')}}" method="POST" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="copyright">Copyright</label>
                                <input type="hidden" class="form-control" placeholder="Copyright" id="copyright" name="copyright" value="">
                                <trix-editor input="copyright"></trix-editor>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearFormFields()">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.app')
@section('title','Input foot')
@section('logoText','Admin Kos')
@section('logoTextSub','AK')
@include('Admin.AdminDashboard._side')
@section('main')

<div class="card">
 <div class="col-12 col-md-6 col-lg-12">
    <div>
        <div class="card-header justify-content-end">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah foot</button>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table id="data-tables" class="table table-striped table-bordered" style="width:100%">
              @foreach ($footer as $foot )
                <thead>
                    <tr>
                        <td>copyright</td>
                        <td class="text-center">Action</td>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{!! $foot->copyright !!}</td>

                            <td style="text-align:center">
                                <button href="#" class="btn btn-warning" style="width:100px">
                                    <a href="" class='text-white' data-toggle="modal" data-target="#edit-modal-{{ $foot->id }}"><i class="far fa-edit mr-3"></i>Edit</a>
                                </button>
                                <button  class="btn btn-danger" style="width:100px">
                                    <a href="/" class='text-white confirm-delete'><i class="far fa-trash-alt mr-2"></i>Hapus</a>
                                </button>
                              </td>

                    </tr>
                </tbody>
                @endforeach
                </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
