<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{url('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('data_pengguna') ? 'active' : '' }}" href="{{url('data_pengguna')}}">
                <i class="bi bi-people-fill"></i>
                <span>Data Pengguna</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('data_rumah') ? 'active' : '' }}" href="{{url('data_rumah')}}">
                <i class="bi bi-house-fill"></i>
                <span>Data Rumah</span>
            </a>
        </li>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('bobot') ? 'active' : '' }}" href="{{url('bobot')}}">
                <i class="bi bi-circle"></i>
                <span>Bobot</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('berita') ? 'active' : '' }}" href="{{url('berita')}}">
                <i class="bi bi-card-heading"></i>
                <span>Berita</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('kegiatan') ? 'active' : '' }}" href="{{url('kegiatan')}}">
                <i class="bi bi-file-post"></i>
                <span>Kegiatan</span>
            </a>
        </li>
    </ul>
</aside>
