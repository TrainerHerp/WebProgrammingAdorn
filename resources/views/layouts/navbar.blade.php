<nav class="text-black navbar navbar-dark navbar-expand-lg sticky-top bg-primary">
  <div class="container-fluid ms-5">
    <a class="navbar-brand" href="./index.html">
      <div class="logo-image">
        <img src="{{ asset('storage/img/adorn/LogoAdorn.1.png') }}" class="img-fluid" />
      </div>
    </a>
    <a class="navbar-brand me-auto" style="left: 50px; font-weight: bolder; font-size: 30px" href="./index.html">Adorn</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto me-5">
        <li class="nav-item">
          <a class="nav-link" href="/explore">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rankings">Rankings</a>
        </li>
        @auth
          <li id="navbar-profile" class="nav-item ms-4">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="navbar-profile-name"
                data-bs-toggle="dropdown" aria-expanded="false">
                Hi {{ Auth::user()->username }}
              </button>
              <ul class="dropdown-menu text-center" aria-labelledby="navbar-profile-name">
                <li>
                  <a class="dropdown-item px-2" href="/user/{{ Auth::user()->id }}">Account</a>
                </li>
                <li>
                  <button id="navbar-logout-button" class="btn btn-danger">
                    Logout
                  </button>
                </li>
              </ul>
            </div>
          </li>
        @else
          <li id="navbar-button-login" class="nav-item ms-4">
            <a href="/login" class="bg-white text-primary btn btn-secondary">
              Sign In
            </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
