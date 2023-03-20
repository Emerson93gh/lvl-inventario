<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda ESV</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @push('css')
        <link rel="stylesheet" href="">
    @endpush

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    {{-- <div class="bg-image"
        style="background-image: url('https://cdn.wallpapersafari.com/49/73/mcEn0H.jpg');
        height: 100vh"> --}}
    <div class="bg-success p-2" style="--bs-bg-opacity: .2;">

    {{-- NavBar --}}
    <section>
        <div class="container pb-5">
            <nav class="navbar bg-body-tertiary sticky-top">
                <div class="container-fluid">
                  <a href="{{ url('/') }}" class="navbar-brand col-md-6">
                    <img src="{{ asset('assets/svg/store-svgrepo-com.svg') }}" alt="logo" width="60" height="60">
                    <span class="fs-4">ESV</span>
                </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="{{ asset('assets/svg/store-svgrepo-com.svg') }}" alt="logo" width="60" height="60">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ESV</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><i class="bi bi-shop-window"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/product') }}"><i class="bi bi-journal-bookmark"></i> Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/Emerson93gh/lvl-inventario.git" target="_blank"><i class="bi bi-code-square"></i> Repositorio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/Emerson93gh" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/emerson-s-24786247" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                        </li>
                      </ul>
                      {{-- <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form> --}}
                    </div>
                  </div>
                </div>
            </nav>
        </div>
    </section>

    {{-- Content --}}
    <section class="full-height py-3 px-lg-5 bd-layout">
        @yield('content')
    </section>

    {{-- Footer --}}
    <section class="mt-3">
        <footer class="bd-footer pt-4 py-md-5 mx-auto bg-body-tertiary sticky-bottom">
            <div class="container pb-4 py-md-5 px-4 px-md-3 text-body-secondary">
                <div class="row">
                    <p class="col-md-4 mb-0 py-2 text-muted"><span>Tienda ESV © 2023</span><br/> Code licensed MIT, Emerson Solano.</p>
                    <a href="{{ url('/') }}"
                        class="col-md-4 d-flex align-items-center justify-content-center pt-3 mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <img src="{{ asset('assets/svg/store-svgrepo-com.svg') }}" alt="logo" width="40" height="40"/>
                    </a>

                    <ul class="nav col-md-4 justify-content-end">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link px-2 text-muted"><i class="bi bi-shop-window"></i> Inicio</a></li>
                        <li class="nav-item"><a href="{{ url('/product') }}" class="nav-link px-2 text-muted"><i class="bi bi-journal-bookmark"></i> Productos</a></li>
                        <li class="nav-item"><a href="https://github.com/Emerson93gh/lvl-inventario.git" target="_blank" class="nav-link px-2 text-muted"><i class="bi bi-code-square"></i> Repositorio</a></li>
                        <li class="nav-item"><a href="https://github.com/Emerson93gh" target="_blank" class="nav-link px-2 text-muted"><i class="bi bi-github"></i></a></li>
                        <li class="nav-item"><a href="https://www.linkedin.com/in/emerson-s-24786247" target="_blank" class="nav-link px-2 text-muted"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

     <!-- JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
     crossorigin="anonymous"></script>
    </div>
</body>
</html>
