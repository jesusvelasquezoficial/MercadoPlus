<!-- Dropdown -->
<div class="dropdown">
  <!-- Dropdown -->
  <!-- Toggle -->
  <?php if (isset($_SESSION['id']) && $_SESSION['id'] != "") { ?>
    <a href="#" id="sidebarIcon" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div data-toggle="tooltip" data-placement="left" title="<?= $_SESSION['nombre'] ." ". $_SESSION['apellido'] ?>">
        <?php echo '<img src="assets/img/avatars/profiles/avatar-'.$_SESSION['id'].'.jpg" alt="..." class="avatar-img rounded-circle">'; ?>
      </div>
    </a>
  <?php }else{ ?>
    <div id="sidebarIcon" class="avatar avatar-sm dropdown-toggle"> </div>
  <?php } ?>
  <!-- Menu -->
  <div class="dropdown-menu dropdown-menu-right">
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 2) { ?>
      <a href="cms.php" class="dropdown-item">CMS</a>
      <a href="monitor.php" class="dropdown-item">Monitor <span class="badge badge-soft-success ml-auto">New</span></a>
    <?php }else{ ?>
      <a href="#" class="dropdown-item">Perfil</a>
    <?php } ?>
    <a href="chat.php" class="dropdown-item">Chat</a>
  </div>
</div>
