<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Login Registration</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Ana Sayfa</a>
          </li>
          @guest()


          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Kayit ol</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Giriş yap</a>
          </li>
          @else
cd
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">{{ auth()->user()->name }}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="document.getElementById('logoutFrom').submit();"> Çıkış Yap</a>
            <form action="{{ route('logout') }}"id="logoutFrom" method="POST">
                @csrf
            </form>
          </li>


          @endguest
        </ul>
      </div>
    </div>
  </nav>
