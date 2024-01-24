        <section class="content">

            <title>Penawaran</title>
            
            <div class="body_scroll">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h2>Photo</h2>
                            <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">                
                            <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row clearfix">
                        
                        <?php foreach($penawaranData as $data) { ?>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="body product_item">
                                        <img src="<?= base_url('images/'.($data -> foto ? $data -> foto : 'default.png')) ?>" alt="Product" class="img-fluid cp_img" />
                                        <div class="product_details">
                                            <p><?php echo $data -> nama_barang ?></p>
                                            <!-- <ul class="product_price list-unstyled">
                                                <li class="old_price">Rp. <?php echo $data -> harga_awal ?></li>
                                            </ul>                                 -->
                                        </div>
                                        <div class="action">
                                            <a href="<?= base_url('/penawaran/detail_penawaran/'.$data -> id_barang) ?>" class="btn btn-primary waves-effect">DETAIL</a>
                                        </div>
                                    </div>
                                </div>                
                            </div>

                        <?php } ?>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
