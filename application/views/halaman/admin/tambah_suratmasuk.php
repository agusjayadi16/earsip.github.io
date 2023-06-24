  <script src="<?php echo $path; ?>/jquery.min.js"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Surat Masuk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Surat Masuk</li>
          <li class="breadcrumb-item active">Tambah Surat Masuk</li>
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
                  <h4 class="card-title">Identitas Surat Masuk</h4>
                  <form action="<?=base_url('admin/tambah_suratmasuk')?>" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                      <label for="a" class="col-md-4 col-lg-3 col-form-label">No. Indeks</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="a" type="text" class="form-control" id="a" placeholder="No. Indeks" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="b" class="col-md-4 col-lg-3 col-form-label">No. Surat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="b" type="text" class="form-control" id="b" placeholder="No. Surat" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="c" class="col-md-4 col-lg-3 col-form-label">Pengirim</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="c" type="text" class="form-control" id="c" placeholder="Pengirim" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="d" class="col-md-4 col-lg-3 col-form-label">Tujuan</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="d" type="text" class="form-control" id="d" placeholder="Tujuan" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="e" class="col-md-4 col-lg-3 col-form-label">Tanggal Masuk</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="e" type="date" class="form-control" id="e" placeholder="Tujuan" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="f" class="col-md-4 col-lg-3 col-form-label">Tanggal Surat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="f" type="date" class="form-control" id="f" placeholder="Tujuan" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="g" class="col-md-4 col-lg-3 col-form-label">Perihal</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="g" type="text" class="form-control" id="g" placeholder="Perihal" required>
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
                      <a href="<?=base_url('admin/suratmasuk')?>" class="btn btn-danger btn-sm">Batal</a>
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
  <script>
          $(document).ready(function(){
              $("#provinsi").change(function (){
                  var url = "<?php echo site_url('admin/add_ajax_kab');?>/"+$(this).val();
                  $('#kabupaten').load(url);
                  return false;
              })
      
        $("#kabupaten").change(function (){
                  var url = "<?php echo site_url('admin/add_ajax_kec');?>/"+$(this).val();
                  $('#kecamatan').load(url);
                  return false;
              })
      
        $("#kecamatan").change(function (){
                  var url = "<?php echo site_url('admin/add_ajax_des');?>/"+$(this).val();
                  $('#desa').load(url);
                  return false;
              })
          });
      </script>