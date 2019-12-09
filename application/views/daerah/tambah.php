<h2>Tambah <?= $title; ?></h2>

<div class="row mb-3 mt-3">
  <div class="col-5">

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2>Form Tambah <?= $title; ?></h2>
        </div>

        <form action="<?= base_url('daerah/tambah'); ?>" method="POST">
          <div class="form-group">
            <label for="nid">NID</label>
            <input type="number" class="form-control" name="nid" id="nid">
            <small class="form-text text-danger"><?= form_error('nid'); ?></small>
          </div>
          <div class="form-group">
            <label for="parentNID">Parent NID</label>
            <input type="number" class="form-control" name="parentNID" id="parentNID">
            <small class="form-text text-danger"><?= form_error('parentNID'); ?></small>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
            <small class="form-text text-danger"><?= form_error('name'); ?></small>
          </div>
          <div class="form-group">
            <label for="serial">Serial</label>
            <input type="text" class="form-control" name="serial" id="serial">
            <small class="form-text text-danger"><?= form_error('serial'); ?></small>
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type">
            <small class="form-text text-danger"><?= form_error('type'); ?></small>
          </div>
          <div class="form-group">
            <label for="lat">Latitude</label>
            <input type="number" class="form-control" name="lat" id="lat">
            <small class="form-text text-danger"><?= form_error('lat'); ?></small>
          </div>
          <div class="form-group">
            <label for="lng">Longitude</label>
            <input type="number" class="form-control" name="lng" id="lng">
            <small class="form-text text-danger"><?= form_error('lng'); ?></small>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status">
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="<?= base_url('daerah'); ?>" class="btn btn-secondary float-right">Kembali</a>
        </form>

      </div>
    </div>

  </div>
</div>