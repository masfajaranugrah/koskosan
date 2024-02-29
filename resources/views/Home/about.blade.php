<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/assets/css/stylehome.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">



    <title>Kostbaik</title>
</head>

	<body>

		@include('Home.nav')
		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">


                    <div class="text-center mb-4">

                        <div class="row justify-content-center" style="background: #ffd700">
                            <div class="col-md-8 ">
                                {{-- <img src="https://kosanunnes.com/front/images/banner.png" alt="all-new-kosanunnes" class="img-fluid mb-5"> --}}
                            </div>
                        </div>
                        <br>
                        <h4 class="mb-3">InfoKoskosan itu apa sih?</h4>
                        <p>
                            InfoKoskosan adalah aplikasi web yang menyediakan informasi tentang berbagai Kos di Sekitar UMS.
                           Kosanunnes bertujuan membantu maba maupun mahasiswa lama mencari hunian yang cocok untuk tempat tinggal sementara selama kuliah di UNNES.
                           Kami juga membantu Bapak/Ibu pemilik kos mendata, mendokumentasi dan mempromosikan Kos atau Kontrakan agar dapat menjangkau pasar dengan lebih mudah.
                        </p>
                    </div>




					<div class="col-lg-6 mt-4">
						<h2 class="section-title">LAYANAN KAMI</h2>
						<p>
                            Layanan kami buat temen-temen yang lagi nyari kos</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Pencarian Kos sesuai keinginan</h3>
									<p>Gunakan fitur search berdasarkan kriteria yang kamu inginkan untuk mendapat kos yang benar-benar kamu sukai.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Antar survei ke Lokasi Kos</h3>
									<p>Yap, kami antar ke Lokasi Kos biar kamu bisa liat-liat langsung, dan gratis! Jadi ngga usah bingung nih kalo ngga terlalu ngerti daerah UNNES.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Request kriteria kos kamu</h3>
									<p>Kalo ternyata belum nemu yang sesuai sama kriteria kamu, coba deh kontak mimin di WA, kali aja mimin ada rekomendasi atau mau mencarikan sesuai kriteriamu.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

        <div class="container">
            @include('Home.footer')
      </div>



		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
