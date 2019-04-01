<!-- NAVIGATION LEFT
================================================== -->
<nav class="navbar navbar-vertical fixed-left fixed-top navbar-expand-md navbar-light" id="sidebar">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
      <img src="assets/img/logo.png" class="navbar-brand-img mx-auto" alt="...">
    </a>
    <!-- User (xs) -->
    <div class="navbar-user d-md-none">
      <!-- Dropdown -->
      <div class="dropdown">
        <!-- Toggle -->
        <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-sm avatar-online">
            <img src="assets/img/avatars/profiles/0.png" class="avatar-img rounded-circle" alt="...">
          </div>
        </a>
        <!-- Menu -->
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input dropdown-item" id="switch1080">
          </div>
          <a href="cms.php" class="dropdown-item">CMS</a>
        </div>
      </div>
    </div>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidebarCollapse">
      <!-- Navigation -->
      <ul class="navbar-nav mb-md-4">
        <!-- INICIO -->
        <li class="nav-item">
          <a class="nav-link" href="#sidebarInicio" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInicio">
            <i class="fe fe-home"></i> Inicio
          </a>
          <div class="collapse" id="sidebarInicio">
            <nav id="principal" >
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php#view1">
                    Datos OTC
                    <span class="badge badge-soft-success ml-auto">New</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#view2">
                    Datos Oficiales
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="login.php">
            <i class="fe fe-log-in"></i> Iniciar Sessión
          </a>
        </li>
      </ul>
      <!-- Push content down -->
      <div class="mt-auto"></div>
      <!-- Customize -->
      <!-- <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
        <i class="fe fe-sliders mr-2"></i> Customize
      </a> -->
      <!-- User (md) -->
    </div> <!-- / .navbar-collapse -->
  </div>
</nav>

<!-- NAVIGATION TOP
================================================== -->
<div class="main-content fixed-top ">
  <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container-fluid">
      <!-- Form -->
      <div class="d-flex"></div>
      <!-- User -->
      <div class="navbar-user">
        <!-- Dropdown -->
        <div class="dropdown">
          <!-- Toggle -->
          <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="assets/img/avatars/profiles/0.png" alt="..." class="avatar-img rounded-circle">
          </a>
          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-right">
            <a href="cms.php" class="dropdown-item">CMS</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
