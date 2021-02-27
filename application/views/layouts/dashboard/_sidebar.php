<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= asset('dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $user->username ?></p>
        <small><?= $user->email ?></small>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <?php 
        $page = $this->uri->segment(1);
      ?>
      <li class="<?= $page === 'home' ? 'active' : ''; ?>">
        <a href="<?= base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <?php if ($this->ion_auth->is_admin()) : ?>
        <li class="header">ADMINISTRATOR</li>
        <li class="<?= $page === 'users' ? 'active' : '' ?>">
          <a href="<?= base_url('users'); ?>" rel="noopener noreferrer">
            <i class="fa fa-users"></i> <span>Manajemen Pengguna</span>
          </a>
        </li>
        <li class="<?= $page === 'settings' ? 'active' : '' ?>">
          <a href="<?= base_url('settings'); ?>" rel="noopener noreferrer">
            <i class="fa fa-cog"></i> <span>Pengaturan</span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>