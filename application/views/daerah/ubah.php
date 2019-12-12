<h2>Ubah <?= $title; ?></h2>

<div class="row mb-3 mt-3">
  <div class="col-5">

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2>Form Ubah <?= $title; ?></h2>
        </div>

        <form action="" method="POST">
          <div class="form-group">
            <label for="nid">NID</label>
            <input type="number" class="form-control" name="nid" id="nid" value="<?= $daerah['nid']; ?>" readonly>
            <small class="form-text text-danger"><?= form_error('nid'); ?></small>
          </div>
          <div class="form-group">
            <label for="parentNID">Parent NID</label>
            <input type="number" class="form-control" name="parentNID" id="parentNID" value="<?= $daerah['parent_nid']; ?>">
            <small class="form-text text-danger"><?= form_error('parentNID'); ?></small>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $daerah['name']; ?>">
            <small class="form-text text-danger"><?= form_error('name'); ?></small>
          </div>
          <div class="form-group">
            <label for="serial">Serial</label>
            <input type="text" class="form-control" name="serial" id="serial" value="<?= $daerah['serial']; ?>">
            <small class="form-text text-danger"><?= form_error('serial'); ?></small>
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="<?= $daerah['type']; ?>">
            <small class="form-text text-danger"><?= form_error('type'); ?></small>
          </div>
          <div class="form-group">
            <label for="lat">Latitude</label>
            <input type="number" class="form-control" name="lat" id="lat" value="<?= $daerah['latitude']; ?>">
            <small class="form-text text-danger"><?= form_error('lat'); ?></small>
          </div>
          <div class="form-group">
            <label for="lng">Longitude</label>
            <input type="number" class="form-control" name="lng" id="lng" value="<?= $daerah['longitude']; ?>">
            <small class="form-text text-danger"><?= form_error('lng'); ?></small>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status" value="<?= $daerah['status']; ?>">
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
          </div>
          <button type="submit" class="btn btn-primary">Ubah</button>
          <a href="<?= base_url('daerah/detail/') . $daerah['nid'] ?>" class="btn btn-secondary float-right">Kembali</a>
        </form>

      </div>
    </div>

  </div>
</div>