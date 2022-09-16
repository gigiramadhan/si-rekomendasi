<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ Request::is('rekomendasi') ? 'active' : '' }}" a href="{{url('rekomendasi')}}">Rekomendasi</a></li>
        <li><a class="nav-link scrollto {{ Request::is('data_rumah_user') ? 'active' : '' }}" a href="{{url('data_rumah_user')}}">Data Rumah</a></li>
        <li><a class="nav-link scrollto {{ Request::is('berita_user') ? 'active' : '' }}" a href="{{url('berita_user')}}">Berita</a></li>
        <li><a class="nav-link scrollto {{ Request::is('kegiatan_user') ? 'active' : '' }}" href="{{url('kegiatan_user')}}">Kegiatan</a></li>

            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
                        <img src="{{ URL::to('/') }}/gambar/{{ Auth::user()->photo }}" alt="Profile" class="rounded-circle" width="30px" height="30px">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex" href="{{ route('profile_user') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
    </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
