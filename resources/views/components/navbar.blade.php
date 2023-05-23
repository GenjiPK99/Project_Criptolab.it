<nav class="navbar navbar-expand-lg bg-success fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="{{route('home')}}">
    <img src="\media\bitcoin-cash-bch-logo.png" alt="ciao" style="height: 75px; width: 75px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item me-5">
          <a class="nav-link active fs-4 fw-bold text-light" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-4 fw-bold text-light" href= "{{ route('crypto.create') }}">Aggiungi Crypto</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-4 fw-bold text-light" href= "{{ route('crypto.index') }}">Lista Crypto</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-4 fw-bold text-light" href= "{{ route('crypto.contact') }}">Contatti</a>
        </li>
        <div>
          <li class="nav-item dropdown mx-auto">
          <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          @auth
          <p class="fw-bold fs-4 text-light">Benvenuto {{Auth::user()->name}}</p>
          @else
          <p class="fw-bold fs-5 text-light">Login/Register</p>
          @endauth
          </a>
          <ul class="dropdown-menu">
          @auth
            <li><a class="dropdown-item" href="{{route('wallet.create')}}">My Wallet</a></li>
            <li>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="btn dropdown-item" type="submit">Log-Out</button>
            </form>
            </li>
            @else
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          </ul>
          </li>
          @endauth
        </div>
      </ul>
    </div>
  </div>
       
</nav>