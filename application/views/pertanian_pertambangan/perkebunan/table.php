<div class="row mb-3 mt-3">
  <div class="col-md">
    <a class="btn btn-secondary" href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/detail/') . $detail[0]['id']; ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>
  <div class="col-md">
    <!-- Cari -->
    <div class="col-md float-right mb-2">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari data luas tanaman perkebunan..." name="keyword_table_perkebunan" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit" name="submit_hortikultural">Cari
              <i class="fas fa-search"></i>
            </button>
          </div>
          <div class="input-group-append">
            <a class="btn btn-info" href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/unsetDataCariLuasTanamanPerkebunan/' . $detail[0]['id']) ?>" class="badge badge-info">Reset <i class="fas fa-redo fa-sm"></i></a>
          </div>
        </div>
      </form>
    </div>
    <!-- akhir Cari -->
  </div>
</div>

<div class="row">
  <div class="col-md">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kab./Kota</th>
          <th scope="col">Nama Tanaman</th>
          <th scope="col">Tahun</th>
          <th scope="col">Jumlah</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;
        foreach ($detail as $d) : ?>
          <tr>
            <th scope="col"><?= ++$i; ?></th>
            <td><?= $d['kab_kota']; ?></td>
            <td><?= $d['nama_tanaman']; ?></td>
            <td><?= $d['tahun']; ?></td>
            <td><?= $d['jumlah']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Total Results -->
    <h5>Total Result : <?= $total_rows; ?></h5>

    <!-- Cetak Pagination -->
    <?= $this->pagination->create_links(); ?>

  </div>
</div>