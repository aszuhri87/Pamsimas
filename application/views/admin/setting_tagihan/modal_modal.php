<div id="layoutSidenav_content">
<div class="card-body">



<!-- Modal Tambah Pelanggan -->
<div class="modal fade" id="modal_Tambah_pelanggan" tabindex="-1" role="dialog" aria-labelledby="tbhPlgModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhPlgModalTitle">Tambah Pelanggan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group ">
                                <label for="txt_nik" class="control-label">NIK <span class="required">*</span></label>
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_nik" name="txt_nik" minlength="16" maxlength="16" type="text" required />
                                </div>

                                <div class="form-group ">
                                <label for="txt_no_rek" class="control-label">No. Rekening <span class="required">*</span></label>
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_no_rek" name="txt_no_rek" minlength="16" maxlength="16" type="text" required />
                                </div>

                                <div class="form-group ">
                                    <label for="txt_nama" class="control-label">Nama Lengkap <span
                                        class="required">*</span></label>
                                
                                    <input class="form-control" id="txt_nama" name="txt_nama"  type="text"
                                        required />
                                    
                                </div>

                                <div class="form-group ">
                                    <label for="txt_no_hp" class="control-label">No HP <span
                                        class="required">*</span></label>
                                   
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_no_hp" name="txt_no_hp" type="text"
                                        required />
                                    
                                </div>
                           

                                <div class="form-group ">
                                    <label for="txt_alamat" class="control-label">Alamat Lengkap <span
                                        class="required">*</span></label>
                                    <textarea class="form-control" id="txt_alamat" name="txt_alamat" required></textarea>
                                </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                                 <div class="form-group">
                                <label for="dd_rt" class="control-label">RT <span class="required">*</span></label>
                                <select id="dd_rt" name="dd_rt" class="form-control form-control-solid" >
                                   
                                    <option value="">-- Pilih --</option> 
                                    <?php for ($i = 1; $i<= 20; $i++) { ?>
                                    <option value="<?php echo $i?>"><?php echo $i?></option> 
                                    <?php }?>
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                                 <div class="form-group">
                                <label for="dd_rw" class="control-label">RW <span class="required">*</span></label>
                                <select id="dd_rw" name="dd_rw" class="form-control form-control-solid" >
                                    <option value="">-- Pilih --</option> 
                                    <?php for ($i = 1; $i<= 20; $i++) { ?>
                                    <option value="<?php echo $i?>"><?php echo $i?></option> 
                                    <?php }?>
                                </select>
                                </div>
                        </div>

                    </div>
                                <div class="form-group ">
                                    <label for="txt_email" class="control-label">Email <span
                                        class="required">*</span></label>
                                  
                                    <input class="form-control " id="txt_email" type="email" name="txt_email" required />
                               
                                </div>
                                <div class="form-group ">
                                    <label for="txt_password" class="control-label">Password <span
                                        class="required">*</span></label>
                                    <input class="form-control " id="txt_password" type="password" name="txt_password" required />
                                </div>
                                
                </div>

            </div>
                               
            </div>
            <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </div>
            </form>
        </div>
</div>


