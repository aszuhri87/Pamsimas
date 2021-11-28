<div id="layoutSidenav_content">
<div class="card-body">
                <main>
                    <div class="container mt-1">
                       
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                        
                            
<!-- Modal 1-->
<div class="modal fade" id="modal_Tambah" tabindex="-1" role="dialog" aria-labelledby="tbhNewsModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhNewsModalTitle">Tambah Pengumuman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/pengumuman/tambah_pengumuman_aksi'; ?>">
                                <div class="form-group ">
                                <label for="date_tgl_publish" class="control-label  ">Tanggal Publish <span class="required">*</span></label>
                                
                                    <input  class="form-control" id="date_tgl_publish" name="date_tgl_publish"  type="date" required />
                               
                                </div>
                                <div class="form-group ">
                                    <label for="txt_isi_pengumuman" class="control-label  ">Isi Pengumuman <span
                                        class="required">*</span></label>
                                    
                                    <textarea class="form-control" id="txt_isi_pengumuman" name="txt_isi_pengumuman" required></textarea>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="txt_pegawai" class="control-label ">Pegawai <span class="required">*</span></label>
                                   
                                    <input class="form-control" id="txt_pegawai" name="txt_pegawai" type="text" value="<?php echo $this->session->userdata('id_pegawai')?>"  />
                                </div>
    
                                
                              
                    </div>
                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary" type="button">Simpan</button></div>
            </form>
                </div>
               
        </div>
    </div>




<div class="card mb-4">
<div class="card-header">Data Pengumuman</div>
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-responsive table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Tambah">Tambah Pengumuman</button>
                                <tbody>
                                    <tr>
                                    <th>NO</th>
                                    
                                    <th width="80"><i class="icon_pin_alt"></i> Tanggal</th>
                                    <th width="150"><i class="icon_calendar"></i> Isi Pengumuman</th>
                                    <th width="150"><i class=""></i> Pegawai</th>
                                    <th width="150"><i class=""></i> Aksi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        foreach($pengumuman AS $row):
                                    ?>
                                    <tr>
                                    <td><?= $no ?></td>
                                    <td><?=$row->tgl_publish?></td>
                                       <td><?=$row->isi_pengumuman?></td>
                                       <td><?=$this->session->userdata("id_pegawai")?></td>
                                
                                      
                           
                                   
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" data-toggle="modal" data-target="#edtNewsModal" ><i class="text-white" data-feather="edit"></i></a>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger" href="<?php echo site_url('admin/hapus_pelanggan/'.$row->id) ?>"><i data-feather="delete"></i></a> 
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
    <?php foreach($pengumuman as $row){ ?>
<div class="modal fade" id="edtNewsModal" tabindex="-1" role="dialog" aria-labelledby="edtNewsModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edtNewsModalTitle">Edit Pengumuman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
           
                                <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(). 'admin/pengumuman/update_pengumuman'; ?>">
                            
                                <div class="form-group">
                                    <label for="tanggal" class="control-label  ">Tanggal Publish <span
                                        class="required">*</span></label>
                                 
                                    <input class="form-control" id="tgl_publish" name="tgl_publish" type="date" value="<?php echo $row->tgl_publish?>" required />
                                   
                                </div>
                           

                                <div class="form-group ">
                                    <label for="alamat" class="control-label  ">Isi Pengumuman <span
                                        class="required">*</span></label>
                                  
                                    <textarea class="form-control" id="isi_pengumuman" name="isi_pengumuman" value="<?php echo $row->isi_pengumuman?>" required></textarea>
                                  
                                </div>
    
                                <div class="form-group">
                                    <label class="control-label  ">Pegawai <span class="required">*</span></label>
                                    
                                   
                                    <input class="form-control" id="id_pegawai" name="id_pegawai" type="text" value="<?php echo $this->session->userdata('id_pegawai')?>" required />

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
             <!-- Modal 2-->

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

