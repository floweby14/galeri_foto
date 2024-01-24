        <section class="content">

            <title>Edit Petugas</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Edit Data Petugas</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/petugas">
                                
                                <button class="btn btn-secondary btn-icon float-right" type="buttin"><i class="zmdi zmdi-chevron-left"></i></button>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row clearfix">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">

                                <div class="body">

                                    <form class="form-horizontal" action="<?= base_url('/user/aksi_edit_petugas')?>" method="POST">

                                        <input type="hidden" name="id_user" value="<?php echo $petugasData -> id_user ?>">
                                        <input type="hidden" name="id_petugas" value="<?php echo $petugasData -> user ?>">
                                
                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="username_input">Username <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $petugasData -> username ?>" name="username" id="username_input" placeholder="username" class="form-control" required>

                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-12 col-md-10 col-sm-8">

                                                <div class="form-group"></div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="nama_petugas_input">Nama Petugas<span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $petugasData -> nama_petugas?>" name="nama_petugas" id="nama_petugas_input" placeholder="nama" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="tanggal_lahir_input">Tanggal Lahir</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="date" value="<?php echo $petugasData -> tanggal_lahir ?>" name="tanggal_lahir" id="tanggal_lahir_input" placeholder="tanggal_lahir" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="alamat_input">Alamat</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $petugasData -> alamat ?>" name="alamat" id="alamat_input" placeholder="alamat" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="no_hp_input">Nomor Handphone</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo substr($petugasData -> no_hp, 4) ?>" name="no_hp" id="no_hp_input" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="16" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix d-flex justify-content-center">

                                            <button type="submit" class="btn btn-md btn-round btn-success">Submit</button>
                                            
                                        </div>

                                    </form>

                                </div>

                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>