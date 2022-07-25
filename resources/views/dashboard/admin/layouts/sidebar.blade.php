<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : 'collapsed' }}" href="{{url('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (Request::is('data_admin*') || Request::is('data_pengelola*') || Request::is('data_pengunjung*') ) ? '' : 'collapsed'}}" href="{{url('data_admin')}}">
                <i class="bi bi-people-fill"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse {{ (Request::is('data_admin*') || Request::is('data_pengelola*') || Request::is('data_pengunjung*') ) ? 'show' : ''}}">
                <li>
                    <a class="nav-link {{ Request::is('data_admin*') ? 'active' : '' }}" href="{{url('data_admin')}}" style="background: none;">
                        <i class="bi bi-people-fill"></i><span>Data Administrator</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('data_pengelola*') ? 'active' : '' }}" href="{{url('data_pengelola')}}" style="background: none;">
                        <i class="bi bi-people-fill"></i><span>Data Pengelola</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('data_pengunjung*') ? 'active' : '' }}" href="{{url('data_pengunjung')}}" style="background: none;">
                        <i class="bi bi-people-fill"></i><span>Data Pengunjung</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('data_pengguna*') ? 'active' : 'collapsed' }}" href="{{url('data_pengguna')}}">
                <i class="bi bi-people-fill"></i>
                <span>Data Pengguna</span>
            </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link {{ Request::is('data_rumah*') ? 'active' : 'collapsed' }}" href="{{url('data_rumah')}}">
                <i class="bi bi-house-fill"></i>
                <span>Data Rumah</span>
            </a>
        </li>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('bobot*') ? 'active' : 'collapsed' }}" href="{{url('bobot')}}">
                <i class="bi bi-circle"></i>
                <span>Kriteria</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('berita*') ? 'active' : 'collapsed' }}" href="{{url('berita')}}">
                <i class="bi bi-card-heading"></i>
                <span>Berita</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('kegiatan*') ? 'active' : 'collapsed' }}" href="{{url('kegiatan')}}">
                <i class="bi bi-file-post"></i>
                <span>Kegiatan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('profile*') ? 'active' : 'collapsed' }}" href="{{url('profile')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>
</aside>
