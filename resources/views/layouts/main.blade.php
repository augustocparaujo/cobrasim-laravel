<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>COBRA SIM</title>
    <meta name="description" content="Plataforma para geração e agendamento de notificação da cobrança" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/painel/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/painel/libs/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/painel/libs/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/painel/libs/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/painel/css/demo.css" />

    <!-- libss CSS -->
    <link rel="stylesheet" href="/painel/libs/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/painel/libs/libs/apex-charts/apex-charts.css" />

    <!-- Helpers -->
    <script src="/painel/libs/js/helpers.js"></script>
    <script src="/painel/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/dashboard" class="app-brand-link">   
              <img src="/painel/img/logo.png" class="app-brand-logo demo" width="85%"/>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Cliente</span>
            </li>
            <li class="menu-item cliente-listar">
              <a href="/cliente/cadastrar" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="Boxicons">Cadastrar</div>
              </a>
            </li>
            <li class="menu-item cliente-listar">
              <a href="/cliente/listar" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Boxicons">Listar</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/cliente/importar" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Importar</div>
              </a>
            </li>         
           
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Relatório</span></li>
            <li class="menu-item">
              <a href="/relatorio/cobranca" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cobrança</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/relatorio/notificacao-agendada" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Notificação agendada</div>
              </a>
            </li>

             <!-- Components -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">Notificação</span></li>
             <li class="menu-item">
               <a href="/notificacao/manual" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Manual</div>
               </a>
             </li>
             <li class="menu-item">
               <a href="/notificacao/agendada" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                 <div data-i18n="Basic">Agendada</div>
               </a>
             </li>
           

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Configurações</span></li>
            <li class="menu-item">
              <a href="/configuracoes/banco" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Banco</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/configuracoes/mensagem" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Mensagem</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/configuracoes/integracao" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Integração</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/configuracoes/tipocobranca" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Tipos de cobrança</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/configuracoes/instancia" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Instância whatsapp</div>
              </a>
            </li>

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Ajuda</span></li>
            <li class="menu-item">
              <a href="https://wa.me/5591991968433?text=Ol%C3%A1%2C+gostaria+de+saber+mais+informa%C3%A7%C3%B5es+sobre+o+COBRA+SIM" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Suporte</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/ajuda/documento" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentos</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <form action="/cliente/listar">
                @csrf
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input type="text" class="form-control border-0 shadow-none" placeholder="Buscar..." aria-label="Buscar..." name="search"/>
                </div>
              </div>
            </form>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../painel/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../painel/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/usuario/perfil">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Perfil</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/usuario/sair">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Sair</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- corpo -->  
                @yield('content')
              <!-- corpo -->

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- msg -->
    @if(session('msg'))
    <div class="buy-now">
      <div class="alert alert-{{ session('tipo') }} alert-dismissible btn-buy-now text-black" role="alert">
        {{ session('msg') }}!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    @endif

    <!-- Core JS -->
    <!-- build:js assets/libs/js/core.js -->
    <script src="/painel/libs/libs/jquery/jquery.js"></script>
    <script src="/painel/libs/libs/popper/popper.js"></script>
    <script src="/painel/libs/js/bootstrap.js"></script>
    <script src="/painel/libs/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/painel/libs/js/menu.js"></script>
    <!-- endbuild -->

    <!-- libss JS -->
    <script src="/painel/libs/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/painel/js/main.js"></script>
    <!-- static Js -->
    <script src="/painel/libs/js/maskInput.js"></script>

    <!-- Page JS -->
    <script src="/painel/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Js mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <!-- personal js-->
    <script>
      $('.buy-now').fadeOut(6000);
    </script>
  </body>
</html>
