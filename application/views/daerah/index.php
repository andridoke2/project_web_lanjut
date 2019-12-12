<h1>Daftar <?= $title; ?></h1>

<div class="flash-data-daerah" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="row">

  <!-- Tambah -->
  <div class="col-md">
    <a href="<?= base_url('daerah/tambah'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Daerah</a>
  </div>

  <!-- Cari -->
  <div class="col-md float-right mb-2">
    <form action="<?= base_url('daerah'); ?>" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data daerah..." name="keyword_daerah" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit" name="submit_daerah">Cari
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="input-group-append">
          <a class="btn btn-info" href="<?= base_url('daerah/unsetDataCariDaerah') ?>" class="badge badge-info">Reset<i class="fas fa-redo fa-sm"></i></a>
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
      <th scope="col">NID</th>
      <th scope="col">Parent NID</th>
      <th scope="col">Name</th>
      <th scope="col">Serial</th>
      <th scope="col">Type</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($daerah as $lokasi) : ?>
      <tr>
        <th scope="row"><?= ++$start; ?></th>
        <td><?= $lokasi['nid']; ?></td>
        <td><?= $lokasi['parent_nid']; ?></td>
        <td><?= $lokasi['name'] ?></td>
        <td><?= $lokasi['serial']; ?></td>
        <td><?= $lokasi['type']; ?></td>
        <td><?= $lokasi['latitude']; ?></td>
        <td><?= $lokasi['longitude']; ?></td>
        <td><?= $lokasi['status']; ?></td>
        <td>
          <a href="<?= base_url('daerah/detail/') ?><?= $lokasi['nid']; ?>" class="badge badge-pill badge-info detail-daerah" data-id="<?= $lokasi['nid']; ?>">Detail & Lokasi <i class="fas fa-info"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!-- Total Result -->
<h5>Total Result : <?= $total_rows; ?></h5>

<!-- cetak pagination -->
<?= $this->pagination->create_links(); ?>