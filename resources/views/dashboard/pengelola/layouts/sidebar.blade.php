<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard_pengelola*') ? 'active' : 'collapsed' }}" href="{{url('dashboard_pengelola')}}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('data_rumah_pengelola*') ? 'active' : 'collapsed' }}" href="{{url('data_rumah_pengelola')}}">
                <i class="bi bi-house-fill"></i>
                <span>Data Rumah</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('data_booking*') ? 'active' : 'collapsed' }}" href="{{url('data_booking')}}">
                <i class="bi bi-ui-checks"></i>
                <span>Data Booking</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('fasilitas*') ? 'active' : 'collapsed' }}" href="{{url('fasilitas')}}">
                <i class="bi bi-grid-fill"></i>
                <span>Fasilitas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('profile_pengelola*') ? 'active' : 'collapsed' }}" href="{{url('profile_pengelola')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>
</aside>
