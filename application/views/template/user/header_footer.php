<?php
$sesi = $this->session->userdata('status');
if($sesi !=="loged"){
  redirect('login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?=$title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?=base_url()?>assets/img/cordova.png" rel="icon">
  <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .text-green {
      color: green !important;
    }
    .aktif { background: lightgreen !important; }
  </style>
</head>
<body>
<!-- ------------------------------------ Header ----------------------------------------- -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #006633;color:#fff;">
    <div class="d-flex align-items-center justify-content-between">
      <a href="<?=base_url('user')?>" class="logo d-flex align-items-center">
        <img src="<?=base_url()?>assets/img/undova.jpg" alt="">
        <span class="d-none d-lg-block text-white">User</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-white"></i>
    </div>
    <!-- ------------------------------- End Logo --------------------------------------- -->
    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
       <?php foreach($data as $dt)?>

        <li class="nav-item dropdown pe-5">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?=base_url()?>assets/img/foto/<?=$dt->foto?>" alt="Profile" class="rounded-circle">
            <!--<span class="d-none d-md-block dropdown-toggle ps-2 text-white"><?=$k->nama_dosen?></span>-->
          </a>
          <!-- ---------------------- End Profile Iamge Icon --------------------------- -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              
              <h6><?=$dt->nama_user?></h6>
              <span>User</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?=base_url('user/user_profile')?>">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" onclick="return confirm('Yakin ingin keluar?')" href="<?=base_url('login/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
          <!-- ------------------- End Profile Dropdown Items --------------------------- -->
        </li>
        <!-- -------------------------- End Profile Nav --------------------------------- -->
      </ul>
    </nav>
    <!-- ---------------------------- End Icons Navigation ------------------------------ -->
  </header>
<!-- -------------------------------------- End Header ---------------------------------- -->

                            <?php $this->load->view($menu)?>
                            <?php $this->load->view($content)?>

<!-- ------------------------------------- Footer --------------------------------------- -->
<footer id="footer" class="footer">
  <div class="copyright">
      &copy; Copyright by <strong><span>Tim Pengembang</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
  </div>
</footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: green;"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url()?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="<?=base_url()?>assets/js/main.js"></script>
</body>
</html>