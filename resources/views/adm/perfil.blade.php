
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
  <link rel="icon" type="image/png" href="img/logo.png">
  <title>
   Meu perfil
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4" id="navbarColorOnResize">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
             Navegação do usuário
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/menu">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                   Início
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/perfil">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                   Meu perfil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/criar">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Criar conta
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/login">
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
  {{-- <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('img/illustrations/voupedir.png'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">

                <div class="card-header">
                  
                </div>


                <div class="card-header">
                  <h4 class="font-weight-bolder">Cadastro</h4>
                  <p class="mb-0">Digite seu email para registrar sua conta</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Senha</label>
                      <input type="password" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Repetir senha</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        Eu aceito todos os <a href="javascript:;" class="text-dark font-weight-bolder">Termos & Condições</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-danger btn-lg w-100 mt-4 mb-0">CADASTRAR CONTA</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                   Já possui uma conta?
                    <a href="/login" class="text-primary text-gradient font-weight-bold">Acessar conta</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main> --}}

  <div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('img/illustrations/voupedirMofdi.png');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4 mb-2">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="img/logo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Vou Pidir
              <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar perfil"></i>

            </h5>
            <p class="mb-0 font-weight-normal text-sm">
              Perfil verificado <i class="fa fa-check text-primary  font-weight-bold" aria-hidden="true"></i>

            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                
               {{--  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/menu">
                  <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                 Início
                </a> --}}
                
                <a class="nav-link mb-0 px-0 py-1 active " href="/menu" aria-selected="true">
                  <i class="material-icons text-lg position-relative">home</i>
                  <span class="ms-1">Acessar menu</span>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="row">
          <div class="col-12 col-xl-4">
            <div class="card card-plain h-100">
              <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Configurações do seu perfil</h6>
              </div>
              <div class="card-body p-3">
                <h6 class="text-uppercase text-body text-xs font-weight-bolder">Dados</h6>

                <ul class="list-group">
                  <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome:</strong> &nbsp; Jota teste</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">CPF:</strong> &nbsp; 000.000.000-00</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Telefone:</strong> &nbsp; (99)9999-9999</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Localização:</strong> &nbsp; Brasil</li>
                  <li class="list-group-item border-0 ps-0 pb-0"></li>

                </ul>

                <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Aplicação</h6>
                <ul class="list-group">
                  <li class="list-group-item border-0 px-0">
                    <div class="form-check form-switch ps-0">
                      <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                      <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">Permitir recebimento de e-mail</label>
                    </div>
                  </li>
                  <li class="list-group-item border-0 px-0">
                    <div class="form-check form-switch ps-0">
                      <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                      <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Notificações por SMS</label>
                    </div>
                  </li>

                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">save</i>
                    <span class="ms-1">Salvar mudanças</span>
                  </a>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="card card-plain h-100">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-md-8 d-flex align-items-center">
                    <h6 class="mb-0">Informações para você</h6>
                  </div>
                  
                </div>
              </div>
              <div class="card-body p-3">
                <p class="text-sm">
                    Olá, seja bem vindo aos serviços da VouPidir, estarei lhe passando algumas  intruções adicionais.
                    <hr class="horizontal light mt-0 mb-2">
                    1 - Seu pedido só entrará na lista do ambiente que você solicitou após o pagamento.
                    <hr class="horizontal light mt-0 mb-2">
                    2 - Verifique que seu endereço esteja situado corretamente.
                    <hr class="horizontal light mt-0 mb-2">
                    3 - Somente conseguirá realizar pedidos se estiver logado no sistema.
                    <hr class="horizontal light mt-0 mb-2">
                    4 - Cancelamentos só podem ser feitos antes do pedido entrar em produção.
                </p>
                <hr class="horizontal gray-light my-4">
                
              </div>
            </div>
          </div>
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
  <script src="js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>