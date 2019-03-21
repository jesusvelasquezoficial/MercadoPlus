<!doctype html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
  <?php include 'modals.php'; ?>

  <!-- NAVIGATION LEFT
  ================================================== -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
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

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                <i class="fe fe-home"></i> Dashboards
              </a>
              <div class="collapse show" id="sidebarDashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="index-2.html" class="nav-link ">
                      Default
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="dashboard-alt.html" class="nav-link active">
                      Alternative <span class="badge badge-soft-success ml-auto">New</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                <i class="fe fe-file"></i> Pages
              </a>
              <div class="collapse " id="sidebarPages">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                      Profile
                    </a>
                    <div class="collapse " id="sidebarProfile">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="profile-posts.html" class="nav-link ">
                            Posts
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="profile-groups.html" class="nav-link ">
                            Groups
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="profile-projects.html" class="nav-link ">
                            Projects
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="profile-files.html" class="nav-link ">
                            Files
                          </a>
                        </li>
                          <li class="nav-item">
                          <a href="profile-subscribers.html" class="nav-link ">
                            Subscribers
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#sidebarProject" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                      Project
                    </a>
                    <div class="collapse " id="sidebarProject">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="project-overview.html" class="nav-link ">
                            Overview
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="project-files.html" class="nav-link ">
                            Files
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="project-reports.html" class="nav-link ">
                            Reports
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="project-new.html" class="nav-link ">
                            New project
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                      Team
                    </a>
                    <div class="collapse " id="sidebarTeam">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="team-overview.html" class="nav-link ">
                            Overview
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="team-projects.html" class="nav-link ">
                            Projects
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="team-members.html" class="nav-link ">
                            Members
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="team-new.html" class="nav-link ">
                            New team
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="orders.html" class="nav-link ">
                      Orders
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="feed.html" class="nav-link ">
                      Feed
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="settings.html" class="nav-link ">
                      Settings
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="invoice.html" class="nav-link ">
                      Invoice
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pricing.html" class="nav-link ">
                      Pricing
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                <i class="fe fe-user"></i> Authentication
              </a>
              <div class="collapse" id="sidebarAuth">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                      Sign in
                    </a>
                    <div class="collapse" id="sidebarSignIn">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="sign-in-cover.html" class="nav-link">
                            Cover
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="sign-in-illustration.html" class="nav-link">
                            Illustration
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="sign-in.html" class="nav-link">
                            Basic
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                      Sign up
                    </a>
                    <div class="collapse" id="sidebarSignUp">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="sign-up-cover.html" class="nav-link">
                            Cover
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="sign-up-illustration.html" class="nav-link">
                            Illustration
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="sign-up.html" class="nav-link">
                            Basic
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                      Password reset
                    </a>
                    <div class="collapse" id="sidebarPassword">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="password-reset-cover.html" class="nav-link">
                            Cover
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="password-reset-illustration.html" class="nav-link">
                            Illustration
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="password-reset.html" class="nav-link">
                            Basic
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                      Error
                    </a>
                    <div class="collapse" id="sidebarError">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="error-illustration.html" class="nav-link">
                            Illustration
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="error.html" class="nav-link">
                            Basic
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
               <span class="fe fe-bell"></span> Notifications
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Heading -->
          <h6 class="navbar-heading">
            Documentation
          </h6>

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
            <li class="nav-item">
              <a class="nav-link " href="getting-started.html">
                <i class="fe fe-clipboard"></i> Getting started
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                <i class="fe fe-book-open"></i> Components
              </a>
              <div class="collapse " id="sidebarComponents">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="components.html#alerts" class="nav-link">
                      Alerts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#avatars" class="nav-link">
                      Avatars
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#badges" class="nav-link">
                      Badges
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#breadcrumb" class="nav-link">
                      Breadcrumb
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#buttons" class="nav-link">
                      Buttons
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#button-group" class="nav-link">
                      Button group
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#cards" class="nav-link">
                      Cards
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#charts" class="nav-link">
                      Charts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#dropdowns" class="nav-link">
                      Dropdowns
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#forms" class="nav-link">
                      Forms
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#icons" class="nav-link">
                      Icons
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#lists" class="nav-link">
                      Lists
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#modal" class="nav-link">
                      Modal
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#navs" class="nav-link">
                      Navs
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#navbarExample" class="nav-link">
                      Navbar
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#page-headers" class="nav-link">
                      Page headers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#pagination" class="nav-link">
                      Pagination
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#popovers" class="nav-link">
                      Popovers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#progress" class="nav-link">
                      Progress
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#social-posts" class="nav-link">
                      Social post
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#spinners" class="nav-link">
                      Spinners
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#tables" class="nav-link">
                      Tables
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#toasts" class="nav-link">
                      Toasts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#tooltips" class="nav-link">
                      Tooltips
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#typography" class="nav-link">
                      Typography
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="components.html#utilities" class="nav-link">
                      Utilities
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="changelog.html">
                <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.3.4</span>
              </a>
            </li>
          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>


          <!-- Customize -->
          <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
            <i class="fe fe-sliders mr-2"></i> Customize
          </a>



          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex" id="sidebarUser">

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Dropup -->
            <div class="dropup">

              <!-- Toggle -->
              <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
              <span class="<ico></ico>n">
                <i class="fe fe-search"></i>
              </span>
            </a>

          </div>


        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>

  <!-- NAVIGATION TOP
  ================================================== -->
  <div class="main-content fixed-top ">
    <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">

          <!-- Form -->
          <form class="form-inline mr-4 d-none d-md-flex">
            <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

              <!-- Input -->
              <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fe fe-search"></i>
                </div>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list my-n3">
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="project-overview.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="profile-posts.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a href="profile-posts.html" class="list-group-item px-0">

                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-danger">●</span> Offline
                          </p>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                  </div>

                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-md-flex">

              <!-- Toggle -->
              <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Title -->
                      <h5 class="card-header-title">
                        Notifications
                      </h5>

                    </div>
                    <div class="col-auto">

                      <!-- Link -->
                      <a href="#!" class="small">
                        View all
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush my-n3">
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Grace Gross</strong> subscribed to you.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>

                        </div>
                      </div> <!-- / .row -->

                    </a>
                  </div>

                </div>
              </div> <!-- / .dropdown-menu -->

            </div>

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

  <!-- MAIN CONTENT
  ================================================== -->
  <div class="main-content mt-md-6" style="width:auto;">

    <!-- HEADER -->
    <div class="header">
      <div class="container-fluid">
        <!-- Body -->
        <div class="header-body">
          <div class="row align-items-end">
            <div class="col">
              <!-- Pretitle -->
              <h6 class="header-pretitle">
                <!-- Overview -->
                Visión general
              </h6>
              <!-- Title -->
              <h1 class="header-title">Información del promedio dolar oficial y paralelo en venezuela</h1>

            </div>
            <!-- Fecha y Hora -->
            <div class="col-auto">
              <ul class="list-group text-right">
                <li class="list-group-item p-0 border-0 display-4"><i class="fe fe-calendar"></i> 21/03/2019</li>
                <li class="list-group-item p-0 border-0 h2"><i class="fe fe-clock"></i> 12:00 AM</li>
              </ul>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .header-body -->
      </div>
    </div> <!-- / .header -->

    <!-- CARDS -->
    <div class="container-fluid">
      <div class="row">

        <style>
        body{
          background-image: url("assets/img/fondo.jpeg");
          background-repeat: no-repeat;
          background-position: top;
          background-attachment: fixed;
        }
        .card{
          background: rbga(0,0,0,0.5) !important;
          background-color: rbga(0,0,0,0.5) !important;
        }
        </style>

        <!-- Tasa de Mercados -->
        <div class="col-12 col-xl-6">

          <!-- Goals -->
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <!-- Title -->
                  <h2 class="card-header-title text-center">
                    Tasas de Mercados
                  </h2>
                </div>
              </div> <!-- / .row -->
            </div>

            <div class="table-responsive mb-0">
              <table class="table table-sm table-nowrap card-table">
                <tbody class="list">
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> DolarToday </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-up text-success"> 0.2% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> DolarToday (BTC) </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-down text-danger"> 0.1% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> TheAirTM </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-up text-success"> 0.2% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> DolarTrue_ </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-down text-danger"> 0.1% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> MonitorDolarVZLA </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-up text-success"> 0.2% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> MKambio </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-up text-success"> 0.2% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> Dolar_Gold </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-down text-danger"> 0.1% </i> </td>
                  </tr>
                  <tr>
                    <td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> Dolar_FT </td>
                    <td class="text-right h2 font-weight-bold"  data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"> 329771 </td>
                    <td class="text-right h2"> <i class="fe fe-chevron-up text-success"> 0.2% </i> </td>
                  </tr>
                  <tr class="text-white " style="background-color:#f95d02;">
                    <td class="pb-0 text-right"> <h1>PROMEDIO</h1> </td>
                    <td class="pb-0 pt-2 text-right font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;font-size:2.5em;"> <h1>322366</h1> </td>
                    <td class="pb-0 text-right"  style="font-size:2.5em;"> <h1><i class="fe fe-minus "></i> 0.0% </h1></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- Promedio del Dia -->
        <div class="col-12 col-xl-6">
          <!-- Card -->
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <!-- Title -->
                  <h2 class="card-header-title text-center">
                    Promedio del Dia
                  </h2>
                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-body text-center">

              <div class="row justify-content-center p-4 border">
                <div class="col-12 col-sm-4">
                  <div class="display-4 " style="font-size:1.85em;">DOLAR</div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="display-4 border-success text-success" style="font-size:1.85em;">3.136.69</div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="display-4 border-danger text-danger" style="font-size:1.85em;">3.458.61</div>
                </div>
              </div> <!-- / .row -->

              <div class="row justify-content-center p-4 border mt-4">
                <div class="col-12 col-sm-4">
                  <div class="display-4 " style="font-size:1.85em;">EURO</div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="display-4 border-success text-success" style="font-size:1.85em;">3.556.68</div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="display-4 border-danger  text-danger" style="font-size:1.85em;">3.921.71</div>
                </div>
              </div> <!-- / .row -->
            </div>
          </div>

        </div>

        <!-- Nota Importante  -->
        <div class="col-12">
          <div class="alert alert-light alert-dismissible fade show" role="alert">
            <strong> NOTA IMPORTANTE:</strong> Los precios reflejados son obtenidos de los indicadores referenciales y los resultados son mostrado a modo de orientacion.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>

      </div> <!-- / .row -->
    </div>



  </div> <!-- / .main-content -->

  <!-- JAVASCRIPT
  ================================================== -->
  <!-- Libs JS -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
  <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
  <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
  <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="assets/libs/list.js/dist/list.min.js"></script>
  <script src="assets/libs/quill/dist/quill.min.js"></script>
  <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="assets/libs/select2/dist/js/select2.min.js"></script>
  <script src="assets/libs/chart.js/Chart.extension.min.js"></script>

  <!-- Theme JS -->
  <script src="assets/js/theme.min.js"></script>

</body>
</html>
