<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Temukan kos-kosan nyaman dan terjangkau di sekitar Solo. Informasi lengkap tentang kos-kosan, fasilitas, dan lokasi terbaik untuk mahasiswa dan pekerja di Solo.">
    <meta name="keywords" content="kosan Solo, kos-kosan dekat Solo, sewa kos Solo, tempat tinggal mahasiswa Solo">
    <meta name="author" content="kos kosan">

    <!-- Bootstrap CSS -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/assets/css/stylehome.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap.bundle.min') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/scss/style.scss') }}" rel="stylesheet">

    <title>Kostbaik</title>
</head>

<body>

    @include('Home.nav')

    <div>
        <div>
            @include('Home.Components.Banner')
        </div>
 <div class="container m-top">
            @include('Home.Components.Product')
        </div>


        <div class="container  text-center">
              @include('Home.footer')
        </div>

    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Counts JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
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
<script> --}}
<script>
    $('.counter').counterUp({
    delay: 10,
    time: 1000
    });
    $('.counter').addClass('animated fadeInDownBig');
    $('h2').addClass('animated fadeIn');
    </script>
<script>
    function redirectToCategory(select) {
        // Get the selected category value
        var selectedCategory = select.value;

        // Construct the URL with the selected category as a query parameter
        var url = '/?category=' + encodeURIComponent(selectedCategory);

        // Redirect to the constructed URL
        window.location.href = url;

         // Hide all property cards
         document.querySelectorAll('.property-card').forEach(function (card) {
            card.style.display = 'none';
        });

        // Show property cards based on the selected category
        if (selectedCategory === 'Pilih') {
            // Show all property cards if "Pilih" is selected
            document.querySelectorAll('.property-card').forEach(function (card) {
                card.style.display = 'block';
            });
        } else {
            // Show property cards only for the selected category
            document.querySelectorAll('.property-card[data-category="' + selectedCategory + '"]').forEach(function (card) {
                card.style.display = 'block';
            });
        }
    }
</script>
<script src="{{ asset('/assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('/assets/js/custom.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener('trix-initialize', function() {
        var editor = document.querySelector('trix-editor');
        var deskripsiInput = document.getElementById('deskripsi');
        var deskripsiValue = deskripsiInput.value;

        // Set nilai awal editor
        editor.editor.loadHTML(deskripsiValue);
    });
</script>
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
