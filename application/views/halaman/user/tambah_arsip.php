  <script src="<?php echo $path; ?>/jquery.min.js"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Arsip</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Arsip</li>
          <li class="breadcrumb-item active">Tambah Arsip</li>
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
                  <h4 class="card-title">Identitas Arsip</h4>
                  <form action="<?=base_url('user/tambah_arsip')?>" method="post" enctype="multipart/form-data">
                  
                    <div class="row mb-3">
                      <label for="b" class="col-md-4 col-lg-3 col-form-label">No. Berkas</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="b" type="text" class="form-control" id="b" placeholder="No. Berkas" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="f" class="col-md-4 col-lg-3 col-form-label">Tanggal Berkas</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="f" type="date" class="form-control" id="f" placeholder="Tujuan" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="g" class="col-md-4 col-lg-3 col-form-label">Nama Berkas</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="g" type="text" class="form-control" id="g" placeholder="Nama Berkas" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="h" class="col-md-4 col-lg-3 col-form-label">Kategori</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="h" type="text" class="form-control" id="h" required>
                          <option value="">- Pilih Kategori -</option>
                          <?php foreach($kategori as $k){?>
                          <option value="<?=$k->id_kategori?>"><?=$k->nama_kategori?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="berkas" class="col-md-4 col-lg-3 col-form-label">Berkas</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="berkas" type="file" class="form-control" id="berkas">
                      </div>
                    </div>                    
                    

                    <div>
                      <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button>
                      <a href="<?=base_url('user/arsip')?>" class="btn btn-danger btn-sm">Batal</a>
                    </div>
                    
                    </form>
                 
                  

                </div>

              </div>
            </div><!-- End Recent Sales -->

            

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main --> 
  