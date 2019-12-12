<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <!-- <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/datatable-bootstrap.css'); ?>" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/home/map-home.css'); ?>">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('home'); ?>"><img width="50px" src="<?= base_url('assets/img/logo-logo.png'); ?>" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link menu active" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link menu" href="<?= base_url('daerah'); ?>">Daerah</a>
          <a class="nav-item nav-link menu" href="<?= base_url('about'); ?>">About</a>
        </div>
      </div>
    </div>
  </nav>