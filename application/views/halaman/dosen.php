  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Dosen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Dosen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data Dosen</h5>

                  <table class="table table-bordered table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat & Tgl Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <!--<th scope="col">Aksi</th>-->
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach($data as $d){ ?>
                      <tr>
                        <td><?=$no++?></th>
                        <td><?=$d->nidn?></td>
                        <td><?=$d->nama_dosen?></td>
                        <td><?=$d->tmp_lahir.", ".date('d F Y',strtotime($d->tgl_lahir))?></td>
                        <td><?php if($d->jk =="L"){ echo "Laki-laki";}else{ echo "Perempuan";}?></td>
                       <!-- <td><span class="badge bg-success">Detail</span></td>-->
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main --> 