<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="./img/core-img/favicon.png"> -->
    <link href="<?php echo base_url('favicon.png') ?>" rel="icon">
    

    <!-- Stylesheet -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="<?php echo base_url('style.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') ?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="<?php echo base_url('img/core-img/logo.png') ?>" alt="Our"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">- Home</a></li>
                                            <li><a href="./about.html">- Biodata</a></li>
                                            <li><a href="./gallery.html">- Gallery</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Blog Details</a></li>
                                            <li><a href="./contact.html">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="./about.html">Biodata</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('http://localhost/crud_skl/background.jpg')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Edit Data Siswa</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Biodata</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <div class="card">
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-md-8">
            <!-- Menampilkan Error jika validasi tidak valid -->
            <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("siswa/ubah/".$siswa->nisn); ?>
      
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">NISN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="NISN" name="input_nis" value="<?php echo set_value('input_nisn', $siswa->nisn); ?>" readonly>
        </div>
      </div>
      <hr>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="input_nama" value="<?php echo set_value('input_nama', $siswa->nama); ?>">
        </div>
      </div>
      <hr>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="input_jeniskelamin" value="Laki-Laki" <?php echo set_radio('jeniskelamin', 'Laki-Laki', ($siswa->jenis_kelamin == "Laki-Laki")? true : false); ?>>
              <label class="form-check-label" for="gridRadios1">
                Laki-Laki
              </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($siswa->jenis_kelamin == "Perempuan")? true : false); ?>>
              <label class="form-check-label" for="gridRadios2">
                Perempuan
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <hr>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Kelas" name="input_kelas" value="<?php echo set_value('input_kelas', $siswa->kelas); ?>">
        </div>
      </div>
      <hr>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Jurusan" name="input_jurusan" value="<?php echo set_value('input_jurusan', $siswa->jurusan); ?>">
        </div>
      </div>

      <hr>
      <input type="submit" name="submit" value="Save" class="btn btn-secondary">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Back" class="btn btn-danger"></a>
    <?php echo form_close(); ?>
            </div>
            <div class="col-sm">
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>