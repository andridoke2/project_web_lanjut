<h2 class="panel-title"><strong>Daftar <?= $title; ?></strong></h2>

<div class="flash-data-perkebunan" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="row">

  <div class="col-md">
    <!-- Kembali -->
    <a href="<?= base_url('daerah/'); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <!-- Tambah -->
    <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/tambah'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Perkebunan</a>
  </div>

  <!-- Cari -->
  <div class="col-md float-right mb-2">
    <form action="<?= base_url('pertanian_pertambangan/perkebunan'); ?>" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data perkbunan..." name="keyword_perkebunan" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit" name="submit_perkebunan">Cari
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="input-group-append">
          <a class="btn btn-info" href="<?= base_url('pertanian_pertambangan/unsetDataCariPerkebunan') ?>" class="badge badge-info">Reset <i class="fas fa-redo fa-sm"></i></a>
        </div>
      </div>
    </form>
  </div>
  <!-- akhir Cari -->

</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Terakhir Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($perkebunan as $p) : ?>
      <tr>
        <th scope="row"><?= ++$i; ?></th>
        <td><a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/detail/') . $p['id']; ?>"><?= $p['judul']; ?></a></td>
        <td><?= $p['terakhir_update']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>