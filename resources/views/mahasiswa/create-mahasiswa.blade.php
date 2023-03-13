

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Registrasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('view/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('view/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('welcome')}}" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('view/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Form Regist</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('view/dist/img/ry.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ryan Prasetiawan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{asset('data-mahasiswa')}}" class="nav-link active">
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM REGISTRASI MAHASISWA</h1>
          </div><!-- /.col -->
          <<!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            <h3>BIODATA PRIBADI</h3>
        </div>

        <div class="card-body">
          <form action="{{asset('simpan-mahasiswa')}}" method="POST">
            {{csrf_field()}}
            
            <div class="form-group">
                <label class="control-label col-xs-3">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Nomor Induk Kependudukan">
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-3">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="iduser">Jenis Kelamin</label>
              <select class="default-select form-control wide" title="Jenis Kelamin"
                  name="jenis_kelamin" required>
                  <option value="-">Pilih Jenis Kelamin</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki">Male</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">Female</option>
              </select>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Tanggal</label>
                <input type="date" name="tgllhr" id="tgllhr" class="form-control" >
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Berat Badan</label>
                <input type="text" name="bb" id="bb" class="form-control" placeholder="Kg">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Tinggi Badan</label>
                <input type="text" name="tb" id="tb" class="form-control" placeholder="cm   ">
            </div>
            <div class="form-group">
              <label for="iduser">Jenis Kelamin</label>
              <select class="default-select form-control wide" title="Jenis Kelamin"
                  name="agama" required>
                  <option value="-">Pilih Agama</option>
                  <option id="agama" name="agama" value="Islam">Islam</option>
                  <option id="agama" name="agama" value="Kristen">Kristen</option>
                  <option id="agama" name="agama" value="Khatolik">Khatolik</option>
                  <option id="agama" name="agama" value="Buddha">Buddha</option>
                  <option id="agama" name="agama" value="Hindu">Hindu</option>
                  <option id="agama" name="agama" value="Konghucu">Konghucu</option>
              </select>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Golongan Darah</label>
                <input type="text" name="goldar" id="goldar" class="form-control" placeholder="Golongan Darah">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Status Pernikahan</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Status Pernikahan">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Alamat Lengkap</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Kelurahan</label>
                <input type="text" name="kel" id="kel" class="form-control" placeholder="Kelurahan">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Kecamatan</label>
                <input type="text" name="kec" id="kec" class="form-control" placeholder="Kecamatan">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Kota</label>
                <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Provinsi</label>
                <input type="text" name="prov" id="prov" class="form-control" placeholder="Provinsi">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Negara</label>
                <input type="text" name="negara" id="negara" class="form-control" placeholder="Negara">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">No Handphone</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No Handphone">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            
           
              <div class="card-header">
                <h3>RIWAYAT SEKOLAH</h3>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">SD</label>
                <input type="text" name="sd" id="sd" class="form-control" placeholder="SD">
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">SMP</label>
                <input type="text" name="smp" id="smp" class="form-control" placeholder="SMP">
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">SMA/SMK</label>
                <input type="text" name="sma" id="sma" class="form-control" placeholder="SMA/SMK">
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">Perguruan Tinggi</label>
                <input type="text" name="kuliah" id="kuliah" class="form-control" placeholder="Perguruan Tinggi">
              </div>
              <div class="card-header">
                <h3>DATA KELUARGA</h3>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">Nama Ayah Kandung</label>
                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Ayah">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Pekerjaan Ayah</label>
              <input type="text" name="pek_ayah" id="pek_ayah" class="form-control" placeholder="Pekerjaan Ayah">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Nomor Handphone Ayah</label>
              <input type="text" name="no_ayah" id="no_ayah" class="form-control" placeholder="Nomor Handphone Ayah">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Nama Ibu Kandung</label>
                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Ibu">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Pekerjaan Ibu</label>
              <input type="text" name="pek_ibu" id="pek_ibu" class="form-control" placeholder="Pekerjaan Ibu">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Nomor Handphone Ibu</label>
              <input type="text" name="no_ibu" id="no_ibu" class="form-control" placeholder="Nomor Handphone Ibu">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Saudara Kandung 1</label>
                <input type="text" name="saudara1" id="saudara1" class="form-control" placeholder="Saudara Kandung">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Saudara Kandung 2</label>
                <input type="text" name="saudara2" id="saudara2" class="form-control" placeholder="Saudara Kandung">
            </div>
            <div class="card-header">
              <h3>PENGALAMAN ORGANISASI</h3>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Organisasi 1</label>
              <input type="text" name="organisasi1" id="organisasi1" class="form-control" placeholder="Organasisasi 1">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Tahun</label>
              <input type="text" name="tahun1" id="tahun1" class="form-control" placeholder="Tahun ">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Jabatan</label>
              <input type="text" name="jabatan1" id="jabatan1" class="form-control" placeholder="Jabatan">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Organisasi 2</label>
              <input type="text" name="organisasi2" id="organisasi2" class="form-control" placeholder="Organisasi 2">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Tahun</label>
              <input type="text" name="tahun2" id="tahun2" class="form-control" placeholder="Tahun">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Jabatan</label>
              <input type="text" name="jabatan2" id="jabatan2" class="form-control" placeholder="Jabatan">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">SAVE</button>
            </div>
        

          </form>
            
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('view/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('view/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('view/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
