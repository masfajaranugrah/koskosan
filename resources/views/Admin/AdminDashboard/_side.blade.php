<div class="main-sidebar" style="display: none;" >
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="" class="logo">@yield('logoText')</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="">@yield('logoTextSub')</a>
          </div>
          <ul class="sidebar-menu" >
            <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="{{route('dashboard-gudang')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown dropdown-toggle dropdown-arrow">
                    <i class="fa-sharp fa-solid fa-database"></i><span>Master Data</span>
                </a>
  <ul class="dropdown-menu">
                <li><a class="nav-link text-black" href="{{route('kategori-barang')}}"><i class="fa-sharp fa-solid fa-network-wired"></i><span>nama kos</span></a></li>
                <li><a class="nav-link text-black" href="{{route('gender')}}"><i class="fa-sharp fa-solid fa-network-wired"></i><span>gender</span></a></li>
                <li><a class="nav-link text-black" href="{{route('satuan-barang')}}"><i class="fa-sharp fa-solid fa-vector-square"></i><span>Kampus Terdekat</span></a></li>
              </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown dropdown-toggle dropdown-arrow">
                    <i class="fa-sharp fa-solid fa-boxes-stacked"></i><span>Modul Kos</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-black" href="{{route('kos')}}"><i class="fa-sharp fa-solid fa-file-import "></i><span>Input Kos</span></a></li>
                    <li><a class="nav-link text-black" href="{{route('type-kamar')}}"><i class="fa-sharp fa-solid fa-file-import "></i><span>Type Kamar</span></a></li>
                </ul>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown dropdown-toggle dropdown-arrow">
                        <i class="fa-sharp fa-solid fa-database"></i><span>Pengelola Kos</span>
                    </a>
      <ul class="dropdown-menu">
                    <li><a class="nav-link text-black" href="{{route('pengelola')}}"><i class="fa-sharp fa-solid fa-network-wired"></i><span>Pengelola kos</span></a></li>
                  </ul>
                  </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown dropdown-toggle dropdown-arrow">
                    <i class="fa-sharp fa-solid fa-right-left"></i><span>Setting HomePage</span>
                </a>

                 <ul class="dropdown-menu">

                  <li><a class="nav-link text-black" href="{{route('banner-home')}}"><i class="fa-sharp fa-solid fa-file-import "></i><span>Banner</span></a></li>
                  <li><a class="nav-link" href="{{route('footer-home')}}"><i class="fa-sharp fa-solid fa-book-medical "></i><span>Footer</span></a></li>
                  {{-- <li><a class="nav-link" href="{{route('barang-out')}}"><i class="fa-sharp fa-solid fa-book-medical "></i><span>Riwayat Barang Keluar</span></a></li> --}}
                </ul>
              </li>


        {{-- <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('acc-retur-barang-admin')}}"><i class="fa-sharp fa-solid fa-right-left"></i><span>Acc Retur Barang</span></a></li>
                  <li><a class="nav-link" href="{{route('riwayat-retur-barang-admin')}}"><i class="fa-sharp fa-solid fa-book-medical "></i><span>Riwayat Retur Barang</span></a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="{{route('laporan-admin')}}"><i class="fa-sharp fa-solid fa-print"></i> <span>Laporan</span></a></li>

                <li><a class="nav-link" href="/admin-gudang/cerateAccount"><i class="fa-sharp fa-solid fa-id-card"></i><span>Register</span></a></li>
          </ul> --}}
        </aside>
      </div>
</div>
