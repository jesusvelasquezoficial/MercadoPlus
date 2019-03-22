<!-- NAVIGATION LEFT
================================================== -->
<nav class="navbar navbar-vertical fixed-left fixed-top navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="index-2.html">
        <img src="assets/img/logo.svg" class="navbar-brand-img
        mx-auto" alt="...">
      </a>

      <!-- User (xs) -->
      <div class="navbar-user d-md-none">

        <!-- Dropdown -->
        <div class="dropdown">

          <!-- Toggle -->
          <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
              <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
            </div>
          </a>

          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
            <a href="profile-posts.html" class="dropdown-item">Profile</a>
            <a href="settings.html" class="dropdown-item">Settings</a>
            <hr class="dropdown-divider">
            <a href="sign-in.html" class="dropdown-item">Logout</a>
          </div>

        </div>

      </div>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">

        <!-- Navigation -->
        <ul class="navbar-nav mb-md-4">

          <!-- INICIO -->
          <li class="nav-item">
            <a class="nav-link" href="#sidebarInicio" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarInicio">
              <i class="fe fe-home"></i> Inicio
            </a>
            <div class="collapse show" id="sidebarInicio">
              <nav id="principal" >
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#view1">
                      View 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#view2">
                      View 2
                      <span class="badge badge-soft-success ml-auto">New</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="getting-started.html">
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
              <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile-posts.html" class="dropdown-item">Profile</a>
              <a href="settings.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

      </div>
    </nav>
</div>
