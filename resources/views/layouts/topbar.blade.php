<nav class="navbar navbar-top navbar-expand-lg navbar-dashboard navbar-dark bg-gray-800 ps-2 pe-20 pb-0" style="border-radius: 1px;">
    <div class="container-fluid">

        <div class="d-flex justify-content-center align-items-center w-100" id="navbarSupportedContent">
            <a class="navbar-brand ">
                <span class="fw-bold text-light" style="color: #ffffff;">
                    <div class="d-flex">
                        <img src="{{ asset('images/brand/logo.png') }}" alt="" class="me-3" height="50" width="50">
                    <h3 class="text-center" style="color: #F2F0EB;">7J Sign and Printing Services</h3>
                    </div>
                </span>
            </a>

            <ul class="navbar-nav align-items-center ms-auto">
                <li class="nav-item me-4">
                    <a href="{{ url('/chatify') }}" class="nav-link">
                        <i class="fas fa-comment fs-2"></i>
                    </a>
                </li>
                <!-- Rest of the navbar content -->
                <!-- ... -->
            </ul>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle"
                                src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}"
                                alt="{{ Auth::user()->name }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-white">{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1 ">
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('My Profile') }}
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            <svg class="dropdown-icon text-danger me-2 " fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            {{ __('Log Out') }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
