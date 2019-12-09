<h2>Daftar <?= $title; ?></h2>

<div class="row">

  <!-- Tambah -->
  <div class="col-md">
    <a href="<?= base_url('pertanian_pertambangan/hortikultural/tambah'); ?>" class="btn btn-primary">Tambah Hortikultural</a>
  </div>

  <!-- Cari -->
  <div class="col-md float-right mb-2">
    <form action="<?= base_url('pertanian_pertambangan/hortikultural'); ?>" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data hortikultural..." name="keyword_hortikultural" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit" name="submit_hortikultural">Cari
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
        <div class="input-group-append">
          <a class="btn btn-info" href="<?= base_url('pertanian_pertambangan/unsetDataCariHortikultural') ?>" class="badge badge-info">Reset<i class="fas fa-redo"></i></a>
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
    <?php foreach ($hortikultural as $h) : ?>
      <tr>
        <th scope="row">
          <h2 class="text-danger font-weight-bold">1</h2>
        </th>
        <td><a href="<?= base_url('detail_daerah/pertanian_pertambangan/hortikultural/detail/') . $h['id']; ?>" class="btn btn-secondary btn-lg btn-block"><?= $h['judul']; ?></a></td>
        <td>
          <h2 class="text-success font-weight-bold"><?= $h['terakhir_update']; ?></h2>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>