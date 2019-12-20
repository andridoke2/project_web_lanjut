<div class="mt-3 mb-3">
  <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan'); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
  <a href="<?= base_url('detail_daerah/pertanian_pertambangan/perkebunan/table/') . $detail[0]['id']; ?>" class="btn btn-primary float-right">Versi Tabel <i class="fas fa-table"></i></a>
</div>

<style>
  canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
</style>

<h2 class="font-weight-bold text-center"><?= $title; ?></h2>


<h2 class="text-center text-success"><?= $detail[0]['kab_kota']; ?></h2>
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

    // console.log(karet);
    const [id, kab_kota, nama_tanaman, tahun, jumlah, id_perkebunan, nid_daerah_luas] = karet;


    // filter dan menggabungkan nama dan tahun
    let namaKaret = getNamaTahun(karet);
    const [namaKaret2015, namaKaret2016, namaKaret2017, namaKaret2018] = namaKaret;
    let namaKelapaSawit = getNamaTahun(kelapaSawit);
    const [namaSawit2015, namaSawit2016, namaSawit2017, namaSawit2018] = namaKelapaSawit;
    let namaAnekaTanaman = getNamaTahun(anekahTanaman);
    const [namaAnekah2015, namaAnekah2016, namaAnekah2017, namaAnekah2018] = namaAnekaTanaman;

    // filter jumlah
    let jumlahKaret = getJumlah(karet);
    const [jumlahKaret2015, jumlahKaret2016, jumlahKaret2017, jumlahKaret2018] = jumlahKaret;
    let jumlahSawit = getJumlah(kelapaSawit);
    const [jumlahSawit2015, jumlahSawit2016, jumlahSawit2017, jumlahSawit2018] = jumlahSawit;
    let jumlahAneka = getJumlah(anekahTanaman);
    const [jumlahAnekah2015, jumlahAnekah2016, jumlahAnekah2017, jumlahAnekah2018] = jumlahAneka;
    // console.log(jumlahAnekah2018);

    var config = {
      type: 'line',
      data: {
        labels: [
          '2015',
          '2016',
          '2017',
          '2018'
        ],
        datasets: [{
          label: 'Karet',
          data: [
            jumlahKaret2015, jumlahKaret2016, jumlahKaret2017, jumlahKaret2018
          ],
          backgroundColor: [
            'green',
            'green',
            'green',
            'green'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1,
          hoverBorderColor: '#000',
          hoverBorderWidth: 3
        }, {
          label: 'Sawit',
          data: [
            jumlahSawit2015, jumlahSawit2016, jumlahSawit2017, jumlahSawit2018
          ],
          backgroundColor: [
            'yellow',
            'yellow',
            'yellow',
            'yellow'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1,
          hoverBorderColor: '#000',
          hoverBorderWidth: 3
        }, {
          label: 'Anekah Tanaman',
          data: [
            jumlahAnekah2015, jumlahAnekah2016, jumlahAnekah2017, jumlahAnekah2018
          ],
          backgroundColor: [
            'red',
            'red',
            'red',
            'red'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)'
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