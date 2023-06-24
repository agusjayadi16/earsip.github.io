  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


            <!-- Customers Card -->
            <div class="col-md-12">
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Dokumentasi Dosen Fakultas</h5>

                  <! -- ---------------------------------------------------------- -->
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php 
      $slide = 0;
      foreach ($fak as $f) { ?>
      <li data-target="#myCarousel" data-slide-to="<?=$slide?>" class="<?php if($slide =='0'){echo 'active';} $slide++;?>"></li>
      <?php } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php $i = 0;
      foreach($fak as $f1){ ?>
      <div class="item <?php if($i=='0'){echo "active";} $i++;?>">
        <p class="text-center"><?=$f1->nama_fakultas?></p>
          <img src="<?=base_url()?>assets/img/<?=$f1->gambar?>" alt="Los Angeles">
      </div>
      <?php } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>








                  <! -- ---------------------------------------------------------- -->

                </div>
              </div>

            </div>
          </div><!-- End Customers Card -->

<!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">Dosen</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-square"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$dosen?></h6>
                      <span class="text-muted small pt-2 ps-1">dosen</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Fakultas</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$fakultas?></h6>
                      <span class="text-muted small pt-2 ps-1">fakultas</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            
          </div>
        

      </div>
    </section>

  </main><!-- End #main --> 
  
  