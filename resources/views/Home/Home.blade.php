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
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/stylehome.css') }}" rel="stylesheet">
		<title>Infokoskosan-termurah</title>
	</head>

	<body>

		@include('Home.nav')
		@include('Home.Components.Banner')
        @include('Home.Components.Product')
        @include('Home.Components.Help')
		@include('Home.Components.Testimonial')
	    @include('Home.footer')

		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
		<script src="{{ asset('assets/js/custom.js')}}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Ambil elemen select
                var filterSelect = document.getElementById('filterKategori');
                var filterSatuan = document.getElementById('filterSatuan');
                var filterJenis = document.getElementById('filterJenis');

                // Tambahkan event listener untuk mendeteksi perubahan
                filterSelect.addEventListener('change', function () {
                    // Dapatkan nilai yang dipilih
                    var selectedValue = filterSelect.value;

                    // Lakukan redirect ke endpoint filter
                    window.location.href = '/?kos=' + selectedValue; // Adjust the URL as needed
                });

                  // Tambahkan event listener untuk mendeteksi perubahan
                  filterSatuan.addEventListener('change', function () {
                    // Dapatkan nilai yang dipilih
                    var selectedValueSatuan = filterSatuan.value;

                    // Lakukan redirect ke endpoint filter
                    window.location.href = '/?kampus=' + selectedValueSatuan; // Adjust the URL as needed
                });

                    // Tambahkan event listener untuk mendeteksi perubahan
                    filterJenis.addEventListener('change', function () {
                    // Dapatkan nilai yang dipilih
                    var selectedValueSatuan = filterJenis.value;

                    // Lakukan redirect ke endpoint filter
                    window.location.href = '/?jenis=' + selectedValueSatuan; // Adjust the URL as needed
                });
            });
        </script>
	</body>

</html>
