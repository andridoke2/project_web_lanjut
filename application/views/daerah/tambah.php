<div class="row mb-3 mt-3">
  <div class="col-md-9 mx-auto">

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2 class="font-weight-bold">Form <?= $title; ?></h2>
        </div>

        <?= form_open_multipart('daerah/tambah'); ?>
        <div class="row">
          <div class="form-group ml-2 mr-2">
            <label for="nid">NID</label>
            <input type="number" class="form-control" name="nid" id="nid">
            <small class="form-text text-danger"><?= form_error('nid'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="parentNID">Parent NID</label>
            <input type="number" class="form-control" name="parentNID" id="parentNID">
            <small class="form-text text-danger"><?= form_error('parentNID'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
            <small class="form-text text-danger"><?= form_error('name'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="serial">Serial</label>
            <input type="text" class="form-control" name="serial" id="serial">
            <small class="form-text text-danger"><?= form_error('serial'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type">
            <small class="form-text text-danger"><?= form_error('type'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="lat">Latitude</label>
            <input type="text" class="form-control" name="lat" id="lat">
            <small class="form-text text-danger"><?= form_error('lat'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="lng">Longitude</label>
            <input type="text" class="form-control" name="lng" id="lng">
            <small class="form-text text-danger"><?= form_error('lng'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status">
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
          </div>
        </div>
        <div class="form-group">
          <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="<?= base_url('daerah'); ?>" class="btn btn-secondary float-right">Kembali</a>
        </div>
        </form>

      </div>
    </div>

  </div>
</div>