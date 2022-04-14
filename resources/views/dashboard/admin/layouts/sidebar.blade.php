<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-people-fill"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>

            <a href="{{url('data_admin')}}">
              <i class="bi bi-person-circle"></i><span>Data Admin</span>
            </a>
          </li>
          <li>

            <a href="{{url('data_pengelola')}}">
              <i class="bi bi-person-circle"></i><span>Data Pengelola Rumah</span>
            </a>
          </li>
          <li>

            <a href="{{url('data_pengguna')}}">
              <i class="bi bi-person-circle"></i><span>Data Pengunjung</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('data_rumah')}}">
          <i class="bi bi-house-fill"></i>
          <span>Data Rumah</span>
        </a>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('bobot')}}">
          <i class="bi bi-circle"></i>
          <span>Bobot</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('berita')}}">
          <i class="bi bi-card-heading"></i>
          <span>Berita</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('kegiatan')}}">
          <i class="bi bi-file-post"></i>
          <span>Kegiatan</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->
