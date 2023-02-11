<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html"></a>
    <!-- Form -->
    {{-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
      <div class="form-group mb-0">
        <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
          </div>
          <input class="form-control" placeholder="Search" type="text">
        </div>
      </div>
    </form> --}}
    <!-- User -->
    <ul class="navbar-nav align-items-center d-none d-md-flex">
      <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="{{asset('assets/img/theme/admin.png')}}">
            </span>
            <div class="media-body ml-2 d-none d-lg-block">
              <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name }}</span>
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>Logout</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  {{-- <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Stock Obat</h5>
                  <span class="h2 font-weight-bold mb-0">350,897</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Data user</h5>
                  <span class="h2 font-weight-bold mb-0">2,356</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                <span class="text-nowrap">Since last week</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Data akun</h5>
                  <span class="h2 font-weight-bold mb-0">924</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                <span class="text-nowrap">Since yesterday</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                  <span class="h2 font-weight-bold mb-0">49,65%</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <i class="fas fa-percent"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</div>