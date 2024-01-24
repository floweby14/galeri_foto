<section class="content">

<title>Data Barang</title>

<div class="body_scroll">

    <div class="block-header">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-sm-12">

                <h2>Data Barang</h2>

            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">

                <a href="/home/tambah_data_barang" style="position: absolute; right: 10px;">
                
                    <button class="btn btn-md btn-primary"><i class="zmdi zmdi-plus mr-3"></i>Tambah Barang</button>

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
                                        <th>Foto</th>
                                        <th>Nama Foto</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>

                                    </tr>

                                </thead>
                                <tbody> 
                                
                                    <?php $no = 1; foreach($barangData as $data) { ?>

                                        <tr align="center">

                                            <td><?php echo $no++ ?></td>
                                            <td><img src="<?= base_url('images/'.($data -> foto ? $data -> foto : 'default.png')) ?>" style="border-radius: 15%; width: 50px; height: 50px; object-fit: cover;"></td>
                                            <td><?php echo ucwords($data -> nama_barang) ?></td>
                                            <td><?php echo ucwords($data -> tgl) ?></td>
                                            <td><?php echo ucwords($data -> deskripsi_barang) ?></td>

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