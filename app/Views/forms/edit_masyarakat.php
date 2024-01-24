<section class="content">

<div class="body_scroll">

    <div class="block-header">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-sm-12">

                <h2>Tambah Data Masyarakat</h2>

            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">

                <a href="/user/masyarakat">
                    
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

                        <form class="form-horizontal" action="<?= base_url('/user/aksi_edit_masyarakat')?>" method="POST">

                            <input type="hidden" name="id_user" value="<?php echo $masyarakatData -> id_user ?>">
                            <input type="hidden" name="id_masyarakat" value="<?php echo $masyarakatData -> user ?>">

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="username_input">Username <span style="color: #ff0000;">*</span></label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="username" id="username_input" value="<?php echo $masyarakatData -> username ?>" placeholder="username" class="form-control" required autofocus>

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

                                    <label for="nama_masyarakat_input">Nama Masyarakat<span style="color: #ff0000;">*</span></label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="nama_masyarakat" id="nama_masyarakat_input" placeholder="Nama Masyarakat" value="<?php echo $masyarakatData -> nama_masyarakat ?>" class="form-control" required>
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="alamat_input">Alamat</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="alamat" id="alamat_input" value="<?php echo $masyarakatData -> alamat ?>" placeholder="alamat" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="no_hp_input">Nomor Handphone</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="no_hp" id="no_hp_input" placeholder="8XX-XXXX-XXXX" value="<?php echo substr($masyarakatData -> no_hp, 4) ?>" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="16" class="form-control">
                                        
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

</section>