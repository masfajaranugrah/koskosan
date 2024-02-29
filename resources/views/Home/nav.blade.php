<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">InfoKosKosan<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li><li><a class="nav-link" href="{{ route('about') }}">About</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-white text-center" id="exampleModalToggleLabel">Daftarkan Kos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class=" container gap-4 position-relative">
                    <div class="my-4">
                         <p style="color: white">Hubungi kontak di bawah ini untuk mendaftar di website kami:</p>
                      </div>
                      <div class="my-4">
                        <a href="http://wa.me/+6287836167585?text=Assalamualikum.wr.wb%2C%20Maaf%20pak%20menggangu%20waktunya.%20saya%20mau%20bertanya-tanya%20mengenai%20kos%20kosan%20pak" class="btn btn-primary w-100" ><i class="fa-brands fa-whatsapp"></i> Whatsapp </a>
                      </div>
                      </div>

                    </div>
                  </div>
                </div>

                <a   class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Daftar Kosmu Sekarang</a>
              </ul>
        </div>
    </div>

</nav>
<!-- End Header/Navigation -->
