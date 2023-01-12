<nav class="text-black navbar navbar-dark navbar-expand-lg sticky-top bg-primary">
  <div class="container-fluid ms-5">
    <a class="navbar-brand" href="/">
      <div class="logo-image">
        <img src="{{ asset('image/adorn/LogoAdorn.1.png') }}" class="img-fluid" />
      </div>
    </a>
    <a class="navbar-brand me-auto" style="left: 50px; font-weight: bolder; font-size: 30px" href="/">Adorn</a>
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
                  <a class="dropdown-item px-2" href="/profile">Account</a>
                </li>
                <li>
                  <a href="/logout" id="navbar-logout-button" class="btn btn-danger">
                    Logout
                  </a>
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
