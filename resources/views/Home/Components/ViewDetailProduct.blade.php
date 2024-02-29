<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/stylehome.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/tiny-slider.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('/assets/css/stylehome.css)}}"> --}}



      <title>Kostbaik</title>
      <style>
        /* Custom styles for carousel controls */
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            height: 2rem;
            top: 50%;
            background-color: rgb(59, 93, 80); /* Set the background color */
            border-radius: 50%; /* Make it circular */
            width: 40px; /* Adjust width as needed */
            height: 40px; /* Adjust height as needed */
            line-height: 40px; /* Center the icon vertically */
        }

        /* Custom styles for carousel control icons */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgb(59, 93, 80); /* Set the icon color */
            border-radius: 50%; /* Make it circular */
            color: black; /* Set the icon color */
            font-size: 20px; /* Adjust font size as needed */
        }

        /* Custom styles for active state of carousel controls */
        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: darkgray; /* Change color on hover if desired */
        }
    </style>
</head>

<body>
    <section>
         @include('Home.nav')
    </section>

    <div class="mt-4 container">
        <div class=" my-4">
            {{-- <a href="{{ route('home') }}"><button type="button" class="btn btn-primary""><i
                        class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i> Kembali</button></a> --}}
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                                <li class="breadcrumb-item">Detail</a></li>
                            </ol>
                        </nav>
        <div>
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="bg-card border">

                             @if ($product)

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                @php
                                $gambarArray = json_decode($product->gambar);
                            @endphp
                                <ol class="carousel-indicators">
                                    @foreach ($gambarArray as $key => $image)

                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"></li>
