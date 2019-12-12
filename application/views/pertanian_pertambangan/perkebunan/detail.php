<div class="mt-3 mb-3">
  <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan'); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
  <a href="" class="btn btn-primary float-right">Versi Tabel <i class="fas fa-table"></i></a>
</div>

<h2 class="font-weight-bold text-center"><?= $title; ?></h2>

<div class="row justify-content-center">
  <div class="form-group">
    <select name="barType" id="barType" class="form-control">
      <option value="bar">Grafik Batang</option>
      <option value="pie">Grafik Bola</option>
    </select>
  </div>
  <div class="col-md-10">
    <h2 class="text-center text-danger"><?= $detail[0]['kab_kota']; ?></h2>
  </div>
  <canvas id="myChart" width="50" height="20" class="mb-3"></canvas>
</div>

<!-- chart.js -->
<script src="<?= base_url('assets/js/chartjs/package/dist/Chart.js'); ?>"></script>

<script>
  function karet() {
    var ctx = document.getElementById('myChart').getContext('2d');

    let labelsKaret1 = `<?= $detail[0]['nama_tanaman']; ?> <?= $detail[0]['tahun']; ?>`;
    let labelsKaret2 = `<?= $detail[1]['nama_tanaman']; ?> <?= $detail[1]['tahun']; ?>`;
    let labelsKaret3 = `<?= $detail[2]['nama_tanaman']; ?> <?= $detail[2]['tahun']; ?>`;
    let labelsKaret4 = `<?= $detail[3]['nama_tanaman']; ?> <?= $detail[3]['tahun']; ?>`;

    let dataKaret1 = `<?= $detail[0]['jumlah']; ?>`;
    let dataKaret2 = `<?= $detail[1]['jumlah']; ?>`;
    let dataKaret3 = `<?= $detail[2]['jumlah']; ?>`;
    let dataKaret4 = `<?= $detail[3]['jumlah']; ?>`;

    let kelapaSawit1 = `<?= $detail[4]['nama_tanaman']; ?> <?= $detail[4]['tahun']; ?>`;
    let kelapaSawit2 = `<?= $detail[5]['nama_tanaman']; ?> <?= $detail[5]['tahun']; ?>`;
    let kelapaSawit3 = `<?= $detail[6]['nama_tanaman']; ?> <?= $detail[6]['tahun']; ?>`;
    let kelapaSawit4 = `<?= $detail[7]['nama_tanaman']; ?> <?= $detail[7]['tahun']; ?>`;

    let dataKelapaSawit1 = `<?= $detail[4]['jumlah']; ?>`;
    let dataKelapaSawit2 = `<?= $detail[5]['jumlah']; ?>`;
    let dataKelapaSawit3 = `<?= $detail[6]['jumlah']; ?>`;
    let dataKelapaSawit4 = `<?= $detail[7]['jumlah']; ?>`;

    let anekahTanaman1 = `<?= $detail[8]['nama_tanaman']; ?> <?= $detail[8]['tahun']; ?>`;
    let anekahTanaman2 = `<?= $detail[9]['nama_tanaman']; ?> <?= $detail[9]['tahun']; ?>`;
    let anekahTanaman3 = `<?= $detail[10]['nama_tanaman']; ?> <?= $detail[10]['tahun']; ?>`;
    let anekahTanaman4 = `<?= $detail[11]['nama_tanaman']; ?> <?= $detail[11]['tahun']; ?>`

    let dataAnekahTanaman1 = `<?= $detail[8]['jumlah']; ?>`;
    let dataAnekahTanaman2 = `<?= $detail[9]['jumlah']; ?>`;
    let dataAnekahTanaman3 = `<?= $detail[10]['jumlah']; ?>`;
    let dataAnekahTanaman4 = `<?= $detail[11]['jumlah']; ?>`;

    // Global Options
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontColor = '#777';

    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [labelsKaret1, kelapaSawit1, anekahTanaman1, labelsKaret2, kelapaSawit2, anekahTanaman2, labelsKaret3, kelapaSawit3, anekahTanaman3, labelsKaret4, kelapaSawit4, anekahTanaman4],
        datasets: [{
          label: '<?= $title; ?>',
          data: [dataKaret1, dataKelapaSawit1, dataAnekahTanaman1, dataKaret2, dataKelapaSawit2, dataAnekahTanaman2, dataKaret3, dataKelapaSawit3, dataAnekahTanaman3, dataKaret4, dataKelapaSawit4, dataAnekahTanaman4],
          backgroundColor: [
            'green',
            'yellow',
            'red',
            'green',
            'yellow',
            'red',
            'green',
            'yellow',
            'red',
            'green',
            'yellow',
            'red'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1,
          hoverBorderColor: '#000',
          hoverBorderWidth: 3
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        legend: {
          position: 'top'
        }
      }
    });
  }

  karet();
</script>