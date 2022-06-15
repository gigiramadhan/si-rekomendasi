<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ Request::is('rekomendasi') ? 'active' : '' }}" a href="{{url('rekomendasi')}}">Rekomendasi</a></li>
        <li><a class="nav-link scrollto {{ Request::is('data_rumahuser') ? 'active' : '' }}" a href="{{url('data_rumahuser')}}">Data Rumah</a></li>
        <li><a class="nav-link scrollto {{ Request::is('berita_user') ? 'active' : '' }}" a href="{{url('berita_user')}}">Berita</a></li>
        <li><a class="nav-link scrollto {{ Request::is('kegiatan_user') ? 'active' : '' }}" href="{{url('kegiatan_user')}}">Kegiatan</a></li>
        {{-- <li class="dropdown"><a href="{{url('profile_user')}}"><span>Profile User</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li>
                    <a href="{{url('profile_user')}}">
                      <i class="bi bi-person me-4"></i>
                      <span>My Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('logout')}}">
                        <i class="bi bi-box-arrow-right me-2"></i>
                      <span>Log Out</span>
                    </a>
                </li>
                {{-- <li><a href="{{url('profile_user')}}"><i class="bi bi-person"></i>My Profile</a></li>
                <li><a href="{{url('logout')}}"><i class="bi bi-box-arrow-right"></i>Logout</a></li> --}}
            {{-- </ul>
        </li> --}}
        {{-- <nav class="header-nav ms-auto"> --}}

            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
                        <img src="{{ URL::to('/') }}/gambar/{{ Auth::user()->photo }}" alt="Profile" class="rounded-circle" width="30px" height="30px">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        {{-- <li class="dropdown-header">
                            <h6 style="text-align: center">{{ Auth::user()->name }}</h6>
                            <span style="text-align: center">{{ Auth::user()->level }}</span>
                        </li> --}}

                        {{-- <li>
                            <hr class="dropdown-divider">
                        </li> --}}

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
        {{-- </nav> --}}
    </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
