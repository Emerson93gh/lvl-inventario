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
        <link rel="stylesheet" href="app.css">
    @endpush

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    {{-- NavBar --}}
    <section>
        <div class="container pb-5">
            {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid border-bottom">



                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav> --}}
            <nav class="navbar bg-body-tertiary sticky-top">
                <div class="container-fluid">
                  {{-- <a class="navbar-brand" href="#">Offcanvas navbar</a> fixed-top --}}
                  <a href="{{ url('/') }}" class="navbar-brand col-md-6">
                    <img src="{{ asset('assets/svg/store-svgrepo-com.svg') }}" alt="logo" width="60" height="60">
                    {{-- <i class="bi bi-shop-window" style="font-size: 2em"></i> --}}
                    <span class="fs-4">ESV</span>
                </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
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
                            <a class="nav-link" href="#"><i class="bi bi-code-square"></i> Repositorio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/Emerson93gh" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/emerson-s-24786247" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li> --}}
                      </ul>
                      {{-- <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form> --}}
                    </div>
                  </div>
                </div>
            </nav>
            {{-- <header class="d-flex flex-wrap justify-content-center pt-3 mb-2 border-bottom">
            </header> --}}
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
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link px-2 text-muted">Inicio</a></li>
                        <li class="nav-item"><a href="{{ url('/product') }}" class="nav-link px-2 text-muted">Productos</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="bi bi-code-square"></i> Repositorio</a></li>
                        <li class="nav-item"><a href="https://github.com/Emerson93gh" target="_blank" class="nav-link px-2 text-muted"><i class="bi bi-github"></i></a></li>
                        <li class="nav-item"><a href="https://www.linkedin.com/in/emerson-s-24786247" target="_blank" class="nav-link px-2 text-muted"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

    {{-- <div class="b-example-divider"></div> --}}
     <!-- JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
     crossorigin="anonymous"></script>
</body>
</html>
