<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container">
                           <br><br>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container mt-n10">
                        <!-- <div class="row">
                            <div class="col-xxl-4 col-xl-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 col-xxl-12">
                                                <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                                    <h1 class="text-primary">Selamat Datang!</h1>
                                                    <p class="text-gray-700 mb-0">Di Sistem PAMSIMAS 2020 V2</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="<?= base_url()?>assets/icon.jpg" width="20%" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 mb-4">
                                
                            </div>
                           
                        </div> -->
                        <!-- Example Colored Cards for Dashboard Demo-->
    <div class="wrapper"> 
                        <div class="row">

          <div class="col-sm-12">
            <h3 class="page-header text-white"><i class="fa fa-files-o"></i> Form Tambah Pelanggan</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i><a href="form_tambah_pelanggan.php">Form Tambah Pelanggan</a></li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
                    <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                        <header class="panel-heading">
                            Form Tambah Pelanggan
                        </header>
                        <div class="panel-body">
                            <div class="form">
                         
                            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/tambah_pelanggan_aksi'; ?>">
                                <div class="form-group ">
                                <label for="cname" class="control-label col-sm-2">NIK <span class="required">*</span></label>
                                <div class="col-md-10">
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="NIK" name="NIK" minlength="16" maxlength="16" type="text" required />
                                </div>
                                </div>
                                <div class="form-group ">
                                <label for="cname" class="control-label col-sm-2">No. Rekening <span class="required">*</span></label>
                                <div class="col-md-10">
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="no_rekening" name="no_rekening" minlength="16" maxlength="16" type="text" required />
                                </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-sm-2">Nama Lengkap <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="nm_pelanggan" name="nm_pelanggan"  type="text"
                                        required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tempat" class="control-label col-sm-2">No HP <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="no_hp" name="no_hp" type="text"
                                        required />
                                    </div>
                                </div>
                           

                                <div class="form-group ">
                                    <label for="alamat" class="control-label col-sm-2">Alamat Lengkap <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                                    </div>
                                </div>
    
                                <div class="form-group ">
                                    <label for="pekerjaan" class="control-label col-sm-2">RT <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="rt" type="rt" name="rt" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="pekerjaan" class="control-label col-sm-2">RW <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="rw" type="rw" name="rw" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tanggal" class="control-label col-sm-2">Tanggal Buat <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="tgl_buat" name="tgl_buat" type="date" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-sm-2">Email <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="email" type="text" name="email" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="password" class="control-label col-sm-2">Password <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="password" type="password" name="password" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-md-10">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        </section>
                    </div>
                    </div>
                    </div>
                </div>
          
                </main>
                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9; FEBRI063 2020</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &#xB7;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= base_url()?>sbadmin/code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="<?= base_url()?>sbadmin/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/js/scripts.js"></script>
        <script src="<?= base_url()?>sbadmin/cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/assets/demo/datatables-demo.js"></script>
        <script src="<?= base_url()?>sbadmin/cdn.jsdelivr.net/momentjs/latest/moment.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/assets/demo/date-range-picker-demo.js"></script>

        <!-- <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro.js"></script> -->
           </body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 10:49:55 GMT -->
</html>

