  <style>
    a { text-decoration: none !important; }
  </style>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <?php if($button =='home'){ ?>
        <a class="nav-link collapsed aktif" href="<?=base_url('user')?>">
          <i class="bi bi-grid text-green"></i>
          <span class="text-green">Dashboard</span>
        </a>
      <?php } else { ?>
        <a class="nav-link collapsed" href="<?=base_url('user')?>">
          <i class="bi bi-grid text-green"></i>
          <span class="text-green">Dashboard</span>
        </a>
      <?php } ?>
      </li><!-- End Dashboard Nav -->


      <!-- End Login Page Nav -->
      <li class="nav-heading">Arsip</li>
      <li class="nav-item">
        <?php if($button =="suratmasuk"){ ?>
        <a class="nav-link collapsed aktif" href="<?=base_url('user/suratmasuk')?>">
        <?php }else{ ?>
          <a class="nav-link collapsed" href="<?=base_url('user/suratmasuk')?>">
        <?php } ?>
          <i class="bi bi-envelope-open text-green"></i>
          <span class="text-green">Surat Masuk</span>
        </a>
      </li><!-- End Login Page Nav -->
      <li class="nav-item">
        <?php if($button =="suratkeluar"){ ?>
        <a class="nav-link collapsed aktif" href="<?=base_url('user/suratkeluar')?>">
        <?php }else{ ?>
          <a class="nav-link collapsed" href="<?=base_url('user/suratkeluar')?>">
        <?php } ?>
          <i class="bi bi-send text-green"></i>
          <span class="text-green">Surat Keluar</span>
        </a>
      </li><!-- End Login Page Nav -->
      <li class="nav-item">
        <?php if($button =="arsip"){ ?>
        <a class="nav-link collapsed aktif" href="<?=base_url('user/arsip')?>">
        <?php }else{ ?>
          <a class="nav-link collapsed" href="<?=base_url('user/arsip')?>">
        <?php } ?>
          <i class="bi bi-briefcase text-green"></i>
          <span class="text-green">Arsip Lainnya</span>
        </a>
      </li><!-- End Login Page Nav -->











      <li class="nav-heading">Keluar</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url('login/logout')?>" onclick="return confirm('Yakin ingin keluar?')">
          <i class="bi bi-box-arrow-left text-green"></i>
          <span class="text-green">Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->

      

      

    </ul>

  </aside><!-- End Sidebar-->