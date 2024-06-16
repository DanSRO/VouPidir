<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
  <link rel="icon" type="image/png" href="img/logo.png">
  <title>
    Funcionários
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#"
        target="_blank">
        <img src="img/voupedirbrancoTot.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="/painel">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Início</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  active bg-gradient-danger" href="../pages/funcionarios.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Funcionários</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="/produtos">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Produtos</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Conta</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="login">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/criar">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Criar conta</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Página</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Funcionário</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Painel</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Buscar</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Deslogar</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../img/logo.png"
                          class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-secondary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Cadastro de funcionários</h6>
              </div>
            </div>

            <div class="row">
              <div class="row">
                <div class="col-12 col-xl-4">
                  <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                      <h6 class="mb-0">Cadastrar produtos</h6>
                    </div>
                    <div class="card-body p-3">
                      <h6 class="text-uppercase text-body text-xs font-weight-bolder">Formulário</h6>
                      <ul class="list-group">
                        <li class="list-group-item border-0 px-0">
                          <div class="input-group input-group-outline">
                            <label class="form-label">Nome do funcionário</label>
                            <input type="text" class="form-control">
                          </div>
                        </li>

                        <li class="list-group-item border-0 px-0">
                          <div class="input-group input-group-outline">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-control">
                          </div>
                        </li>

                        <li class="list-group-item border-0 px-0">
                          <label class="form-label">Foto</label>
                          <div class="input-group input-group-outline">

                            <input type="file" class="form-control">
                          </div>
                        </li>

                        <li class="list-group-item border-0 px-0">
                          <div class="input-group input-group-outline">
                            <label class="form-label">Cargo</label>
                            <input type="text" class="form-control">
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-xl-4">
                  <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                      <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                          <h6 class="mb-0">Conceder Privilégios</h6>
                        </div>
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Regras do seu negócio</h6>
                      </div>
                    </div>
                    <div class="card-body p-3">

                      <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <label>Permissão para cancelar pedidos?</label>
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                          onclick="navbarFixed(this)">
                      </div>

                      <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <label>Permissão para atender chamados?</label>
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                          onclick="navbarFixed(this)">
                      </div>

                      <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <label>Permissão para alterar/excluir produtos?</label>
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                          onclick="navbarFixed(this)">
                      </div>


                      <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <label>Conceder todos os privilégios?</label>
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                          onclick="navbarFixed(this)">
                      </div>

                      <hr class="horizontal gray-light my-4">
                     
                    </div>
                  </div>
                </div>

                <div class="col-12 col-xl-4">
                  <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                      <h6 class="mb-0">Funcionário </h6>
                    </div>

                    <div class="card-body p-3">
                      <ul class="list-group">
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                          <div class="avatar me-3">
                            <img src="img/logo.png" alt="kal" class="border-radius-lg shadow">
                          </div>
                          <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fulano da silva</h6>
                            <p class="mb-0 text-xs">Cargo</p>
                            <p class="mb-0 text-xs">E-mail</p>
                          </div>
                        </li>
                        <li class="list-group-item border-0 ps-0 pb-4 ">
                          <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button"
                            data-target="successToast">Cadastrar funcionário</button>
                        </li>

                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-12">
                <div class="card my-4">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Listagem</h6>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cargo</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cadastrado</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">John Michael</h6>
                                  <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">Manager</p>
                              <p class="text-xs text-secondary mb-0">Organization</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Editar
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                  <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">Programator</p>
                              <p class="text-xs text-secondary mb-0">Developer</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Editar
                              </a>
                            </td>
                          </tr>
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                desenvolvido <i class="fa fa-heart"></i> pela
                <a href="#" class="font-weight-bold" target="_blank">Link Lab</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Link Lab</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">WhastApp
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Serviços</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">

        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurações de atendimento</h5>
          <p>Você pode encerrar seu atendimento no horário que desejar</p>
        </div>
      </div>

      <hr class="horizontal dark my-1">
      <a href="#"class="btn btn-danger mb-0 me-2" target="_blank">
        <i class="fab fa-cuppom me-1" aria-hidden="true"></i> Fechar local
      </a>

      <hr class="horizontal dark my-1">
      <a href="#"class="btn btn-dark mb-0 me-2" target="_blank">
        <i class="fab fa-cuppom me-1" aria-hidden="true"></i> Gerar cumpom
      </a>

      <hr class="horizontal dark my-1">
      <a href="#"
        class="btn btn-dark mb-0 me-2" target="_blank">
         Oferta relâmpago
      </a>
      
      <div class="card-body pt-sm-3 pt-0">
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Claro / Escuro</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">Ver minha assinatura</a>
        <div class="w-100 text-center">
          <a class="github-button" href="#"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/material-dashboard on GitHub">Avalição do seu estabelecimento</a>
          <h6 class="mt-3">Obrigado por estar com a gente</h6>
          
        </div>
      </div>
    </div>
  </div> 
  <!--   Core JS Files   -->
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.min.js"></script>
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
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