<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" a href="{{url('/')}}">Home</a></li>
        <li><a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}" href="{{url('about')}}">About</a></li>
        <li class="dropdown"><a href="/"><span>Information</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{url('home_kegiatan')}}">Kegiatan</a></li>
                <li><a href="{{url('home_berita')}}">Berita</a></li>
            </ul>
        </li>
        {{-- <li><a class="nav-link scrollto {{ Request::is('info') ? 'active' : '' }}" href="{{url('info')}}">Information</a></li> --}}
        <li><a class="nav-link scrollto {{ Request::is('gallery') ? 'active' : '' }}" href="{{url('gallery')}}">Gallery</a></li>
        <li><a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}" href="{{url('contact')}}">Contact</a></li>
        {{-- <li class="dropdown"><a href="{{url('login')}}"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{url('login')}}">Login</a></li>
                <li><a href="{{url('register')}}">Register</a></li>
            </ul>
        </li> --}}
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
