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
    <h3>Klik disini jika grafik tidak tampil : </h3>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button id="line" class="btn btn-secondary">Tampilkan Grafik</button>
      <!-- <button id="bar" class="btn btn-secondary">Tampilkan Grafik</button> -->
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

  function getTahun(data) {
    let result = [];
    for (let i = 0; i < data.length; i++) {
      result.push(data[i].tahun);
    }
    return result;
  }

  function filterTahun(data, tahun) {
    let tempTahun = [];
    for (let i = 0; i < data.length; i++) {
      if (data[i] == tahun) {
        tempTahun.push(data[i]);
      }
    }
    return tempTahun;
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
    let data = '<?= json_encode($detail); ?>';
    data = jsonParse(data);

    // filter berdasarkan nama tanaman
    const karet = filterNama(data, 'Karet');

    // filter berdasarkan tahun
    const tahunKaret = getTahun(karet);
    const pecahTahun2015 = filterTahun(tahunKaret, '2015');
    const pecahTahun2016 = filterTahun(tahunKaret, '2016');
    const pecahTahun2017 = filterTahun(tahunKaret, '2017');
    const pecahTahun2018 = filterTahun(tahunKaret, '2018');
    // console.log(pecahTahun2018[0]);

    const [id, kab_kota, nama_tanaman, tahun, jumlah, id_perkebunan, nid_daerah_luas] = karet;

    // filter dan menggabungkan nama dan tahun
    let namaKaret = getNamaTahun(karet);
    const [namaKaret2015, namaKaret2016, namaKaret2017, namaKaret2018] = namaKaret;

    // filter jumlah
    let jumlahKaret = getJumlah(karet);
    const [jumlahKaret2015, jumlahKaret2016, jumlahKaret2017, jumlahKaret2018] = jumlahKaret;

    var config = {
      type: 'line',
      data: {
        labels: [
          pecahTahun2015[0],
          pecahTahun2016[0],
          pecahTahun2017[0],
          pecahTahun2018[0]
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