<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Mahasiswa</h1>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-sm-6">
      <a class="btn btn-danger" href="<?php echo base_url('mahasiswa'); ?>">
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
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
          </div>

          <form role="form" method="post" action="<?= base_url('mahasiswa/create/action'); ?>">
            <div class="card-body">
              <?php 
                if (!empty(validation_errors())) {
              ?>
              <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
              </div>
              <?php 
                }
              ?>

              <div class="form-group">
                <label for="nim">NIM</label>
                <input name="nim" type="text" class="form-control" id="nim" placeholder="NIM" maxlength="10" value="<?= set_value('nim') ?>" autofocus>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" maxlength="50" value="<?= set_value('nama') ?>">
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tgl Lahir</label>
                <input name="tgl_lahir" type="date" class="form-control" id="tgllahir" placeholder="tgllahir" maxlength="50" value="<?= set_value('tgl_lahir') ?>">
              </div>
              <div class="form-group">
                <label for="tmp_lahir">Tmp Lahir</label>
                <input name="tmp_lahir" type="text" class="form-control" id="tmplahir" placeholder="tmplahir" maxlength="50" value="<?= set_value('tmp_lahir') ?>">
              </div>
              <div class="form-group">
                <label for="jk">Jns Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                    <label class="form-check-label">
                        Laki-laki
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                    <label class="form-check-label">
                        Perempuan
                    </label>
                </div>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <select id="" class="form-control" name="agama">
                  <option value="">--Pilih--</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Khatolik">Katholik</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" maxlength="50" value="<?= set_value('alamat') ?>">
              </div>
              
              <div class="form-group">
                <label for="no-hp">Nomor HP</label>
                <input name="no_hp" type="text" class="form-control" id="no-hp" placeholder="Nomor HP" maxlength="15" value="<?= set_value('no_hp') ?>">
              </div>

              <div class="form-group">
                <label>Nama Jurusan</label>
                <select name="jurusan_id" class="form-control select-jurusan" style="width: 100%;">
                  <option></option>
                  <?php foreach ($jurusan as $j_data) { ?>
                    <option value="<?= $j_data->id ?>" <?= ($j_data->id == set_value('jurusan_id')) ? 'selected="selected"' : ''; ?> >(<?= $j_data->kode_jurusan ?>) <?= $j_data->nama_jurusan ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Program Studi</label>
                <select name="prodi_id" class="form-control select-prodi" style="width: 100%;">
                  <option></option>
                </select>
              </div>
                
              <div class="form-group">
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Kelas" maxlength="8" value="<?= set_value('kelas') ?>">
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
