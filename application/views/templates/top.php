<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Ranga" rel="stylesheet">
  <!-- jquery -->
  <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
  <!-- Optional theme -->
  <link rel="stylesheet" href="<?php echo base_url('') ?>bootstrap/css/bootstrap-theme.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="<?php echo base_url('') ?>bootstrap/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('')?>font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('')?>css/main.css" />
  <link rel="stylesheet" href="<?php echo base_url('')?>css/login.css" />
  <link rel="stylesheet" href="<?php echo base_url('')?>css/publish.css" />
  <link rel="stylesheet" href="<?php echo base_url('') ?>css/user.css">
  <title> Itla Bike | Proyecto Final</title>
</head>

<body>

  <!--SDK de facebook para el boton compartir-->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=1823829894500693";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Main Menu -->
  <nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainMenu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo base_url('') ?>" class="navbar-brand"><i class="fa fa-bicycle"></i> Itla Bike</a>
      </div>
      <!-- Categories of the main Menu -->
      <div class="navbar-collapse collapse" id="mainMenu">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url('') ?>"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="<?php echo base_url('start/categoria') ?>"><i class="fa fa-th-list" ></i> Categorias</a></li>
          <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-user"></i> Mi cuenta</a></li>
          <li><a href="<?php echo base_url('start/nosotros') ?>"><i class="fa fa-users"></i> Nosotros</a></li>
          <li><a href="<?php echo base_url('admin/publicar_anuncio') ?>"><i class="fa fa-paper-plane"></i> Publicar Anuncio</a></li>
          <?php

// Check if the session is empty;
if(isset($_SESSION['itla_bike_user']) && !empty($_SESSION['itla_bike_user'])) {

    $currentUser = (isset($_SESSION['itla_bike_user'])?$_SESSION['itla_bike_user']:"");
    $url = base_url('management');
    // If the user is the admin show the management option.
    if($currentUser->correo == 'admin@gmail.com'){
        echo "<li><a href='{$url}'><i class='fa fa-wrench'></i> Administracion</a>
    </li>"; }
}
?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- The container -->
  <div class="container-fluid text-center">
    <?php
$currentUser = (isset($_SESSION['itla_bike_user'])?$_SESSION['itla_bike_user']:"");
$logout = base_url('admin/logout');
if(isset($_SESSION['itla_bike_user'])){
    echo "<div class='text-right'>
    <p>Usted está conectado como {$currentUser->correo} <a href='{$logout}'> Salir</a></p>
    </div>";
}

$contador=[0];

?>
