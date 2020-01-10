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

<div class="row text-center mt-3">
  <?php foreach ($daerah as $lokasi) : ?>
    <!-- Card -->
    <div class="card ml-3 mb-3" style="width: 16rem;">
      <img src="<?= base_url('assets/img/daerah/') . $lokasi['image']; ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mb-1 judul-head"><?= $lokasi['name']; ?></h5>
        <h6 class="text-danger">Latitude : <?= $lokasi['latitude']; ?></h6>
        <h6 class="text-danger">Longitude : <?= $lokasi['longitude']; ?></h6>
        <?= anchor('daerah/detail/' . $lokasi['nid'], '<div class="btn btn-sm btn-success">Detail & Lokasi <i class="fas fa-info"></i></div>') ?>
      </div>
    </div>
    <!-- Akhir Card -->
  <?php endforeach; ?>
</div>

<!-- Total Result -->
<h5>Total Result : <?= $total_rows; ?></h5>

<!-- cetak pagination -->
<?= $this->pagination->create_links(); ?>