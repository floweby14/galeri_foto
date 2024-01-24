        <section class="content">

            <title>Detail Penawaran</title>
            
            <div class="body_scroll">

                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h2>Product Detail</h2>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-12">
                                            <div class="preview preview-pic tab-content">
                                                <div class="tab-pane active" id="product_1"><img src="<?= base_url('images/'.($penawaran -> foto ? $penawaran -> foto : 'default.png')) ?>" class="img-fluid" alt="" /></div>
                                            </div>               
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-12">
                                            <div class="product details">

                                            <?php $tgl_lelang = new DateTime($penawaran -> tgl) ?>

                                                <h3 class="product-title mb-0"><?php echo $penawaran -> nama_barang ?></h3>
                                                <hr>
                                                <h5 class="barang mt-0">Tanggal: <span><?php echo  $tgl_lelang -> format('d F Y') ?></span></h5>
                                                <h5 class="barang mt-0">Deskripsi: <span><?php echo $penawaran -> deskripsi_barang ?></span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>