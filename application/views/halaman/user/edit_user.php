  <script src="<?php echo $path; ?>/jquery.min.js"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">>Home</li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Edit User</li>
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
                  <form action="<?=base_url('user/edit_user')?>" method="post" enctype="multipart/form-data">
                    <?php foreach($data1 as $dt)?>
                  <div class="row mb-3">
                      <label for="a" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="id" type="hidden" class="form-control" id="id" value="<?=$dt->id_user?>" required>
                        <input name="a" type="text" class="form-control" id="a"value="<?=$dt->username?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="d" class="col-md-4 col-lg-3 col-form-label">Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="d" type="password" class="form-control" id="d" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="b" class="col-md-4 col-lg-3 col-form-label">Nama User</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="b" type="text" class="form-control" id="b"value="<?=$dt->nama_user?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="c" class="col-md-4 col-lg-3 col-form-label">Level</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="c" type="text" class="form-control" id="c" required>
                          <option value="<?=$dt->role?>"><?=$dt->role?></option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                      <div class="col-md-8 col-lg-9">
                        <img width="100" src="<?=base_url()?>assets/img/foto/<?=$dt->foto?>" alt="">
                        <input name="foto" type="file" class="form-control mt-1" id="foto">
                      </div>
                    </div>                    
                    

                    <div>
                      <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button>
                      <a href="<?=base_url('user/user')?>" class="btn btn-danger btn-sm">Batal</a>
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
  