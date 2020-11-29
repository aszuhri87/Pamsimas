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
            <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-files-o"></i> Form Ubah Data pegawai</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../../index.php">Home</a></li>
                            <li><i class="icon_document_alt"></i><a href="data_pegawai.php">Data pegawai</a></li>
                            <li><i class="fa fa-files-o"></i>Form Ubah Data pegawai</a></li>
                        </ol>
                    </div>
                </div>
                <!-- Form validations -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Form Ubah pegawai
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                <?php foreach($pegawai as $row){ ?>
                                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/update_pegawai'; ?>">
                                <input class="form-control" id="id_pegawai" name="id_pegawai"  type="text" hidden value="<?php echo $row->id_pegawai?>"/>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-sm-2">Nama Lengkap <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="nm_pegawai" name="nm_pegawai"  type="text" value="<?php echo $row->nm_pegawai?>"
                                        required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tempat" class="control-label col-sm-2">No HP <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="no_hp" name="no_hp" type="text" value="<?php echo $row->no_hp?>"
                                        required />
                                    </div>
                                </div>
                           

                                <div class="form-group ">
                                    <label for="alamat" class="control-label col-sm-2">Alamat Lengkap <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <textarea class="form-control" id="alamat" name="alamat" value="<?php echo $row->alamat?>" required></textarea>
                                    </div>
                                </div>
    
                                <div class="form-group ">
                                    <label for="stts_kerja" class="control-label col-lg-2">Status Kerja <span
                                        class="required">*</span></label>
                                    <div class="col-sm-2">
                                         <div class="custom-control custom-radio">
                                             <input class="custom-control-input" id="aktif" name="stts_kerja" type="radio" value="aktif"
                                            required />
                                              <label class="custom-control-label" for="aktif">Aktif</label>
                                            </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-radio">
                                         <input class="custom-control-input" id="keluar" name="stts_kerja" type="radio" value="keluar"
                                                        required />
                                        <label class="custom-control-label" for="keluar">Keluar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-sm-2">Jabatan <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="jabatan" name="jabatan"  type="text" value="<?php echo $row->jabatan?>"
                                        required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-md-10">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    </div>
                                </div>
                                </form>
                                <?php }?>
                                     
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


