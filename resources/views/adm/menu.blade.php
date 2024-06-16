<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/logo.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
  <title>
   Menu
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
          class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4" id="navbarColorOnResize">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="#">
              <div class="input-group input-group-outline">
                <label class="form-label">Buscar </label>
                <input type="text" class="form-control">
              </div>
             
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

                <li class="nav-item">
                  <a class="nav-link me-2" href="{{route('bandeja')}}">
                    <i class="fa fa-shopping-cart opacity-6 text-dark me-1"></i>
                    Pedidos
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
  <div class="fixed-plugin">
    
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">

        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        
        <div class="float-start">
          <h5 class="mt-3 mb-0">Muito Obrigado por estar com a gente</h5>
          <h4>Confirme a quantidade que você deseja</h4>
        </div>

        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Quantidade:</label>
            <input formControlName="sGPTypeDeliveryId"  class="form-control" required="required" type="number" step="1" />
          </div>
        
      </div>
      
      <div class="card-body pt-sm-3 pt-0">
        <hr class="horizontal dark my-3">
        
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-primary w-100" href="">Confirmar a quantidade</a>
      </div>
    </div>
  </div>

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <hr class="horizontal light mt-0 mb-8">
            <div class="col-xl-12 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="col-12 mt-4">
                <div class="mb-5 ps-3">
                  <h6 class="mb-1">Produtos</h6>
                 
                  <!--  <p class="text-sm">Últimos cadastrados</p> -->

                  <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                      <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab"
                            aria-selected="true">
                          
                            <span class="ms-1">Comida</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                            aria-selected="false">
                           
                            <span class="ms-1">Bebidas</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                            aria-selected="false">
                           
                            <span class="ms-1">Diversos</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                      <div class="card-header p-3 pt-2">
                        <div
                          class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                          <i class="material-icons text-sm my-auto me-1">schedule</i>
                        </div>
                        <div class="card-header p-0 mt-n4 mx-3">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('img/pizza.jpg')}}" alt="img-blur-shadow"
                              class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body p-3">
                          <a href="javascript:;">
                            <h5> Nome </h5>

                          </a>
                          <p class="mb-0 text-sm">Preço</p>
                          <p class="mb-4 text-sm">
                            Descrição
                          </p>
                        </div>

                        <a href="javascript:;" class="nav-link text-body p-0">
                            <p class="mb-4 text-sm" >
                          {{-- <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button> --}}
                              <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button>
                              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                
                        </p>
                    </a>
                        
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                      <div class="card-header p-3 pt-2">
                        <div
                          class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                          <i class="material-icons text-sm my-auto me-1">schedule</i>
                        </div>
                        <div class="card-header p-0 mt-n4 mx-3">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('img/pizza.jpg')}}" alt="img-blur-shadow"
                              class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body p-3">
                          <a href="javascript:;">
                            <h5> Nome </h5>
                          </a>
                          <p class="mb-0 text-sm">Preço</p>
                          <p class="mb-4 text-sm">
                            Descrição
                          </p>
                        </div>

                        <p class="mb-4 text-sm">
                          <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                      <div class="card-header p-3 pt-2">
                        <div
                          class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                          <i class="material-icons text-sm my-auto me-1">schedule</i>
                        </div>
                        <div class="card-header p-0 mt-n4 mx-3">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('img/pizza.jpg')}}" alt="img-blur-shadow"
                              class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body p-3">
                          <a href="javascript:;">
                            <h5> Nome </h5>
                          </a>
                          <p class="mb-0 text-sm">Preço</p>
                          <p class="mb-4 text-sm">
                            Descrição
                          </p>
                        </div>

                        <p class="mb-4 text-sm">
                          <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <hr class="horizontal light mt-0 mb-2">
            <div class="col-xl-12 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="col-12 mt-4">
                <div class="mb-5 ps-3">
                  <h6 class="mb-1">Promoções</h6>
                  <!--  <p class="text-sm">Últimos cadastrados</p> -->

                  <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                      <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab"
                            aria-selected="true">
                          
                            <span class="ms-1">Comida</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                            aria-selected="false">
                           
                            <span class="ms-1">Bebidas</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                            aria-selected="false">
                           
                            <span class="ms-1">Diversos</span>
                            
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                      <div class="card-header p-3 pt-2">
                        <div
                          class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                          <i class="material-icons text-sm my-auto me-1">schedule</i>
                        </div>
                        <div class="card-header p-0 mt-n4 mx-3">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('img/pizza.jpg')}}" alt="img-blur-shadow"
                              class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body p-3">
                          <a href="javascript:;">
                            <h5> Nome </h5>

                          </a>
                          <p class="mb-0 text-sm">Preço</p>
                          <p class="mb-4 text-sm">
                            Descrição
                          </p>
                        </div>

                        <p class="mb-4 text-sm">
                          <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                      <div class="card-header p-3 pt-2">
                        <div
                          class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                          <i class="material-icons text-sm my-auto me-1">schedule</i>
                        </div>
                        <div class="card-header p-0 mt-n4 mx-3">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('img/pizza.jpg')}}" alt="img-blur-shadow"
                              class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body p-3">
                          <a href="javascript:;">
                            <h5> Nome </h5>
                          </a>
                          <p class="mb-0 text-sm">Preço</p>
                          <p class="mb-4 text-sm">
                            Descrição
                          </p>
                        </div>

                        <p class="mb-4 text-sm">
                          <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                      <div class="card-header p-3 pt-2">
                        <div
                          class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                          <i class="material-icons text-sm my-auto me-1">schedule</i>
                        </div>
                        <div class="card-header p-0 mt-n4 mx-3">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{asset('img/pizza.jpg')}}" alt="img-blur-shadow"
                              class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body p-3">
                          <a href="javascript:;">
                            <h5> Nome </h5>
                          </a>
                          <p class="mb-0 text-sm">Preço</p>
                          <p class="mb-4 text-sm">
                            Descrição
                          </p>
                        </div>

                        <p class="mb-4 text-sm">
                          <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Eu quero <i
                              class="fa fa-shopping-cart opacity-8 text-white me-1"></i></button>
                        </p>
                      </div>
                    </div>
                  </div>
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
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>