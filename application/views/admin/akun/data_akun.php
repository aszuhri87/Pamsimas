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
                        <h3 class="page-header"><i class="fa fa-table"></i> Data pegawai</h3>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../../index.php">Home</a></li>
                            <li><i class="fa fa-th-list"></i><a href="data_pegawai.php">Data pegawai</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Tabel Data pegawai
                            </header>
                            <table class="table table-striped table-advance table-hover table-responsive">
                                <tbody>
                                    <tr>
                                        <th>NO</th>
                                    
                                        <th width="80"><i class="icon_pin_alt"></i> Nama</th>
                                        <th width="150"><i class="icon_calendar"></i> No HP</th>
                                        <th width="150"><i class=""></i> Alamat</th>
                                        <th width="180"><i class="icon_house"></i> Status Kerja</th>
                                        <th width="90"><i class="icon_heart"></i> Jabatan</th>
                                      
                                        <th width="150"><i class="icon_cogs"></i> Aksi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        foreach($pegawai AS $row):
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                       
                                        <td><?=$row->nm_pegawai?></td>
                                        <td><?=$row->no_hp?></td>
                                        <td><?=$row->alamat?></td>
                                        <td><?=$row->stts_kerja?></td>
                                        <td><?=$row->jabatan?></td>
                                    
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="<?php echo site_url('admin/edit_pegawai/'.$row->id_pegawai) ?>"><i data-feather="edit"></i></a>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger" href="<?php echo site_url('admin/hapus_pegawai/'.$row->id_pegawai) ?>"><i data-feather="delete"></i></a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        $no++;
                                        endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </section>
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

