<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="<?=base_url()?>wilayah/coba" method="post">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label class="form-label">Provinsi</label>
                  <select name="prov" class="form-control mb-2" id="provinsi">
                  <option value="">- Pilih Provinsi -</option>
                  <?php foreach($provinsi as $prov){
                  echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                  } ?>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Kabupaten</label>
                  <select name="kab" class="form-control mb-2" id="kabupaten">
                  <option value=''>- Pilih Kabupaten -</option>
                </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Kecamatan</label>
                  <select name="kec" class="form-control mb-2" id="kecamatan">
                  <option value="">- Pilih Kecamatan -</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Desa</label>
                  <select name="des" class="form-control mb-2" id="desa">
                  <option value="">- Pilih Desa -</option>
                  </select>
                </div>
                <div class="col-12">
                  <textarea class="tinymce-editor" name="data"></textarea>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->
  <script src="<?php echo $path; ?>/jquery.min.js"></script>
  <script>
          $(document).ready(function(){
              $("#provinsi").change(function (){
                  var url = "<?php echo site_url('home/add_ajax_kab');?>/"+$(this).val();
                  $('#kabupaten').load(url);
                  return false;
              })
      
        $("#kabupaten").change(function (){
                  var url = "<?php echo site_url('home/add_ajax_kec');?>/"+$(this).val();
                  $('#kecamatan').load(url);
                  return false;
              })
      
        $("#kecamatan").change(function (){
                  var url = "<?php echo site_url('home/add_ajax_des');?>/"+$(this).val();
                  $('#desa').load(url);
                  return false;
              })
          });
      </script>
      <script>
            $(document).ready(function () {
                $("#provinsi").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Provinsi -"
                });
    
                $("#kabupaten").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Kabupaten -"
                });
                $("#kecamatan").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Kecamatan -"
                });
                $("#desa").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Desa -"
                });
            });
        </script>