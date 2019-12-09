<h2>Tambah Daerah</h2>

<div class="row mb-3 mt-3">
  <div class="col-5">

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2>Form Tambah Daerah</h2>
        </div>

        <form action="<?= base_url('daerah/tambah'); ?>" method="POST">
          <div class="form-group">
            <label for="nid">NID</label>
            <input type="number" class="form-control" name="nid" id="nid">
          </div>
          <div class="form-group">
            <label for="parentNID">Parent NID</label>
            <input type="number" class="form-control" name="parentNID" id="parentNID">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="serial">Serial</label>
            <input type="text" class="form-control" name="serial" id="serial">
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type">
          </div>
          <div class="form-group">
            <label for="lat">Latitude</label>
            <input type="number" class="form-control" name="lat" id="lat">
          </div>
          <div class="form-group">
            <label for="lng">Longitude</label>
            <input type="number" class="form-control" name="lng" id="lng">
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?= base_url('daerah'); ?>" class="btn btn-secondary float-right">Kembali</a>
        </form>

      </div>
    </div>

  </div>
</div>