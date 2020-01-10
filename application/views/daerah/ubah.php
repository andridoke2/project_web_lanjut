<div class="row mb-3 mt-3">
  <div class="col-md-9 mx-auto">

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2 class="font-weight-bold">Form Ubah <?= $title; ?></h2>
        </div>

        <?php $nid = $daerah['nid']; ?>
        <?= form_open_multipart('daerah/ubah/' . $nid); ?>
        <div class="row">
          <div class="form-group ml-2 mr-2">
            <label for="nid">NID</label>
            <input type="number" class="form-control" name="nid" id="nid" value="<?= $daerah['nid']; ?>" readonly>
            <small class="form-text text-danger"><?= form_error('nid'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="parentNID">Parent NID</label>
            <input type="number" class="form-control" name="parentNID" id="parentNID" value="<?= $daerah['parent_nid']; ?>">
            <small class="form-text text-danger"><?= form_error('parentNID'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $daerah['name']; ?>">
            <small class="form-text text-danger"><?= form_error('name'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="serial">Serial</label>
            <input type="text" class="form-control" name="serial" id="serial" value="<?= $daerah['serial']; ?>">
            <small class="form-text text-danger"><?= form_error('serial'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="<?= $daerah['type']; ?>">
            <small class="form-text text-danger"><?= form_error('type'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="lat">Latitude</label>
            <input type="number" class="form-control" name="lat" id="lat" value="<?= $daerah['latitude']; ?>">
            <small class="form-text text-danger"><?= form_error('lat'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="lng">Longitude</label>
            <input type="number" class="form-control" name="lng" id="lng" value="<?= $daerah['longitude']; ?>">
            <small class="form-text text-danger"><?= form_error('lng'); ?></small>
          </div>
          <div class="form-group ml-2 mr-2">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status" value="<?= $daerah['status']; ?>">
            <small class="form-text text-danger"><?= form_error('status'); ?></small>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">Picture</div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-3">
                <img src="<?= base_url('assets/img/daerah/') . $daerah['image']; ?>" class="img-thumbnail">
              </div>
              <div class="col-sm-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Ubah</button>
          <a href="<?= base_url('daerah/detail/') . $daerah['nid'] ?>" class="btn btn-secondary float-right">Kembali</a>
        </div>
        </form>

      </div>
    </div>

  </div>
</div>