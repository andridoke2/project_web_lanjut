<?php
$obj = json_decode($result);
$titles = "";
$ids = "";
$kat = "";
$web = "";
$hp = "";
$alamat = "";
$kota = "";
$prov = "";
$lat = "";
$long = "";
foreach ($obj as $item) {
  $titles .= $item->nama_perusahaan;
  $ids .= $item->id_perusahaan;
  $kat .= $item->kategori;
  $web .= $item->website;
  $hp .= $item->no_hp;
  $alamat .= $item->alamat;
  $kota .= $item->kota;
  $prov .= $item->provinsi;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi : " . $titles;
?>

<!-- Library -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<!-- API -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5npUOW8ZFhnAr8zjKkahqtLqJlhTwHIU&callback=initMap" async defer></script> -->

<script>
  function initialize() {
    let lat = "<?= $lat; ?>";
    let lng = "<?= $long; ?>";
    var myLatlng = new google.maps.LatLng(lat, lng);
    var mapOptions = {
      zoom: 10,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    let titles = "<?= $titles; ?>";
    let alamat = "<?= $alamat; ?>";

    var contentString = `<div id="content">
      <div id="siteNotice">
      </div>
      <h1 id="firstHeading" class="firstHeading">${titles}</h1>
      <div id="bodyContent">
      <p>${alamat}</p>
      </div>
      </div>`;

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: '<?= base_url('assets/'); ?>img/marker.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="row">
  <div class="col-md-5">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
      </div>
      <div class="panel-body">
        <div id="map-canvas" style="width:100%;height:380px;"></div>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Detail - </strong></h4>
      </div>
      <div class="panel-body">
        <table class="table">
          <tr>
            <th>Item</th>
            <th>Detail</th>
          </tr>
          <tr>
            <td>Nama Perusahaan</td>
            <td>
              <h4><?php echo $titles ?></h4>
            </td>
          </tr>
          <tr>
            <td>Kota</td>
            <td>
              <h4><?php echo $kota ?></h4>
            </td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td>
              <h4><?php echo $prov ?></h4>
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>
              <h4><?php echo $alamat ?></h4>
            </td>
          </tr>
          <tr>
            <td>No HP</td>
            <td>
              <h4><?php echo $hp ?></h4>
            </td>
          </tr>
          <tr>
            <td>Website</td>
            <td>
              <h4><a href="http://<?php echo $web ?>"><?php echo $web ?></a></h4>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>


</div>
</div>
</div>