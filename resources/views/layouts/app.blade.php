<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/datatables.css')}}">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



  <link href="  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
  " rel="stylesheet" />

  <link href=" https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css
  " rel="stylesheet" />

    <!-- Template CSS -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/components.css')}}" rel="stylesheet">
  <link href="{{asset('/amsify/amsify.suggestags.css')}}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../assets/admin/assets/css/components.css"> -->

  {{-- link toastr css  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
  rel="stylesheet" />

  <style>
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #ffffff;
        background: #2196f3;
        padding: 3px 7px;
        border-radius: 3px;
    }
    .bootstrap-tagsinput {
        width: 100%;
    }
</style>

</head>
<body>
  <div class="preloader" style="display: block;">

    <div class="loading">

      <div class="spinner-border text-primary" role="status"></div>

    </div>

  </div>
    <div class="main-wrapper" style="display: none;">
      <div class="navbar-bg"></div>
      <!-- navbar -->
      @include('layouts._nav')
      <!-- end navbar -->
      <div  >
      <!-- Main Content -->
      <div class="main-content" id="content">
        <section class="section">
          <div class="section-header ">
            <h1>@yield('title')</h1>
            <p>@yield('description')</p>
          </div>
          <div>

            @yield('main')

          </div>
        </section>
      </div>
    </div>
    @include('layouts.footer')
  </div>
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- General JS Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('/assets/js/stisla.js')}}"></script>
  <script src="{{asset('/assets/js/page/swite.js')}}"></script>
  <script src="{{asset('/amsify/jquery.amsify.suggestags.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- data tables library -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('/assets/js/scripts.js')}}"></script>
  <script src="{{asset('/assets/js/custom.js')}}"></script>
<!-- Tambahkan Bootstrap JS dan jQuery -->
<script type="text/javascript"  src="{{asset('/assets/js/scriptnew.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/scriptnew1.js')}}"></script>
<script src="{{asset('/assets/js/new.js')}}"></script>



<script>
    $('input[name="post_tags"]').amsifySuggestags();

    $(document).ready(function () {
        $('#theme_toggle').on('click', function () {
            if ($('body').hasClass('dark-theme')) {
                $(this).toggleClass('btn-light');
                $(this).addClass('btn-dark');
                $('body').toggleClass('dark-theme');
                localStorage.setItem("mode", "light-theme");
            } else {
                $(this).toggleClass('btn-light');
                $(this).removeClass('btn-dark');
                $('body').toggleClass('dark-theme');
                localStorage.setItem("mode", "dark-theme");
            }
        })
        //check for localStorage, add as browser preference if missing
        if (!localStorage.getItem("mode")) {
            if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                localStorage.setItem("mode", "dark-theme");
            } else {
                localStorage.setItem("mode", "light-theme");
            }
        }
        //set interface to match localStorage
        if (localStorage.getItem("mode") == "dark-theme") {
            $('#theme_toggle').removeClass('btn-dark');
            $('#theme_toggle').addClass('btn-light');
            $('body').addClass('dark-theme');
            $('.card').addClass('dark-theme');
            document.getElementById("theme_toggle").checked = true;
        } else {
            $('#theme_toggle').addClass('btn-dark');
            $('#theme_toggle').removeClass('btn-light');
            $('body').removeClass('dark-theme');
            $('.card').removeClass('dark-theme');
            document.getElementById("theme_toggle").checked = false;
        };
    });
</script>





<script>
    function searchMenu() {
      // Declare variables
      let input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('menuSearch');
      filter = input.value.toUpperCase();
      ul = document.querySelector('.sidebar-menu');
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName('a')[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = '';
        } else {
          li[i].style.display = 'none';
        }
      }
    }
    </script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
<script type="text/javascript">
    $("#rowAdder").click(function () {
        newRowAdd =
            '<div id="row"> <div class="input-group m-3">' +
            '<div class="input-group-prepend">' +
            '<button class="btn btn-danger" id="DeleteRow" type="button">' +
            '<i class="bi bi-trash"></i> Delete</button> </div>' +
            '<input type="file" name="gambar[]" class="form-control m-input"> </div> </div>';

        $('#newinput').append(newRowAdd);
    });
    $("body").on("click", "#DeleteRow", function () {
        $(this).parents("#row").remove();
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".AddRowEdit").click(function () {
            var newRowEdit =
                '<div class="input-group m-3">' +
                '<div class="input-group-prepend">' +
                '<button class="btn btn-danger DeleteRowEdit" type="button">' +
                '<i class="bi bi-trash"></i> Delete</button> </div>' +
                '<input type="file" name="gambar[]" class="form-control m-input"> </div>';

            $('#newinputEdit').append(newRowEdit);
        });

        $("body").on("click", ".DeleteRowEdit", function () {
            $(this).closest(".input-group").remove();
        });
    });
</script>

{{-- \ <script>
     document.addEventListener('DOMContentLoaded', function() {
        var trixEditor = document.querySelector('trix-editor');
        var hiddenInput = document.getElementById('deskripsi');
        trixEditor.editor.loadHTML(hiddenInput.value);
    });
</script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

</body>
</html>
