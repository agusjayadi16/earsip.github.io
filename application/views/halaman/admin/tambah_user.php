  <script src="<?php echo $path; ?>/jquery.min.js"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Tambah User</li>
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
                  <h4 class="card-title">Identitas User</h4>
                  <form action="<?=base_url('admin/tambah_user')?>" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                      <label for="a" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="a" type="text" class="form-control" id="a"placeholder="Username" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="b" class="col-md-4 col-lg-3 col-form-label">Nama User</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="b" type="text" class="form-control" id="b"placeholder="Nama User" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="c" class="col-md-4 col-lg-3 col-form-label">Level</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="c" type="text" class="form-control" id="c" required>
                          <option value="">- Pilih Level -</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="foto" type="file" class="form-control" id="foto">
                      </div>
                    </div>                    
                    

                    <div>
                      <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button>
                      <a href="<?=base_url('admin/user')?>" class="btn btn-danger btn-sm">Batal</a>
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