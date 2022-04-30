<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url() ?>" class="nav-link">Home</a>
    </li>
  </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
  <!-- Brand Logo -->
  <a href="<?= base_url() ?>" class="brand-link">
    <img src="<?= base_url() ?>public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>public/dist/img/admin.png" class="img-circle elevation-2" alt="Muhammad Aryo Muzakki">
      </div>
      <div class="info">
        <a href="#" class="d-block">Riko Airlan Ramadhan</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link <?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('mahasiswa') ?>" class="nav-link <?= ($this->uri->segment(1) == 'mahasiswa') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Mahasiswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('jurusan') ?>" class="nav-link <?= ($this->uri->segment(1) == 'jurusan') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Jurusan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('prodi') ?>" class="nav-link <?= ($this->uri->segment(1) == 'prodi') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Program Studi
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>