<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylehome.css">

    <title>Pasar Online</title>
  </head>
  <body>
<!-- ------------------------------ NAVBAR ------------------------------ -->

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container">
  <nav class="navbar navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">
        <div class="logo-2 furniture-logo ptb-30">
            <a href="/">
                <img height="50" style="transform:scale(1.5);object-fit: cover;" src="{{ asset('img/logo.png') }}" alt="">
            </a>
        </div>
    </a>
  </div>
</nav>
    <a class="navbar-brand" href="/">Pasar <strong>Online</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form class="d-flex ms-auto">
        <input class="form-control me-2" type="search" placeholder="Cari Kebutuhan Anda" aria-label="Search">
        <button class="btn btn-light" type="submit">Cari</button>
    </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/notifikasi">
            <img src="img/chat.png" width="35">
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/keranjang">
            <img src="img/pesanan.png" width="35">
          </a>
        </li>
        <li class="nav-item">
          <ul>
            @guest
                <li>Get Access: <a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li>Hello: <a href="{{ route('profile.index') }}">{{ auth()->user()->username }}</a></li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- ------------------------------ NAVBAR ------------------------------ -->

<!-- ------------------------------ SLIDE ------------------------------ -->

<div class= "container mt-4">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/S1.png" class="d-block w-35" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/S2.png" class="d-block w-35" alt="...">
    </div>
    <!-- <div class="carousel-item">
      <img src="#" class="d-block w-35" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- ------------------------------ SLIDE ------------------------------ -->

<!-- ------------------------------ KATEGORI ------------------------------ -->
<div class="container-fluid bg-primary rounded">
<div class="container-fluid ms-auto mt-3">
  <h4 class="text-center mt-2"><strong>Kategori</strong></h4>
</div>
<div class="container ms-4">
  <div class="row text-center">
  <div class="col-lg-2 col-md-2 col-sm-4 col-6">
    <div class="mt-2" style="width: 75px">
    <a href="produk">
      <img src="img/daging.png" class="card-img-top" alt="...">
      <h6 class="text-dark">Daging</h6>
    </a>
  </div>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-2 col-6">
    <div class="mt-2" style="width: 75px">
    <a href="produk">
      <img src="img/buah1.png" class="card-img-top" alt="...">
      <h6 class="text-dark">Buah-buahan</h6>
    </a>
  </div>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-2 col-6">
    <div class="mt-2" style="width: 75px">
    <a href="produk">
      <img src="img/biji.png" class="card-img-top" alt="...">
      <h6 class="text-dark">Biji-bijian</h6>
    </a>
  </div>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-2 col-6">
    <div class="mt-2" style="width: 75px">
    <a href="produk">
      <img src="img/sayuran.png" class="card-img-top" alt="...">
      <h6 class="text-dark">sayur sayuran</h6>
    </a>
  </div>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-2 col-6">
    <div class="mt-2" style="width: 75px">
    <a href="produk">
      <img src="img/bumbu.png" class="card-img-top" alt="...">
      <h6 class="text-dark">Bumbu</h6>
    </a>
  </div>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-2 col-6">
    <div class="mt-2" style="width: 75px">
    <a href="produk">
      <img src="img/kemasan.png" class="card-img-top" alt="...">
      <h6 class="text-dark">Bumbu jadi</h6>
    </a>
  </div>
  </div>

  


<!-- ---------- produk ----------- -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
