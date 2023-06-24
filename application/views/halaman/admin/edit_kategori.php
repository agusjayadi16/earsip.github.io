  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kategori Arsip</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Kategori</li>
          <li class="breadcrumb-item active">Edit Kategori</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
<?php foreach($data1 as $dt)?>
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h4 class="card-title">Edit Kategori</h4>
                  <form action="<?=base_url('admin/edit_kategori')?>" method="post" enctype="multipart/form-data">
                  
                    <div class="row mb-3">
                      <label for="nama_fakultas" class="col-md-4 col-lg-3 col-form-label">Nama Kategori</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="id" type="hidden" class="form-control" id="id" value="<?=$dt->id_kategori?>" required>
                        <input name="a" type="text" class="form-control" id="a" value="<?=$dt->nama_kategori?>" required>
                      </div>
                    </div>
             
                    <div>
                      <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button>
                      <a href="<?=base_url('admin/kategori')?>" class="btn btn-danger btn-sm">Batal</a>
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