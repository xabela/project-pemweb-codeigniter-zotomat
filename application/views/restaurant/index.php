<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 text-lg-right">
                <h1 class="font-weight-bold text-warning"><br>Daftar Restaurant</h1> <br> <br>
            </div>
            <!-- <form method="post" action="<?= base_url('restaurant'); ?>"> -->
            <div class="col-lg-12">
                <form method="post" action="<?= base_url('restaurant'); ?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="Cari Restaurant">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php if (empty($restaurant)) : ?>
                <div class="col-lg-12">
                    <div class="d-block d-md-flex listing">
                        <div class="lh-content">
                            <div class="alert alert-danger text-center" role="alert">
                                Restaurant Tidak Ditemukan <br><br>
                                <?php if ($this->session->userdata('username') != null) : ?>
                                    <a href="<?= base_url("restaurant/tambah") ?>" class="text-danger">Tambahkan
                                        Restaurant</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row mt-5">
            <?php foreach ($restaurant as $rst) : ?>
                <div class="col-lg-12">
                    <div class="d-block d-md-flex listing">
                        <a href="<?= base_url("restaurant/restaurantDetail/$rst[id]"); ?>" class="img d-block" style="background-image:  url(<?= base_url('assets/images/' . $rst['gambar']); ?>);"></a>
                        <div class="lh-content">
                            <h2><a href="<?= base_url("restaurant/restaurantDetail/$rst[id]"); ?>" class="text-warning"><?= $rst['nama'] ?></a></h2>
                            <address><?= $rst['alamat'] ?> <br> Kota <?= $rst['kota'] ?> </address>
                            <?php if ($this->session->userdata('username') == "admin") : ?>
                                <h5><a href="<?= base_url('restaurant/deleteRestaurant/' . $rst['id']) ?>" 
                                class="badge badge-pill badge-danger float-right" onclick="return confirm('Are you sure want to delete this restaurant?');">Delete</a></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>