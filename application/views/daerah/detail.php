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
      icon: '<?= base_url('assets/'); ?>img/marker.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
      </div>
      <div class="panel-body">
        <div id="map-canvas" style="width:100%;height:578px;"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
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
            <td>Aksi</td>
            <td>
              <a href="" class="btn btn-success">Ubah</a>
            </td>
            <td>
              <a href="" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>


</div>
</div>
</div>