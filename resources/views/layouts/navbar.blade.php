<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <title>Document</title>
</head>
<body>
<nav class="navbar" style="background-color: #fbd0d9; box shadow: 0px 5px 10px rgba(0, 0, 0, 0.50)">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Penjualan</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{url('produk')}}">Data Produk</a></li>
                <li><a class="dropdown-item" href="{{url('pelanggan')}}">Data Pelanggan</a></li>
                <li><a class="dropdown-item" href="{{url('penjualan')}}">Data Penjualan</a></li>
                <li><a class="dropdown-item" href="{{url('penjualan')}}">Data User</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{url('penjualan')}}">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>
