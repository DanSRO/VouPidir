<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/logo.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
    <title>
        Bandeja
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('dashboard')}}">
                            Navegação do usuário
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="{{route('menu')}}">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Início
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('perfil')}}">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Meu perfil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('register')}}">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        Criar conta
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('login')}}">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        Logar
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                style="background-image: '{{asset(`img/illustrations/voupedir.png`)}}'; background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">

                                <div class="card-header">

                                </div>


                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Seus pedidos</h4>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-50 w-md-auto"  href="javascript:;">Total de:R$00,00</a>
                                </div>
                                <div class="card-body">

                                    <div class="card-body p-1">
                                        <ul class="list-group">
                                            <li
                                                class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                                <div class="avatar me-3">
                                                    <img src="{{asset('img/logo.png')}}" alt="kal"
                                                        class="border-radius-lg shadow">
                                                </div>
                                                <div
                                                    class="d-flex align-items-start flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Produto 1</h6>
                                                    <p class="mb-0 text-xs">R$:00,00</p>
                                                    <p class="mb-0 text-xs">Quantidade</p>
                                                </div>
                                                
                                            </li>
                                        </ul>
                                    </div>


                                    {{-- Esse trecho abaixo só deve aparecer se for clicado botão editar acima --}}
                                    <form role="form">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Quantidade</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Observação</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <button type="button" class="btn btn-lg bg-gradient-danger btn-lg w-50 mt-4 mb-0"><i class="fa fa-trash"></i></button>
                                        </div>


                                        <div class="form-check form-check-info text-start ps-0">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                * Mudanças somente podem ser feitas antes do seu pedido entrar em <a
                                                    href="javascript:;"
                                                    class="text-dark font-weight-bolder">Produção</a>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button"
                                                class="btn btn-lg bg-gradient-danger btn-lg w-100 mt-4 mb-0">Finalizar
                                                pedido</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="{{asset('https://buttons.github.io/buttons.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>
