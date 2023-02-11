
<div class="site-navbar py-2">

    <div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
        </div>
    </div>

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="index.html" class="js-logo-clone" style="text-decoration: none"> Pharma</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="/home" style="font-weight: bold">Home</a></li>
                        <li><a href="/shop" style="font-weight: bold">Store</a></li>
                        <li><a href="/about" style="font-weight: bold">About</a></li>
                        @guest
                        <li><a href="{{ route('login') }}" style="font-weight: bold">Login</a></li>
                        <li><a href="{{ route('register') }}" style="font-weight: bold">Register</a></li>
                        @else
                        <li>
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                                <i class="ni ni-user-run"></i>
                                <span style="font-weight: bold">Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                        @endguest

                    </ul>
                </nav>
            </div>
            <div class="icons">
                <a href="/cart{obats}" class="icons-btn d-inline-block bag">
                    {{-- <span class="icon-shopping-bag"></span> --}}
                    {{-- <span class="number">2</span> --}}
                </a>
                {{-- <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                        class="icon-menu"></span></a> --}}
            </div>
        </div>
    </div>
</div>