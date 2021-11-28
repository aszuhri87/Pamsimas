<div id="layoutSidenav_content">
<div class="card-body">

<!-- <div class="card-header card-flag-light"> data pegawai

</div> -->
                <main>
                   

                    <!-- Main page content-->
                    <div class="container mt-1 py py-xl-0">
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
                                        </div
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
                        
                            
<!-- Modal 1-->
<div class="modal fade" id="tbhPlgModal" tabindex="-1" role="dialog" aria-labelledby="tbhPlgModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhPlgModalTitle">Tambah Pegawai</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/pelanggan/tambah_pelanggan_aksi'; ?>">
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
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>


<div class="card mb-4">
<div class="card-header">Data Pelanggan</div>
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-responsive table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tbhPlgModal">Tambah pelanggan</button>
                                <tbody>
                                    <tr>
                                        <th>NO</th>
                                        <th><i class="icon_clipboard"></i> NIK</th>
                                        <th width="100"><i class="icon_profile"></i> No. Rekening</th>
                                        <th width="80"><i class="icon_pin_alt"></i> Nama</th>
                                        <th width="150"><i class="icon_calendar"></i> No HP</th>
                                        <th width="150"><i class=""></i> Alamat</th>
                                        <th width="180"><i class="icon_house"></i> RT</th>
                                        <th width="90"><i class="icon_heart"></i> RW</th>
                                        <th width="90"><i class="icon_id_alt"></i> Email</th>
                                        <th width="110"><i class="icon_piechart"></i> Tanggal Buat</th>
                                        <th width="150"><i class="icon_cogs"></i> Aksi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        foreach($pelanggan AS $row):
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?=$row->NIK?></td>
                                        <td><?=$row->no_rekening?></td>
                                        <td><?=$row->nm_pelanggan?></td>
                                        <td><?=$row->no_hp?></td>
                                        <td><?=$row->alamat?></td>
                                        <td><?=$row->rt?></td>
                                        <td><?=$row->rw?></td>
                                        <td><?=$row->email?></td>
                                        <td><?=$row->tgl_buat?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" data-toggle="modal" data-target="#edtPlgModal<?php echo $row->NIK?>"><i class="text-white" data-feather="edit"></i></a>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger" href="<?php echo site_url('admin/hapus_pelanggan/'.$row->NIK) ?>"><i data-feather="delete"></i></a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        $no++;
                                        endforeach;
                                    ?>
                                </tbody>
                            </table>
                                </div>
                            </div>
                        </section>
                    </div>
<!-- Modal 2-->
<?php foreach($pelanggan as $row){ ?>
<div class="modal fade" id="edtPlgModal<?php echo $row->NIK?>" tabindex="-1" role="dialog" aria-labelledby="edtPlgModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edtPlgModalTitle">Edit Pelanggan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
           
                                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/pelanggan/update_pelanggan'; ?>">
                                <div class="form-group ">
                                <label for="cname" class="control-label col-sm-2">NIK <span class="required">*</span></label>
                                <div class="col-md-10">
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="NIK" name="NIK" minlength="16" maxlength="16" type="text" value="<?php echo $row->NIK?>" required />
                                </div>
                                </div>
                                <div class="form-group ">
                                <label for="cname" class="control-label col-sm-2">No. Rekening <span class="required">*</span></label>
                                <div class="col-md-10">
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="no_rekening" name="no_rekening" minlength="16" maxlength="16" type="text" required  value="<?php echo $row->no_rekening?>"/>
                                </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-sm-2">Nama Lengkap <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="nm_pelanggan" name="nm_pelanggan"  type="text" value="<?php echo $row->nm_pelanggan?>"
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
                                    <label for="pekerjaan" class="control-label col-sm-2">RT <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="rt" type="rt" name="rt" value="<?php echo $row->rt?>" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="pekerjaan" class="control-label col-sm-2">RW <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="rw" type="rw" name="rw" value="<?php echo $row->rw?>" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tanggal" class="control-label col-sm-2">Tanggal Buat <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="tgl_buat" name="tgl_buat" type="date" value="<?php echo $row->tgl_buat?>" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-sm-2">Email <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control " id="email" type="text" name="email" value="<?php echo $row->email?>" required />
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
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div> 
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