<!-- Modal Edit Pelanggan -->
<div class="modal fade" id="modal_Edit_pelanggan" tabindex="-1" role="dialog" aria-labelledby="edtPlgModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edttbhPlgModalTitle">Edit Pelanggan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
            <div class="row">
                <div class="col-md-6">
                                 <div class="form-group ">
                                <label for="txt_nikE" class="control-label">NIK <span class="required">*</span></label>
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_nikE" name="txt_nik" minlength="16" maxlength="16" type="text" required />
                                </div>

                                <div class="form-group ">
                                <label for="txt_no_rekE" class="control-label">No. Rekening <span class="required">*</span></label>
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_no_rekE" name="txt_no_rek" minlength="16" maxlength="16" type="text" required />
                                </div>

                                <div class="form-group ">
                                    <label for="txt_namaE" class="control-label">Nama Lengkap <span
                                        class="required">*</span></label>
                                
                                    <input class="form-control" id="txt_namaE" name="txt_nama"  type="text"
                                        required />
                                    
                                </div>

                                <div class="form-group ">
                                    <label for="txt_no_hpE" class="control-label">No HP <span
                                        class="required">*</span></label>
                                   
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_no_hpE" name="txt_no_hp" type="text"
                                        required />
                                    
                                </div>
                           

                                <div class="form-group ">
                                    <label for="txt_alamatE" class="control-label">Alamat Lengkap <span
                                        class="required">*</span></label>
                                    <textarea class="form-control" id="txt_alamatE" name="txt_alamat" required></textarea>
                                </div>
                </div>

                <div class="col-md-6">
                            
                <div class="row">
                        <div class="col-md-6">
                                 <div class="form-group">
                                <label for="dd_rtE" class="control-label">RT <span class="required">*</span></label>
                                <select id="dd_rtE" name="dd_rt" class="form-control form-control-solid" >
                                   
                                    <option value="">-- Pilih --</option> 
                                    <?php for ($i = 1; $i<= 20; $i++) { ?>
                                    <option value="<?php echo $i?>"><?php echo $i?></option> 
                                    <?php }?>
                                </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                                 <div class="form-group">
                                <label for="dd_rwE" class="control-label">RW <span class="required">*</span></label>
                                <select id="dd_rwE" name="dd_rw" class="form-control form-control-solid" >
                                    <option value="">-- Pilih --</option> 
                                    <?php for ($i = 1; $i<= 20; $i++) { ?>
                                    <option value="<?php echo $i?>"><?php echo $i?></option> 
                                    <?php }?>
                                </select>
                                </div>
                        </div>

                    </div>
                               
                                <div class="form-group ">
                                    <label for="txt_emailE" class="control-label">Email <span
                                        class="required">*</span></label>
                                  
                                    <input class="form-control " id="txt_emailE" type="email" name="txt_email" required />
                               
                                </div>
                                <div class="form-group ">
                                    <label for="txt_passwordE" class="control-label">Password <span
                                        class="required">*</span></label>
                                    <input class="form-control " id="txt_passwordE" type="password" name="txt_password" required />
                                </div>
                                
                </div>

            </div>
                               
            </div>
            <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </div>
            </form>
        </div>
</div>



<!-- Modal Tambah Pengumuman-->
<div class="modal fade" id="modal_Tambah_pengumuman" tabindex="-1" role="dialog" aria-labelledby="tbhNewsModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhNewsModalTitle">Tambah Pengumuman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form" ?>">
                                <div class="form-group ">
                                    <label for="txt_isi_pengumuman" class="control-label  ">Isi Pengumuman <span
                                        class="required">*</span></label>
                                    
                                    <textarea class="form-control" id="txt_isi_pengumuman" name="txt_isi_pengumuman" required></textarea>
                                    
                                </div>
        
                    </div>
                    <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
                </div>
               
        </div>
</div>

<!-- Modal Edit Pengumuman-->
<div class="modal fade" id="modal_Edit_pengumuman" tabindex="-1" role="dialog" aria-labelledby="tbhNewsModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhNewsModalTitle">Edit Pengumuman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
                                <div class="form-group ">
                                    <label for="txt_isi_pengumumanE" class="control-label  ">Isi Pengumuman <span
                                        class="required">*</span></label>
                                    
                                    <textarea class="form-control" id="txt_isi_pengumumanE" name="txt_isi_pengumuman" required></textarea>
                                    
                                </div>
                                <div class="form-group ">
                                    <label for="rb_statusE" class="control-label">Status <span
                                        class="required">*</span></label>
                                    <div class="col-sm-2">
                                         <div class="custom-control custom-radio">
                                             <input class="custom-control-input" id="rb_aktifE" name="rb_status" type="radio" value="aktif" required />
                                              <label class="custom-control-label" for="rb_aktifE">Aktif</label>
                                            </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-radio">
                                         <input class="custom-control-input" id="rb_expiredE" name="rb_status" type="radio" value="expired" required />
                                        <label class="custom-control-label" for="rb_aktifE">Expired</label>
                                        </div>
                                    </div>
                                </div>
        
                    </div>
                    <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
                </div>
               
        </div>
</div>


