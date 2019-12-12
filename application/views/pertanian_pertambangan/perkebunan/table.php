<a class="btn btn-secondary" href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/detail/') . $detail[0]['id']; ?>"><i class="fas fa-arrow-left"></i> Kembali</a>

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