<div class="row mt-3 mb-3">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <form action="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/tambah'); ?>" method="POST">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul">
            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
          </div>
          <div class="form-group">
            <label for="akhir_update">Terakhir Update</label>
            <input type="date" class="form-control" name="akhir_update" id="akhir_update">
            <small class="form-text text-danger"><?= form_error('akhir_update'); ?></small>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan'); ?>" class="btn btn-secondary float-right"><i class="fas fa-arrow-left"></i> Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>