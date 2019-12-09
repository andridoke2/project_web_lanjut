<h2 class="font-weight-bold text-center"><?= $title; ?></h2>

<canvas id="myChart" width="200" height="200"></canvas>

<!-- chart.js -->
<script src="<?= base_url('assets/js/chartjs/package/dist/Chart.js'); ?>"></script>

<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      <?php foreach ($detail_hortikultural as $tahun) : ?>
        labels: [<?= $tahun['tahun']; ?>, <?= $tahun['tahun']; ?>, <?= $tahun['tahun']; ?>],
      <?php endforeach; ?>
      datasets: [{
        label: '<?= $title; ?>',
        <?php foreach ($detail_hortikultural as $dh) : ?>
          data: [<?= $dh['jumlah']; ?>, <?= $dh['jumlah']; ?>, <?= $dh['jumlah']; ?>],
        <?php endforeach; ?>
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>