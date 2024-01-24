        <section class="content">

            <title>Tambah Petugas</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Tambah Data Petugas</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/user/petugas">
                                
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

                                    <form class="form-horizontal" action="<?= base_url('/user/aksi_tambah_petugas')?>" method="POST">

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="username_input">Username <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="username" id="username_input" placeholder="username" class="form-control" required autofocus>

                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="password_input">Password <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="password" name="password" id="password_input" placeholder="password" class="form-control" required>
                                                    
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

                                                <label for="nama_lengkap_input">Nama Petugas<span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="nama_petugas" id="nama_lengkap_input" placeholder="nama" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="tanggal_lahir_input">Tanggal Lahir</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir_input" placeholder="tanggal_lahir" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="alamat_input">Alamat</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="alamat" id="alamat_input" placeholder="alamat" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="no_hp_input">Nomor Handphone</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="no_hp" id="no_hp_input" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="16" class="form-control">
                                                    
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