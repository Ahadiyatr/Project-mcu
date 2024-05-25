<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">SMIK</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">Sisla</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')

            <li>
                <a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="ion-ios-medkit"></i><span>MCU</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href=" {{ url('/data')}} ">Data MCU</a></li>
                    <li><a class="nav-link" href="index.html">Review</a></li>
                </ul>
            </li>


            <li>
                <a class="nav-link" href="{{ url('/pengguna')}}"><i class="ion-ios-person"></i> <span>Pengguna</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="ion-ios-medkit"></i><span>Master</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href=" {{ url('/perusahaan')}} ">Tambah Perusahaan</a></li>
                    <li><a class="nav-link" href=" {{ url('/departemen')}} ">Departemen</a></li>
                    <li><a class="nav-link" href=" {{ url('/jabatan')}} ">Jabatan</a></li>
                </ul>
            </li>
        <li>
            <a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Laporan</span></a>
        </li>
        <li>
            <a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Konfigurasi Sistem</span></a>
        </li>


        @show
    </ul>
  </aside>
