<section class="container">
    @if (count($koss) == 0)
    <div class="my-4">
        <h5 class="text-center">Produk tidak ditemukan</h5>
    </div>
@else
    <div class="row"  id="produkContainer">
        @foreach ($koss as $items)
            <div class="col-lg-4 col-md-6 my-2" >
                <div class="property-card card">
                    <div class="property-image" style="background: url('{{ asset('storage/banner/' . $items->kos->banner) }}') center center / cover no-repeat;">
                        <span class="property-label property-label-featured bagred  float-right badge badge-primary ">{{ $items->kos->gender->gender}}</span>
                    </div>
                    <div class="property-content card-body">
                        <div class="listingInfo">
                            @if ($items->kos->harga1 && $items->kos->harga2)
                                <h5 class="text-success font-18 mt-0">Rp {{ $items->kos->harga1 }} - Rp {{ $items->kos->harga2 }}</h5>
                            @else
                                @if ($items->kos->harga1)
                                    <h5 class="text-success font-18 mt-0">Rp {{ $items->kos->harga1 }}</h5>
                                @else
                                    <h5 class="text-success font-18 mt-0">Rp {{ $items->kos->harga2 }}</h5>
                                @endif
                            @endif

                            <div class="">
                                <h5 class="text-overflow text-dark">Kos {{ $items->kos->kategori->nama_kos }}</h5>

                                <div class="row text-center mt-4">
                                    <div class="col-4">
                                        <h4>{{ $items->kos->type_kos }}</h4>
                                        <p class="text-overflow text-bold" title="Square Feet">Tipe Kamar</p>
                                    </div>
                                    <div class="col-4">
                                        <h4>{{ $items->jm_kamar_dalam + $items->jm_kamar_luar }}</h4>
                                        <p class="text-overflow text-bold" title="Bedrooms">Total Kamar</p>
                                    </div>
                                    <div class="col-4">
                                        <h4>{{ $items->km_kamarkosong_dalam + $items->km_kamarkosong_luar }}</h4>
                                        <p class="text-overflow text-bold" title="Parking Space">Kamar Kosong</p>
                                    </div>
                                </div>

                                <div class="mt-3 w-full">
                                    <a href="{{ route('view-detail', ['view' => $items->kos_id, 'nama' => $items->kos->kategori->nama_kos]) }}" class="btn btn-primary btn-block waves-effect waves-light w-100"><b>Coba Lihat</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-4 d-flex justify-content-center position-relative">
        {{ $koss->links() }}
    </div>
@endif
</section>
