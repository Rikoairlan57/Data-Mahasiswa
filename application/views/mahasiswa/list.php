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
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-success" href="<?php echo base_url('mahasiswa/create') ?>">
              <i class="fas fa-plus mr-1"></i>
              Tambah Data Baru
            </a>
          </div>
          <div class="card-body">
            <table id="tabel-mahasiswa" class="tabel-data table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Tgl Lahir</th>
                  <th>Tmp Lahir</th>
                  <th>Jns Kelamin</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Jurusan</th>
                  <th>Program Studi</th>
                  <th>Kelas</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($data as $data) { ?>
                  <tr id="<?= $data->id; ?>">
                    <td></td>
                    <td><?= $no++; ?></td>
                    <td><?= $data->nim; ?></td>
                    <td><?= $data->nama; ?></td>
                    <td><?= $data->tgl_lahir; ?></td>
                    <td><?= $data->tmp_lahir; ?></td>
                    <td><?= $data->jk; ?></td>
                    <td><?= $data->agama; ?></td>
                    <td><?= $data->alamat; ?></td>
                    <td><?= $data->no_hp; ?></td>
                    <td><?= ($data->nama_jurusan == NULL) ? '<span class="text-muted font-italic">Jurusan belum dipilih!</span>': $data->nama_jurusan; ?></td>
                    <td><?= ($data->nama_prodi == NULL) ? '<span class="text-muted font-italic">Program Studi belum dipilih!</span>': $data->nama_prodi; ?></td>
                    <td><?= $data->kelas; ?></td>
                    <td>
                      <div class="d-flex">
                        <a class="btn btn-primary m-1" href="<?php echo base_url('mahasiswa/edit/' . $data->id) ?>">
                          <i class="fas fa-pen"></i>
                        </a>
                        <a class="btn btn-danger m-1 delete-btn " href="#">
                          <i class="fas fa-trash"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
