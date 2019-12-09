<?php

$obj = json_decode($result);

$nid = "";
$parent_nid = "";
$name = "";
$serial = "";
$type = "";
$latitude = "";
$longitude = "";
$status = "";

foreach ($obj as $item) {
  $nid .= $item->nid;
  $parent_nid .= $item->parent_nid;
  $name .= $item->name;
  $serial .= $item->serial;
  $type .= $item->type;
  $latitude .= $item->latitude;
  $longitude .= $item->longitude;
  $status .= $item->status;
}

// $title = "Detail dan Lokasi : " . $titles;
?>

<!-- Library -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<!-- API -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5npUOW8ZFhnAr8zjKkahqtLqJlhTwHIU&callback=initMap" async defer></script> -->

<script>
  function initialize() {
    let lat = "<?= $latitude; ?>";
    let lng = "<?= $longitude; ?>";
    var myLatlng = new google.maps.LatLng(lat, lng);
    var mapOptions = {
      zoom: 5,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    let titles = "<?= $title; ?>";
    let name = "<?= $name; ?>";

    var contentString = `<div id="content">
      <div id="siteNotice">
      </div>
      <h1 id="firstHeading" class="firstHeading">${titles}</h1>
      <div id="bodyContent">
      <p>${name}</p>
      </div>
      </div>`;

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: '<?= base_url('assets/icon/marker/marker3.png'); ?>'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="row">

  <!-- Dropdown Menu -->
  <div class="container mb-3 mt-3">
    <div class="row text-center">
      <?php foreach ($menu_detail as $menu) : ?>
        <div class="col-sm">
          <!-- <a href="" class="btn btn-primary">Sosial & Kependudukan</a> -->
          <div class="dropdown">
            <?php if ($menu['nama_menu'] == 'Sosial & Kependudukan') : ?>
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $menu['nama_menu']; ?>
              </button>
            <?php elseif ($menu['nama_menu'] == 'Ekonomi & Perdagangan') : ?>
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $menu['nama_menu']; ?>
              </button>
            <?php else : ?>
              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $menu['nama_menu']; ?>
              </button>
            <?php endif; ?>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php foreach ($sub_menu_detail as $sub_menu) : ?>
                <?php if ($menu['id'] == $sub_menu['id_menu_detail']) : ?>
                  <a class="dropdown-item" href="<?= base_url($sub_menu['url']); ?>"><?= $sub_menu['nama_sub_menu']; ?></a>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
      </div>
      <div class="panel-body">
        <div id="map-canvas" style="width:100%;height:530px;"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Detail - </strong></h4>
      </div>
      <div class="panel-body">
        <table class="table text-center">
          <tr>
            <td>NID</td>
            <td>
              <h4><?= $nid; ?></h4>
            </td>
          </tr>
          <tr>
            <td>Parent NID</td>
            <td>
              <h4><?= $parent_nid; ?></h4>
            </td>
          </tr>
          <tr>
            <td>Name</td>
            <td>
              <h4><?= $name; ?></h4>
            </td>
          </tr>
          <tr>
            <td>Serial</td>
            <td>
              <h4><?= $serial; ?></h4>
            </td>
          </tr>
          <tr>
            <td>Type</td>
            <td>
              <h4><?= $type; ?></h4>
            </td>
          </tr>
          <tr>
            <td>Latitude</td>
            <td><?= $latitude; ?></td>
          </tr>
          <tr>
            <td>Longitude</td>
            <td><?= $longitude; ?></td>
          </tr>
          <tr>
            <td>Status</td>
            <td><?= $status; ?></td>
          </tr>
          <tr>
            <td>
              <a href="" class="btn btn-success">Ubah</a>
            </td>
            <td>
              <a href="" class="btn btn-danger">Hapus</a>
            </td>
            <td>
              <a href="<?= base_url('daerah'); ?>" class="btn btn-secondary">Kembali</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>


</div>
</div>
</div>