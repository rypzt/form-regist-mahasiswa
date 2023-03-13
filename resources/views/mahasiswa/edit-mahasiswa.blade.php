

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
      <span class="brand-text font-weight-light">Form Edit</span>
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
            <h1 class="m-0">FORM EDIT DATA MAHASISWA</h1>
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
            <h3>Edit Data Mahasiswa</h3>
        </div>  

        <div class="card-body">
          <form action=" /update-mahasiswa/{{ $mahasiswa->id }}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label col-xs-3">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" value="{{ $mahasiswa->nik }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <div class="form-group">
              <label for="iduser">Jenis Kelamin</label>
              <select class="default-select form-control wide" title="Jenis Kelamin"
                  name="jenis_kelamin" required>
                  <option value="-">Pilih Jenis Kelamin</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki">Male </option>
                  <option id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">Female</option>
              </select>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-3">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $mahasiswa->tempat_lahir }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Tanggal</label>
                <input type="date" name="tgllhr" id="tgllhr" class="form-control" value="{{ $mahasiswa->tgllhr }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Berat Badan</label>
                <input type="text" name="bb" id="bb" class="form-control" value="{{ $mahasiswa->bb }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Tinggi Badan</label>
                <input type="text" name="tb" id="tb" class="form-control" value="{{ $mahasiswa->tb }}">
            </div>
            <div class="form-group">
              <label for="iduser">Agama</label>
              <select class="default-select form-control wide" title="agama"
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
                <input type="text" name="goldar" id="goldar" class="form-control" value="{{ $mahasiswa->goldar }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Status Pernikahan</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $mahasiswa->status }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Alamat Lengkap</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $mahasiswa->alamat }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Kelurahan</label>
                <input type="text" name="kel" id="kel" class="form-control" value="{{ $mahasiswa->kel }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Kecamatan</label>
                <input type="text" name="kec" id="kec" class="form-control" value="{{ $mahasiswa->kec }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Kota</label>
                <input type="text" name="kota" id="kota" class="form-control" value="{{ $mahasiswa->kota }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Provinsi</label>
                <input type="text" name="prov" id="prov" class="form-control" value="{{ $mahasiswa->prov }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Negara</label>
                <input type="text" name="negara" id="negara" class="form-control" value="{{ $mahasiswa->negara }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">No Handphone</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $mahasiswa->no_hp }}">
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $mahasiswa->email }}">
            </div>
            <div class="card-header">
              <h3>RIWAYAT SEKOLAH</h3>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">SD</label>
              <input type="text" name="sd" id="sd" class="form-control" value="{{ $sekolah->sd }}">
              <input type="hidden" name="id_sek" id="id_sek" class="form-control" value="{{ $sekolah->id_sek }}">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">SMP</label>
              <input type="text" name="smp" id="smp" class="form-control" value="{{ $sekolah->smp }}">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">SMA/SMK</label>
              <input type="text" name="sma" id="sma" class="form-control" value="{{ $sekolah->sma }}">
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Perguruan Tinggi</label>
              <input type="text" name="kuliah" id="kuliah" class="form-control" value="{{ $sekolah->kuliah }}">
            </div>
            <div class="card-header">
              <h3>DATA KELUARGA</h3>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Nama Ayah Kandung</label>
              <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="{{ $datakeluarga->nama_ayah }}">
              <input type="hidden" name="id_dakel" id="id_dakel" class="form-control" value="{{ $datakeluarga->id_dakel }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Pekerjaan Ayah</label>
            <input type="text" name="pek_ayah" id="pek_ayah" class="form-control" value="{{ $datakeluarga->pek_ayah }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Nomor Handphone Ayah</label>
            <input type="text" name="no_ayah" id="no_ayah" class="form-control" value="{{ $datakeluarga->no_ayah }}">
          </div>
          <div class="form-group">
              <label class="control-label col-xs-3">Nama Ibu Kandung</label>
              <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="{{ $datakeluarga->nama_ibu }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Pekerjaan Ibu</label>
            <input type="text" name="pek_ibu" id="pek_ibu" class="form-control" value="{{ $datakeluarga->pek_ibu }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Nomor Handphone Ibu</label>
            <input type="text" name="no_ibu" id="no_ibu" class="form-control" value="{{ $datakeluarga->no_ibu }}">
          </div>
          <div class="form-group">
              <label class="control-label col-xs-3">Saudara Kandung 1</label>
              <input type="text" name="saudara1" id="saudara1" class="form-control" value="{{ $datakeluarga->saudara1 }}">
          </div>
          <div class="form-group">
              <label class="control-label col-xs-3">Saudara Kandung 2</label>
              <input type="text" name="saudara2" id="saudara2" class="form-control" value="{{ $datakeluarga->saudara2 }}">
          </div>
          <div class="card-header">
            <h3>PENGALAMAN ORGANISASI</h3>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Organisasi 1</label>
            <input type="text" name="organisasi1" id="organisasi1" class="form-control" value="{{ $pengalaman->organisasi1 }}">
            <input type="hidden" name="id_pengalaman" id="id_pengalaman" class="form-control" value="{{ $pengalaman->id_pengalaman }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Tahun</label>
            <input type="text" name="tahun1" id="tahun1" class="form-control" value="{{ $pengalaman->tahun1 }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Jabatan</label>
            <input type="text" name="jabatan1" id="jabatan1" class="form-control" value="{{ $pengalaman->jabatan1 }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Organisasi 2</label>
            <input type="text" name="organisasi2" id="organisasi2" class="form-control" value="{{ $pengalaman->organisasi2 }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Tahun</label>
            <input type="text" name="tahun2" id="tahun2" class="form-control" value="{{ $pengalaman->tahun2 }}">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Jabatan</label>
            <input type="text" name="jabatan2" id="jabatan2" class="form-control" value="{{ $pengalaman->jabatan2 }}">
          </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">EDIT</button>
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
