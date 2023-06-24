  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Surat Keluar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <?php if($this->session->userdata('pesan')=="tambah"){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Sukses! Data berhasil ditambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
      <?php }else if($this->session->userdata('pesan')=="update"){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Sukses! Data berhasil diedit.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
      <?php }else if($this->session->userdata('pesan')=="hapus"){ ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Data berhasil dihapus!
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
                  
                    <h4 class="card-title">Surat Keluar</h4>
                    <a href="<?=base_url('user/tambah_suratkeluar')?>" class="btn btn-success btn-sm mb-3">Tambah</a>
                 
                  <table class="table table-bordered table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th>No. Indeks</th>
                        <th>No. Surat</th>
                        <th>Tujuan</th>
                        <th>Tanggal Keluar</th>
                        <th>Tanggal Surat</th>
                        <th>Perihal</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach($suratkeluar as $d){ ?>
                      <tr>
                        <td><?=$no++?></th>
                          <td><?=$d->indeks?></td>
                          <td><?=$d->nomor?></td>
                          <td><?=$d->tujuan?></td>
                          <td><?=date('d/m/Y',strtotime($d->tgl_keluar_masuk))?></td>
                          <td><?=date('d/m/Y',strtotime($d->tgl_surat))?></td>
                          <td><?=$d->nama_perihal?></td>
                        <td>
                          <a target="_blank" title="Lihat" href="<?=base_url('assets/img/berkas/').$d->berkas?>" class="btn btn-primary btn-sm mb-1"><i class="bi bi-printer"></i></a>

                          <a title="Edit" href="<?=base_url('user/edit_suratkeluar/').$d->id_arsip?>" class="btn btn-success btn-sm mb-1"><i class="bi bi-pencil"></i></a>

                          <a title="Hapus" href="<?=base_url('user/hapus_suratkeluar/').$d->id_arsip?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></a>
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