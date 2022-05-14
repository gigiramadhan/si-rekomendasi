<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : 'collapsed' }}" href="{{url('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('data_pengguna*') ? 'active' : 'collapsed' }}" href="{{url('data_pengguna')}}">
                <i class="bi bi-people-fill"></i>
                <span>Data Pengguna</span>
            </a>
        </li>

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
                <span>Bobot</span>
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
    </ul>
</aside>
