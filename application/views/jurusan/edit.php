<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Jurusan</h1>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-sm-6">
        <a class="btn btn-danger" href="<?php echo base_url('jurusan'); ?>">
          <i class="fas fa-times mr-1"></i>
          Batal
        </a>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Ubah Data</h3>
          </div>

          <form role="form" method="post" action="<?= base_url('jurusan/update/' . $jurusan->id); ?>">
            <div class="card-body">

              <?php
              if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('message');
                echo "</div>";
              }
              ?>
              
              <div class="form-group">
                <label for="kode_jurusan">Kode Jurusan</label>
                <input name="kode_jurusan" type="text" class="form-control" id="kode_jurusan" value="<?= $jurusan->kode_jurusan ?>" maxlength="3" autofocus>
              </div>

              <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input name="nama_jurusan" type="text" class="form-control" id="nama_jurusan" value="<?= $jurusan->nama_jurusan ?>" maxlength="50">
              </div>

            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
