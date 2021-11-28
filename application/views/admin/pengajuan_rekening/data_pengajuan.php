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
                       

<!-- Modal 1
<div class="modal fade" id="tbhPgwModal" tabindex="-1" role="dialog" aria-labelledby="tbhPgwModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhPgwModalTitle">Tambah Pegawai</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/pegawai/tambah_pegawai_aksi'; ?>">
                               
                                
                               <div class="form-group ">
                                   <label for="cname" class="control-label col-sm-2">Nama Lengkap <span
                                       class="required">*</span></label>
                                   <div class="col-md-10">
                                   <input class="form-control" id="nm_pegawai" name="nm_pegawai"  type="text"
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
                
                   <div class="form-group ">
                                   <label for="cname" class="control-label col-sm-2">Jabatan <span
                                       class="required">*</span></label>
                                   <div class="col-md-10">
                                   <input class="form-control" id="jabatan" name="jabatan"  type="text"
                                       required />
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
 -->

<div class="card mb-4">
                            <div class="card-header">Pengajuan Rekening</div>
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-responsive table-hover" id="dataTable" width="100%" cellspacing="0">
                                   <tbody>
                                    <tr>
                                        <th>NO</th>
                                    
                                        <th width="80"><i class="icon_pin_alt"></i> NIK</th>
                                        <th width="150"><i class="icon_calendar"></i> Tanggal Pengajuan</th>
                                        <th width="150"><i class=""></i> Status</th>
                                        <th width="180"><i class="icon_house"></i> Biaya Daftar</th>
                                        <th width="90"><i class="icon_heart"></i> Tanggal Bayar</th>
                                        <th width="90"><i class="icon_heart"></i> Nama Pegawai</th>
                                      
                                        <th width="150"><i class="icon_cogs"></i> Terakhir Update</th>
                                        <th width="150"><i class="icon_cogs"></i> Catatan</th>
                                        <th width="150"><i class="icon_cogs"></i> Foto KTP</th>
                                        <th width="150"><i class="icon_cogs"></i> Foto KK</th>
                                        <th width="150"><i class="icon_cogs"></i> Aksi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        foreach($pengajuan_rekening AS $row):
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                       
                                        <td><?=$row->NIK?></td>
                                        <td><?=$row->tgl_pengajuan?></td>
                                        <td><?=$row->status?></td>
                                        <td><?=$row->biaya_daftar?></td>
                                        <td><?=$row->tgl_bayar?></td>
                                        <td><?=$row->nm_pegawai?></td>
                                        <td><?=$row->terakhir_update?></td>
                                        <td><?=$row->catatan?></td>
                                        <td><?=$row->foto_ktp?></td>
                                        <td><?=$row->foto_kk?></td>
                                    
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" data-toggle="modal" data-target="#edtPengajuan<?php echo $row->id_ajuan?>" ><i class="text-white" data-feather="edit"></i></a>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger" href="<?php echo site_url('admin/pegawai/hapus_pegawai/'.$row->id_pegawai) ?>"><i data-feather="delete"></i></a> 
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
<!-- Modal edit-->
<?php foreach($pengajuan_rekening as $row){ ?>
<div class="modal fade" id="edtPengajuan<?php echo $row->id_ajuan?>" tabindex="-1" role="dialog" aria-labelledby="edtPengajuanTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edtPengajuanTitle">Edit Pengajuan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <div class="form">
                               
                                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/pengajuanrek/update_pengajuan'; ?>">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Pegawai <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                    <select name="status" class="form-control form-control-solid" >
                                    <option value="survei">survei</option>
                                    <option value="dikerjakan">dikerjakan</option>
                                    <option value="pending">pending</option>
                                    
                                         
                                    </select>
                                    </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-sm-2">Biaya Daftar<span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="biaya_daftar" name="biaya_daftar"  type="text" value="<?php echo $row->biaya_daftar?>"
                                        required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tempat" class="control-label col-sm-2">Tanggal Bayar <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="tgl_bayar" name="tgl_bayar" type="date" value="<?php echo $row->tgl_bayar?>"
                                        required />
                                    </div>
                                </div>
                           

                                <div class="form-group ">
                                    <label for="alamat" class="control-label col-sm-2">Pegawai <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="id_pegawai" name="id_pegawai" value="<?php echo $row->nm_pegawai?>" required></input>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tempat" class="control-label col-sm-2">Terakhir Update <span
                                        class="required">*</span></label>
                                    <div class="col-md-10">
                                    <input class="form-control" id="terakhir_update" name="terakhir_update" type="date" value="<?php echo $row->terakhir_update?>"
                                        required />
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
        <script src="../../cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="../../cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

        <script src="js/sb-customizer.js"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
        <!-- <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro.js"></script> -->
           </body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 10:49:55 GMT -->
</html>

