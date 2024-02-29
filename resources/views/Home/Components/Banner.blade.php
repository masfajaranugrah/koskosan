<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row d-flex justify-content-around">
            @if($banner && $banner->count() > 0)
            @foreach ($banner as $home)
                  <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>{{ $home->judul_banner }}</h1>
                    <p class="mb-4">{{ $home->deskripsi_banner }}</p>
                    <p><a href="{{ isset($banner->link_button1) ? $home->link_button1 : '#' }}" class="btn btn-secondary me-2">{{ $home->nama_button1 }}</a><a href="{{ isset($banner->link_button2) ? $home->link_button2 : '#' }}" class="btn btn-white-outline">{{ $home->nama_button2 }}</a></p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="">
                    <img src="{{ asset('storage/post-barang-gambar/' . $home->gambar) }}" alt="{{ $home->gambar }}"  width="100%">
                </div>
            </div>
            @endforeach

            @else
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Ini adalah banner</h1>
                    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, sit, quisquam nesciunt nemo illum molestias quasi ut laboriosam nobis officia eos accusamus? Vero ex voluptatum eveniet recusandae sed inventore? Debitis</p>
                    <p><a href="#" class="btn btn-secondary me-2">Contact us</a><a href="#" class="btn btn-white-outline">Learn more</a></p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="">
                    <img src="{{ asset('images/sofa.png') }}" alt="banner" width="100%">
                </div>
            </div>

            @endif
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="cardtrafick py-4">
    @include('Home.Components.Filter')
</div>