@endforeach
                                  {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> --}}
                                </ol>
                                <div class="carousel-inner">

                                    @foreach ($gambarArray as $key => $image)
                                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/post-barang-gambar/' . $image) }}" alt="{{$product->gambar}}"  class="d-block w-100" data-toggle="modal" data-target="#imageModal{{$key}}"">
                                            </div>

                                            <div class="modal fade" id="imageModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{$key}}" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen ">
                                                    <div class="modal-content">
                                                        <div class="modal-pop">
                                                            <button type="button" class="close buton-close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ asset('storage/post-barang-gambar/' . $image) }}" class="img-fluid" alt="{{$product->gambar}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        {{-- <img src="{{ asset('storage/post-barang-gambar/' . $product->gambar) }}"
                            alt="{{ $product->gambar }}" class="img-fluid product-thumbnail rounded-3 mt-4" width="100%" height="20%"> --}}
                        <div class="container">
                           <div class="d-flex justify-content-between mt-4">
                            <div>
                                <h3>Kos {{ $product->kategori->nama_kos }}</h3>
                            </div>
                            <div>
                                <span class="name_kos">{{ $product->gender->gender }}</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot"></i> {{ $product->alamat }}</p>
                        <p>{!! $product->deskripsi !!}</p>
                        </div>

                    </div>

                    <div class="bg-card mt-4 border py-4">
                   <div class="container">
                    <h5 class="py-4">Type Kamar</h5>
                    <div class="alert alert-success" role="alert">
                      <strong> Pilih tipe kamar di bawah ini gaes.</strong>
                    </div>
                    <div>
                        <ul class="nav nav-tabs nav-tabs nav-justified "" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Reguler (KM Luar)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Reguler (KM Dalam)</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row mt-4">
                                    {{-- item 1 --}}
                                      <div class="col-12 col-sm-6 ">
                                    <div class="card widget-box-one border rounded bg-soft-warning">
                                        <div class="card-body rounded cardtrafick">
                                            <div class="float-right avatar-lg rounded-circle mt-3">
                                                <i class="mdi mdi-home-heart font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                                            </div>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase text-white" title="User This Month">Jumlah Kamar</p>
                                                <h2><span data-plugin="counterup">{{ $product->typekamar->jm_kamar_luar }}</span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                                <p class="text-white m-0"><span class="font-weight-light">yang nambah terus.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- item 2 --}}
                                <div class="col-12 col-sm-6">
                                    <div class="card widget-box-one border  bg-soft-warning">
                                        <div class="card-body cardtrafick rounded">
                                            <div class="float-right avatar-lg rounded-circle mt-3">
                                                <i class="mdi mdi-home-heart font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                                            </div>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase text-white" title="User This Month">Kamar Kosong</p>
                                                <h2><span data-plugin="counterup">{{$product->typekamar->km_kamarkosong_luar }}</span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                                <p class="text-white m-0"><span class="font-weight-light">yang nambah terus.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>


                                <div class="mt-4">
                                    <div class=" wrap justify-content-between">
                                        <div class="card rounded border p-4  ">
                                            <h5>Fasilitas Bersama</h5>
                                            {!! $product->typekamar->fasilitas_bersama_luar !!}
                                        </div>
                                        <div class="card rounded border p-4  ">
                                            <h5>Fasilitas kamar</h5>
                                            {!!$product->typekamar->fasilitas_km_luar !!}
                                        </div>
                                        <div class="card rounded border p-4  ">
                                            <p>Harga</p>
                                            <table class="table">
                                                <thead>
                                                    <tr></tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tahunan</td>
                                                        <td>:</td>
                                                        <td>Rp. {!! $product->typekamar->harga_thn_luar !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bulanan</td>
                                                        <td>:</td>

                                                        <td>Rp. {!! $product->typekamar->harga_bln_luar !!}</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row mt-4">
                                    {{-- item 1 --}}
                                      <div class="col-12 col-sm-6 ">
                                    <div class="card widget-box-one border rounded bg-soft-warning">
                                        <div class="card-body rounded cardtrafick">
                                            <div class="float-right avatar-lg rounded-circle mt-3">
                                                <i class="mdi mdi-home-heart font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                                            </div>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase text-white" title="User This Month">Jumlah Kamar</p>
                                    <h2><span data-plugin="counterup">{{ $product->typekamar->jm_kamar_dalam }}</span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                                <p class="text-white m-0"><span class="font-weight-light">yang nambah terus.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- item 2 --}}
                                <div class="col-12 col-sm-6">
                                    <div class="card widget-box-one border  bg-soft-warning">
                                        <div class="card-body cardtrafick rounded">
                                            <div class="float-right avatar-lg rounded-circle mt-3">
                                                <i class="mdi mdi-home-heart font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                                            </div>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase text-white" title="User This Month">Kamar Kosong</p>
                                                <h2><span data-plugin="counterup">{{ $product->typekamar->km_kamarkosong_dalam }}</span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                                <p class="text-white m-0"><span class="font-weight-light">yang nambah terus.</span></p>
                                            </div>
 </div>



                                </div>
                                </div>
                                <div class="mt-4">
                                    <div class=" wrap justify-content-between">
                                        <div class="card rounded border p-4  ">
                                            <h5>Fasilitas Bersama</h5>
                                            {!! $product->typekamar->fasilitas_bersama_luar !!}
                                        </div>
                                        <div class="card rounded border p-4  ">
                                            <h5>Fasilitas kamar</h5>
                                            {!!$product->typekamar->fasilitas_km_luar !!}
                                        </div>
                                        <div class="card rounded border p-4  ">
                                            <p>Harga</p>
                                            <table class="table">
                                                <thead>
                                                    <tr></tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tahunan</td>
                                                        <td>:</td>
                                                        <td>Rp. {!! $product->typekamar->harga_thn_luar !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bulanan</td>
                                                        <td>:</td>

                                                        <td>Rp. {!! $product->typekamar->harga_bln_luar !!}</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                   </div>
                   </div>



                    </div>

                    @if ($pengurus->isNotEmpty())
                    @php
                    $pengelola = $pengurus->first();
                @endphp
                    <div class="col-lg-4">
                    <div class="bg-card border text-center p-4 mb-4">
                        <span class=" fw-bold font-18 fs-5">Pengelola Kos</span>
                        <hr class="px-3 mx-auto">
                        <div class="mt-2 text-center mx-auto position-relative">
                            <div class="avatar-xl member-thumb mb-2 mx-auto d-block ">
                                <img   src="{{ asset('storage/profil-pengelola/' . $pengelola->gambar) }}" width="128px" class="rounded-circle img-thumbnail" alt="profile-image">
                            </div>
                            <h3 class="fw-bold font-18 fs-5">{{ $pengelola->nama }}</h3>
                            <h5>{!! $pengelola->deskripsi !!}</h5>
                            <div class="w-100">
                                {{-- http://wa.me/+6287836167585?text=Assalamualikum.wr.wb%2C%20Maaf%20pak%20menggangu%20waktunya.%20saya%20mau%20bertanya-tanya%20mengenai%20kos%20{{$product->nama}}%20pak --}}
                            <a href="http://wa.me/{{ $pengelola->link_whatsapp }}?text=Assalamualikum.wr.wb%2C%20Maaf%20pak%20menggangu%20waktunya.%20saya%20mau%20bertanya-tanya%20mengenai%20kos%20{{$product->kategori->nama_kos}}%20pak" class="btn btn-primary w-100 container"> <i class="fa-brands fa-whatsapp"></i> whatsapp</a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-4">
                        <div class="bg-card border text-center p-4 mb-4">
                            <span class=" fw-bold font-18 fs-5">Pengelola Kos</span>
                            <hr class="px-3 mx-auto">
                            <div class="mt-2 text-center mx-auto position-relative">
                                <div class="avatar-xl member-thumb mb-2 mx-auto d-block ">
                                    <img   src="{{ asset('../assets/img/person_1.jpg')}}" width="128px" class="rounded-circle img-thumbnail" alt="profile-image">
                                </div>
                                <h3 class="fw-bold font-18 fs-5">admin</h3>
                                <h5>hai admin</h5>
                                <div class="w-100">
                                    {{-- http://wa.me/+6287836167585?text=Assalamualikum.wr.wb%2C%20Maaf%20pak%20menggangu%20waktunya.%20saya%20mau%20bertanya-tanya%20mengenai%20kos%20{{$product->nama}}%20pak --}}
                                <a href="#" class="btn btn-primary w-100 container"> <i class="fa-brands fa-whatsapp"></i> whatsapp</a>
                                </div>
                            </div>
                        </div>
                        @endif




{{-- tambahan  --}}
                {{-- <div class="bg-card border p-4 mb-4">
                    <h2 class="text-center text-bold">biaya tambahan</h2>
                    <hr class="px-3 mx-auto">
                    <div class="mt-2 text-center mx-auto position-relative">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Ini harga estimasi ya, soalnya biasanya iuran (tergantung pemakaian)</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                  <td>Listrik</td>
                            <td>Rp 0</td>
                            </tr>
                            <tr>
                                <td>Listrik</td>
                          <td>Rp 0</td>
                          </tr>
                        </tbody>

                    </table>
                    </div>
            </div> --}}



            @if($satuans)
            <div class="bg-card border p-4">
                <h2 class="text-center text-bold">Lokasi</h2>
                <hr class="px-3 mx-auto">
                <div class="mt-2 text-center mx-auto position-relative">
                <span class="fw-bold fw-5 mb-4">Fakultas terdekat</span>
                <div class="mt-4">
                    @foreach ($satuans as  $satuan)
                <a href="" class="btn btn-primary">{{ $satuan->fakultas }}</a>

                    @endforeach
                </div>

                </div>
        </div>
            @else
                    <div class="bg-card border p-4">
                <h2 class="text-center text-bold">Lokasi</h2>
                <hr class="px-3 mx-auto">
                <div class="mt-2 text-center mx-auto position-relative">
                <span class="fw-bold fw-5 mb-4">Fakultas terdekat</span>
                <div class="mt-4">
                <a href="" class="btn btn-primary">fki</a>
                <a href="" class="btn btn-primary">feb</a>
                <a href="" class="btn btn-primary">sipil</a>
                </div>

                </div>
        </div>
            @endif


                    </div>
                </div>
            </div>



            <div class="t-12">

            </div>
        </div>

        <div class="mt-4 container text-center">
              @include('Home.footer')
        </div>



    @else
    <p>Produk tidak ditemukan.</p>
@endif
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
    <script src="
https://cdn.jsdelivr.net/npm/swiper@11.0.6/swiper-bundle.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/swiper@11.0.6/swiper-bundle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiperEl = document.querySelector("swiper-container");
    swiperEl.addEventListener("autoplaytimeleft", (e) => {
      const [swiper, time, progress] = e.detail;
      progressCircle.style.setProperty("--progress", 1 - progress);
      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    });
  </script>
</body>

</html>
