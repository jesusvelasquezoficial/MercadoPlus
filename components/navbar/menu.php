<!-- Dropdown -->
<div class="dropdown">
  <!-- Toggle -->
  <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 2) { ?>
    <a href="#" id="sidebarIcon" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div data-toggle="tooltip" data-placement="left" title="<?= $_SESSION['nombre'] ." ". $_SESSION['apellido'] ?>">
        <img src="assets/img/avatars/profiles/0.png" alt="..." class="avatar-img rounded-circle">
      </div>
    </a>
  <?php }else{ ?>
    <div id="sidebarIcon" class="avatar avatar-sm dropdown-toggle"> </div>
  <?php } ?>
  <!-- Menu -->
  <div class="dropdown-menu dropdown-menu-right">
    <a href="cms.php" class="dropdown-item">CMS</a>
    <a href="monitor.php" class="dropdown-item">Monitor <span class="badge badge-soft-success ml-auto">New</span></a>
  </div>
</div>
