<nav id="navbar" class="navbar">
    <ul>
        <li class="dropdown"><a href="{{url('profile_user')}}"><span>Profile User</span> <i class="bi bi-chevron-down"></i></a>
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
            </ul>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
