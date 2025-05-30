<?php 
session_start();

if(!isset($_SESSION["Login"])){
  header("Location: Masuk/Login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rekam Medis </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../src/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../src/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../src/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../src/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../src/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../src/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../src/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../src/assets/images/favicon.png" />
  </head>
  <body class="with-welcome-text">
    
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Dashboard, <span class="text-black fw-bold">Rekam Medis</span></h1>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
          <a href="../Masuk/logout.php" class="btn btn-light">Logout</a>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">