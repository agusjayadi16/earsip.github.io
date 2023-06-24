  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kategori Arsip</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Kategori Arsip</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <?php if($this->session->userdata('pesan')=="tambah"){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Sukses! Kategori berhasil ditambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
      <?php }else if($this->session->userdata('pesan')=="update"){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Sukses! Kategori berhasil diedit.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
      <?php }else if($this->session->userdata('pesan')=="hapus"){ ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Kategori berhasil dihapus!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  
                    <h4 class="card-title">Kategori Arsip</h4>
                    <a href="<?=base_url('admin/tambah_kategori')?>" class="btn btn-success btn-sm mb-3">Tambah</a>
                  
                    
                 
                  <table class="table table-bordered table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach($data1 as $d){ ?>
                      <tr>
                        <td><?=$no++?></th>
                          <td><?=$d->nama_kategori?></td>
                        
                        <td>
                          <a title="Edit" href="<?=base_url('admin/edit_kategori/').$d->id_kategori?>" class="btn btn-success btn-sm mb-1"><i class="bi bi-pencil"></i></a>

                          <a title="Hapus" href="<?=base_url('admin/hapus_kategori/').$d->id_kategori?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></a>
                        </td>
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
  <?php $this->session->unset_userdata('pesan')?>