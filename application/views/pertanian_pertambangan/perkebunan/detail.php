<div class="mt-3 mb-3">
  <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan'); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
  <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/table/') . $detail[0]['id']; ?>" class="btn btn-primary float-right">Versi Tabel <i class="fas fa-table"></i></a>
</div>

<h2 class="font-weight-bold text-center"><?= $title; ?></h2>


<h2 class="text-center text-danger"><?= $detail[0]['kab_kota']; ?></h2>
<div class="row justify-content-center">
  <div class="col-md">
    <canvas id="canvas"></canvas>
  </div>
</div>
<div class="row mb-3 mt-3">
  <div class="col-md text-center">
    <h3>Pilih Grafik untuk menampilkan data : </h3>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button id="line" class="btn btn-secondary">Garis</button>
      <button id="bar" class="btn btn-secondary">Batang</button>
      <button id="horizontalBar" class="btn btn-secondary">Batang Horizontal</button>
      <button id="pie" class="btn btn-secondary">Bola</button>
      <button id="doughnut" class="btn btn-secondary">Donat</button>
      <button id="radar" class="btn btn-secondary">Radar</button>
      <button id="poloarArea" class="btn btn-secondary">Polar Area</button>
      <button id="bubble" class="btn btn-secondary">Bubble</button>
      <button id="scatter" class="btn btn-secondary">Scatter</button>
    </div>
  </div>
</div>

<!-- chart.js -->
<script src="<?= base_url('assets/js/chartjs/package/dist/Chart.js'); ?>"></script>

<script>
  function getNamaTahun(data) {
    let result = [];
    for (let i = 0; i < data.length; i++) {
      result.push(data[i].nama_tanaman + ' - ' + data[i].tahun);
    }
    return result;
  }

  function getJumlah(data) {
    let result = [];
    for (let i = 0; i < data.length; i++) {
      result.push(data[i].jumlah);
    }
    return result;
  }

  function filterNama(data, nama) {
    const result = data.filter(function(d) {
      return d.nama_tanaman == nama;
    });
    return result;
  }

  function jsonParse(data) {
    let result = {};
    result = JSON.parse(data);
    return result;
  }

  function chart() {
    let data = '<?php echo json_encode($detail); ?>';
    data = jsonParse(data);

    // filter berdasarkan nama tanaman
    const karet = filterNama(data, 'Karet');
    const kelapaSawit = filterNama(data, 'Kelapa Sawit');
    const anekahTanaman = filterNama(data, 'Aneka Tanaman');

    // filter dan menggabungkan nama dan tahun
    let namaKaret = getNamaTahun(karet);
    let namaKelapaSawit = getNamaTahun(kelapaSawit);
    let namaAnekaTanaman = getNamaTahun(anekahTanaman);

    // filter jumlah
    let jumlahKaret = getJumlah(karet);
    let jumlahSawit = getJumlah(kelapaSawit);
    let jumlahAneka = getJumlah(anekahTanaman);

    var config = {
      type: 'line',
      data: {
        labels: [
          namaKaret[0],
          namaKelapaSawit[0],
          namaAnekaTanaman[0],
          namaKaret[1],
          namaKelapaSawit[1],
          namaAnekaTanaman[1],
          namaKaret[2],
          namaKelapaSawit[2],
          namaAnekaTanaman[2],
          namaKaret[3],
          namaKelapaSawit[3],
          namaAnekaTanaman[3]
        ],
        datasets: [{
          label: '<?= $title; ?>',
          data: [
            jumlahKaret[0],
            jumlahSawit[0],
            jumlahAneka[0],
            jumlahKaret[1],
            jumlahSawit[1],
            jumlahAneka[1],
            jumlahKaret[2],
            jumlahSawit[2],
            jumlahAneka[2],
            jumlahKaret[3],
            jumlahSawit[3],
            jumlahAneka[3]
          ],
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
        responsive: true,
      }
    };

    var myChart;

    $("#line").click(function() {
      change('line');
    });

    $('#pie').on('click', function() {
      change('pie');
    });

    $("#bar").click(function() {
      change('bar');
    });

    $('#horizontalBar').click(function() {
      change('horizontalBar');
    });

    $('#doughnut').click(function() {
      change('doughnut');
    });

    $('#radar').click(function() {
      change('radar');
    });

    $('#polarArea').click(function() {
      change('polarArea');
    });

    $('#bubble').click(function() {
      change('bubble');
    });

    $('#scatter').click(function() {
      change('scatter');
    });

    function change(newType) {
      var ctx = document.getElementById("canvas").getContext("2d");

      // Remove the old chart and all its event handles
      if (myChart) {
        myChart.destroy();
      }

      // Chart.js modifies the object you pass in. Pass a copy of the object so we can use the original object later
      var temp = jQuery.extend(true, {}, config);
      temp.type = newType;
      myChart = new Chart(ctx, temp);
    };
  }

  // panggil untuk menjalankan function
  chart();
</script>