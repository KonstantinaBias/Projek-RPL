<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     
      <span class="brand-text font-weight-light">Dosen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION['username'];  ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pengajuan Surat
               <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="pengajuan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="keterangantambah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Personalia dan SK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tambah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tambahacara.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Berita Acara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="permohonan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="fed_suratdosen.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cetak Surat
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="inbox.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inbox Surat
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>