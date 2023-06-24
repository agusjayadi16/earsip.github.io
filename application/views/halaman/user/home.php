  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

           
                                <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Aksi</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                    
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Surat Masuk</h5>
<?php 
$sm = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE kategori.nama_kategori='Surat Masuk'")->num_rows();
?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope-open"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$sm?></h6>
                      <span class="text-success small pt-1 fw-bold">Berkas</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
                                            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Aksi</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                    
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Surat Keluar</h5>
<?php 
$sk = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE kategori.nama_kategori='Surat Keluar'")->num_rows();
?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-send"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$sk?></h6>
                      <span class="text-success small pt-1 fw-bold">Berkas</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

                                            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Aksi</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                    
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Arsip Lainnya</h5>
<?php 
$ar = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE kategori.nama_kategori!='Surat Masuk' AND kategori.nama_kategori!='Surat Keluar'")->num_rows();
?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$ar?></h6>
                      <span class="text-success small pt-1 fw-bold">Berkas</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
              

            <!-- Customers Card -->
            <div class="col-md-12">
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title text-center">Aplikasi E-Arsip<br>Fakultas Teknik Universitas Cordova</h5>

                  <! -- ---------------------------------------------------------- -->
  










                  <! -- ---------------------------------------------------------- -->

                </div>
              </div>

            </div>
          </div><!-- End Customers Card -->



            
          </div>
        

      </div>
    </section>

  </main><!-- End #main --> 
  
  