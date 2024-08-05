<!DOCTYPE html>
<html>
  <head>
    <title>Inventaris | User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/simple-sidebar/css/simple-sidebar.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?= base_url()?>/assets/simple-sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/web_admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/web_admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/datetimepicker/css/bootstrap-datetimepicker.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
      .bg-dark{
        background-color: #0081CF!important;
        color: white !important;
      }
      .navbar-brand{
        color: white !important;
      }
      .nav-link{
        color: white !important;
      }
      .nav-link{
        color: white;
      }
      .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.1;
      }
      .lead {
        font-size: 1.25rem;
        font-weight: 300;
      }
      .text-center {
        text-align: center!important;
      }
      .jumbotron{
        margin-bottom: 2rem;
        background-color: #0081CF;
        border-radius: .3rem;
        color: white;
      }
      .mr-auto{
        margin-right: auto!important;
      }
      .navbar-brand{
        color: #fff;
      }
      .dt-buttons{
        float: left;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top bg-dark">
      <div class="container">
        <div class="navbar-header text-white">
          <a class="navbar-brand" href="<?= base_url('user')?>">Home</a>
        </div>
          <ul class="nav navbar-nav mr-auto ">
            <!-- <li><a class="nav-link" href="#">Home</a></li> -->
            <li class="dropdown"><a class="bg-dark dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-database" aria-hidden="true"></i> Tabel <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?=base_url('user/tabel_barangmasuk');?>">Tabel Barang Masuk</a></li>
                <li><a href="<?=base_url('user/tabel_barangkeluar');?>">Tabel Barang Keluar</a></li>
                  <!-- <li><a href="#">Tabel Gudang 3</a></li> -->
              </ul>
            </li>
            <!-- <li><a class="nav-link" href="#"><i class="fa fa-book" aria-hidden="true"></i> Page 2</a></li>
            <li><a class="nav-link" href="#"><i class="fa fa-address-book" aria-hidden="true"></i> Page 3</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link">Last Login : <?=$this->session->userdata('last_login')?></a></li>            
            <li><a class="nav-link" href="<?= base_url('user/setting') ?>"><i class="fa fa-user" aria-hidden="true"></i> Setting</a></li>
            <li><a class="nav-link" href="<?= base_url('user/signout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
          </ul>
      </div>
    </nav>
