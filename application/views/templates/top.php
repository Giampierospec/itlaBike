<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Ranga" rel="stylesheet">
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<script src="https://use.fontawesome.com/01d9e54a7d.js"></script>
<link rel="stylesheet" href="<?php echo base_url('')?>css/main.css" />
    <title> Itla Bike | Proyecto Final</title>
  </head>
  <body>
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
            </ul>
          </div>
        </div>
      </nav>
    <div class="container-fluid text-center">
