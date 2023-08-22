<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid py-2">
      <a class="navbar-brand" href="#">Rental Mobil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('mobil')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('booking')}}">
              Peminjaman Mobil
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>