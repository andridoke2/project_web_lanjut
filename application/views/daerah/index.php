<h1>Halaman Daerah</h1>

<!-- Cari -->
<div class="row float-right mb-2">
  <div class="col-md">
    <form action="<?= base_url('anggota'); ?>" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data daerah..." name="keyword_daerah" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit" name="submit_daerah">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
        <div class="input-group-append">
          <button type="button" class="btn btn-info"><a href="<?= base_url('daerah/unsetDataCariDaerah') ?>" class="badge badge-info"><i class="fas fa-redo"></i></a></button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- akhir Cari -->

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
          <a href="<?= base_url('daerah/detail/') ?><?= $lokasi['nid']; ?>" class="badge badge-pill badge-info" target="_blank">Detail & Lokasi <i class="fas fa-info"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!-- Total Result -->
<h5>Total Result : <?= $total_rows; ?></h5>

<!-- cetak pagination -->
<?= $this->pagination->create_links(); ?>