<!-- Modal Atur Tagihan -->
<div class="modal fade" id="modal_Atur_tagihan" tabindex="-1" role="dialog" aria-labelledby="tbSetTghModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbSetTghModalTitle">Atur Tagihan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
                        
                        <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group ">
                                        <label for="txt_biaya_denda" class="control-label">Biaya Denda <span
                                            class="required">*</span></label>
                                        <input class="form-control" id="txt_biaya_dendaA" name="txt_biaya_denda"  type="text"
                                            required />
                                    </div>
                                    <div class="form-group ">
                                        <label for="txt_biaya_tagihan" class="control-label  ">Biaya Tagihan<span
                                            class="required">*</span></label>
                                    
                                        <input class="form-control" id="txt_biaya_tagihan" name="txt_biaya_tagihan" type="text" 
                                            required />
                                        
                                    </div>
                            </div>
                            <div class="col-sm-6">
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

                         </div>
           
                    </div>
                    <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
                </div>
               
        </div>
    </div>

<!-- Modal Tambah Tagihan -->
<div class="modal fade" id="modal_Tambah_tagihan" tabindex="-1" role="dialog" aria-labelledby="tbhTagihanModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhTagihanModalTitle">Tambah Tagihan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
                    
            <div class="row">
                <div class="col-md-6">
                <div class="form-group ">
                            <label for="txt_no_rekening" class="control-label">No Rekening <span
                                class="required">*</span></label>
                            <input class="form-control" id="txt_no_rekening" name="txt_no_rekening"  type="text"
                                required />
                        </div>

                        <div class="form-group ">
                            <label for="date_tgl_input" class="control-label">Tanggal Input <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_input" name="date_tgl_input"  type="date" required />
                               
                        </div>
                   

                        <div class="form-group ">
                            <label for="txt_biaya_tagihan" class="control-label  ">Biaya Tagihan<span
                                class="required">*</span></label>
                           
                            <input class="form-control" id="txt_biaya_tagihan" name="txt_biaya_tagihan" type="text" 
                                required />
                            
                        </div>


                        <div class="form-group ">
                            <label for="txt_total_bayar" class="control-label">Total Bayar<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_total_bayar" name="txt_total_bayar"  type="text"
                                required />
                          
                        </div>


                </div>
                <div class="col-md-6">
                <div class="form-group ">
                            <label for="txt_meter_awal" class="control-label">Meter Awal<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_meter_awal" name="txt_meter_awal"  type="text"
                                required />
                          
                        </div>

                        <div class="form-group ">
                            <label for="txt_meter_akhir" class="control-label">Meter Akhir<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_meter_akhir" name="txt_meter_akhir"  type="text"
                                required />
                          
                        </div>

                        <div class="form-group ">
                            <label for="date_tgl_bayar" class="control-label">Tanggal Bayar <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_bayar" name="date_tgl_bayar"  type="date" required />
                               
                        </div>

                        <div class="form-group ">
                            <label for="date_tgl_jatuh_tempo" class="control-label">Jatuh Tempo <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_jatuh_tempo" name="date_tgl_jatuh_tempo"  type="date" required />
                               
                        </div>
                    

                </div>

            </div>
                       

                              
                    </div>
                    <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
                </div>
               
        </div>
    </div>


<!-- Modal Edit Tagihan -->
<div class="modal fade" id="modal_Edit_tagihan" tabindex="-1" role="dialog" aria-labelledby="tbhTagihanModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tbhTagihanModalTitle">Edit Tagihan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group ">
                            <label for="txt_no_rekeningE" class="control-label">No Rekening <span
                                class="required">*</span></label>
                            <input class="form-control" id="txt_no_rekeningE" name="txt_no_rekening"  type="text"
                                required />
                        </div>

                        <div class="form-group ">
                            <label for="date_tgl_inputE" class="control-label">Tanggal Input <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_inputE" name="date_tgl_input"  type="date" required />
                               
                        </div>
                   

                        <div class="form-group ">
                            <label for="txt_biaya_tagihanE" class="control-label  ">Biaya Tagihan<span
                                class="required">*</span></label>
                           
                            <input class="form-control" id="txt_biaya_tagihanE" name="txt_biaya_tagihan" type="text" 
                                required />
                            
                        </div>


                        <div class="form-group ">
                            <label for="txt_total_bayarE" class="control-label">Total Bayar<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_total_bayarE" name="txt_total_bayar"  type="text"
                                required />
                          
                        </div>


                </div>
                <div class="col-md-6">
                <div class="form-group ">
                            <label for="txt_meter_awalE" class="control-label">Meter Awal<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_meter_awalE" name="txt_meter_awal"  type="text"
                                required />
                          
                        </div>

                        <div class="form-group ">
                            <label for="txt_meter_akhirE" class="control-label">Meter Akhir<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_meter_akhirE" name="txt_meter_akhir"  type="text"
                                required />
                          
                        </div>

                        <div class="form-group ">
                            <label for="date_tgl_bayarE" class="control-label">Tanggal Bayar <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_bayarE" name="date_tgl_bayar"  type="date" required />
                               
                        </div>

                        <div class="form-group ">
                            <label for="date_tgl_jatuh_tempoE" class="control-label">Jatuh Tempo <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_jatuh_tempoE" name="date_tgl_jatuh_tempo"  type="date" required />
                               
                        </div>
                    

                </div>

            </div> 
                    </div>
                    <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
                </div>
               
        </div>
    </div>

