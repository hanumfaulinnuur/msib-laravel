@include('component.app') 
<nav class="navbar navbar-expand-lg bg-body-tertiary  shadow p-3 mb-5 bg-body-tertiary rounded ">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="{{ '../asset/logo.png' }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
          </a>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="font-size:20px;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }} ">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Profil') }}">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Profil/Kampus') }}">Info Kampus</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
@yield('content')