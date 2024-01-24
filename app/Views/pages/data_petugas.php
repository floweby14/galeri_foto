        <section class="content">

            <title>Data Petugas</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Data Petugas</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/user/tambah_petugas" style="position: absolute; right: 10px;">
                            
                                <button class="btn btn-md btn-primary"><i class="zmdi zmdi-plus mr-3"></i>Tambah Petugas</button>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row clear-fix">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            
                                            <thead>

                                                <tr style="text-align: center;">

                                                    <th>No</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>No Handphone</th>

                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <th width="15%">Action</th>
                                                        
                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody> 
                                            
                                                <?php $no = 1; foreach($petugasData as $data) { ?>

                                                    <tr align="center">

                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo ucwords($data -> nama_petugas) ?></td>
                                                        <td><?php echo ucwords($data -> tanggal_lahir) ?></td>
                                                        <td><?php echo ucwords($data -> alamat) ?></td>
                                                        <td><?php echo ucwords($data -> no_hp) ?></td>

                                                        <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                            <td>

                                                                <a href="<?= base_url('/user/edit_petugas/'.$data -> user) ?>">

                                                                    <button type="button" class="btn btn-info"><i class="zmdi zmdi-edit"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/hapus_petugas/'.$data -> user) ?>">

                                                                    <button type="button" class="btn btn-danger"><i class="zmdi zmdi-block"></i></button>

                                                                </a>
                                                            
                                                            </td>

                                                        <?php } ?>

                                                    </tr>

                                                <?php } ?>
                                            
                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>