<div id="layoutSidenav_content">
<div class="card-body">

<!-- <div class="card-header card-flag-light"> data pegawai

</div> -->
                <main>
                   

                    <!-- Main page content-->
                    <div class="container mt-1">
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
                    <div class="col-md-12">
                        <section class="panel">
                        
<!-- modal -->

<div class="modal fade" id="modal_Atur" tabindex="-1" role="dialog" aria-labelledby="tbSetTghModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbSetTghModalTitle">Atur Tagihan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/setting_tagihan/update'; ?>">
                        
                        <div class="form-group ">
                            <label for="txt_biaya_denda" class="control-label">Biaya Denda <span
                                class="required">*</span></label>
                            <input class="form-control" id="txt_biaya_denda" name="txt_biaya_denda"  type="text"
                                required />
                        </div>
                        <div class="form-group ">
                            <label for="txt_biaya_tagihan" class="control-label  ">Biaya Tagihan<span
                                class="required">*</span></label>
                           
                            <input class="form-control" id="txt_biaya_tagihan" name="txt_biaya_tagihan" type="text" 
                                required />
                            
                        </div>
                   

                        <div class="form-group ">
                            <label for="txt_biaya_perawatan" class="control-label">Biaya Perawatan<span
                                class="required">*</span></label>
                          
                            <input class="form-control" id="txt_biaya_perawatan" name="txt_biaya_perawatan" value="" required></input>
                         
                        </div>


                        <div class="form-group ">
                            <label for="txt_biaya_daftar" class="control-label">Biaya Daftar <span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_biaya_daftar" name="txt_biaya_daftar"  type="text"
                                required />
                          
                        </div>
                    
                              
                    </div>
                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary" type="button">Simpan</button></div>
            </form>
                </div>
               
        </div>
    </div>
                            

                        <div class="card mb-4">
                            <div class="card-header">Setting Tagihan</div>
                            <div class="card-body">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Atur">Atur Tagihan</button>

<div class="form">
                                
                                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/setting_tagihan/update'; ?>">
                        
                                <div class="form-group ">
                                    <label for="cname" class="control-label  ">Biaya Denda <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="biaya_denda" name="biaya_denda"  type="text" value=""
                                        required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tempat" class="control-label  ">Biaya Tagihan<span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="biaya_tagihan" name="biaya_tagihan" type="text" value=""
                                        required />
                                    </div>
                                </div>
                           

                                <div class="form-group ">
                                    <label for="alamat" class="control-label  ">Biaya Perawatan<span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="biaya_perawatan" name="biaya_perawatan" value="" required></input>
                                    </div>
                                </div>
    
        
                                <div class="form-group ">
                                    <label for="cname" class="control-label  ">Biaya Daftar <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="biaya_daftar" name="biaya_daftar"  type="text" value=""
                                        required />
                                    </div>
                                </div>
                                <div class="form-group">
                                  
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    
                                </div>
                                </form>
                                <!--  -->
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
</div></div>

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