<!-- Modal Edit Pengajuan Rekening -->
<div class="modal fade" id="modal_Edit_pengajuan" tabindex="-1" role="dialog" aria-labelledby="edtPengajuanModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edtPengajuanModalTitle">Edit Pengajuan Rekening</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form">
            <div class="row">
                <div class="col-md-6">
                                
                        
                                <div class="form-group ">
                                    <label for="txt_biaya_daftarE" class="control-label  ">Biaya Daftar<span
                                        class="required">*</span></label>
                                
                                    <input class="form-control" id="txt_biaya_daftarE" name="txt_biaya_daftar" type="text" 
                                        required />
                                    
                              </div>

                        <div class="form-group ">
                            <label for="date_tgl_bayarE" class="control-label">Tanggal Bayar <span class="required">*</span></label>
                                
                                <input  class="form-control" id="date_tgl_bayarE" name="date_tgl_bayar"  type="date" required />
                               
                        </div>
                        
                        <div class="form-group ">
                            <label for="txt_namaE" class="control-label">Nama Pemohon<span
                                class="required">*</span></label>
                   
                            <input class="form-control" id="txt_namaE" name="txt_nama"  type="text"
                                required />
                          
                        </div>

                        <div class="form-group ">
                                <label for="txt_nikE" class="control-label">NIK <span class="required">*</span></label>
                                    <input onkeypress="return onlyNumber(event)" class="form-control" id="txt_nikE" name="txt_nik" minlength="16" maxlength="16" type="text" required />
                        </div>



                </div>
                <div class="col-md-6">

                        
                        <div class="form-group">
                             <label for="dd_pegawaiE" class="control-label">Pegawai <span class="required">*</span></label>
                                <select id="dd_pegawaiE" name="dd_pegawai" class="form-control form-control-solid" >
                                    <option value="">-- Pilih --</option> 
                                </select>
                        </div>
                        <div class="form-group ">
                                    <label for="rb_statusE" class="control-label">Status <span
                                        class="required">*</span></label>
                                    <div class="col-sm-2">
                                         <div class="custom-control custom-radio">
                                             <input class="custom-control-input" id="rb_pendingE" name="rb_status" type="radio" value="pending" required />
                                              <label class="custom-control-label" for="rb_pendingE">Pending</label>
                                            </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-radio">
                                         <input class="custom-control-input" id="rb_surveiE" name="rb_status" type="radio" value="survei" required />
                                        <label class="custom-control-label" for="rb_surveiE">Survei</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-radio">
                                         <input class="custom-control-input" id="rb_dikerjakanE" name="rb_status" type="radio" value="dikerjakan" required />
                                        <label class="custom-control-label" for="rb_dikerjakanE">Dikerjakan</label>
                                        </div>
                                    </div>
                                </div>

                </div>

            </div> 
                    </div>
                    <div class="modal-footer"><button class="btn btn-outline-dark" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
                </div>
               
        </div>
    </div>


    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Tambah_pelanggan">Tambah Pelanggan</button> <br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Edit_pelanggan">Edit Pelanggan</button><br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Tambah_pengumuman">Tambah Pengumuman</button><br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Edit_pengumuman">Edit Pengumuman</button><br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Atur_tagihan">Atur Tagihan</button><br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Tambah_tagihan">Tambah Tagihan</button><br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Edit_tagihan">Edit Tagihan</button><br><br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_Edit_pengajuan">Edit Pengajuan Rekening</button><br><br>
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
</body>
</html>