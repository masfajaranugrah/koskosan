@extends('layouts.app')
@section('title','Dashboard')
@section('logoText','Admin Kos')
@section('logoTextSub','AK')
@include('Admin.AdminDashboard._side')
@section('main')
<div class="container">
  <div class="row">


    <div class="col-lg-4 col-md-6">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
        <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Kos</h4>
          </div>
          <div class="card-body">
            {{ $kos }}

          </div>
          <div class="lorem">
            {{-- <a href="{{route('barang-in')}}" class="text-decoration-none"><span>view more<i class="fa-solid fa-arrow-right"></i></span></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
        <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total seluruh kamar</h4>
          </div>
          <div class="card-body">
            {{ $total_sum }}
          </div>
          <div class="lorem">
            {{-- <a href="{{route('barang-out')}}" class="text-decoration-none"><span>view more<i class="fa-solid fa-arrow-right"></i></span></a> --}}
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-6">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Kamar Kosong</h4>
          </div>
          <div class="card-body">
            {{ $total_kosong }}
          </div>
          <div class="lorem">
            {{-- <a href="{{ route('riwayat-pengambilan-admin') }}" class="text-decoration-none"><span>view more<i class="fa-solid fa-arrow-right"></i></span></a> --}}
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-6">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Kamar Terisi</h4>
            </div>
            <div class="card-body">
              {{ $total_terisi }}
            </div>
            <div class="lorem">
              {{-- <a href="{{ route('riwayat-retur-barang-admin') }}" class="text-decoration-none"><span>view more<i class="fa-solid fa-arrow-right"></i></span></a> --}}
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
