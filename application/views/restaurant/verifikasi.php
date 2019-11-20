<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 text-lg-right">
                <h1 class="font-weight-bold text-warning"><br>Restaurant Verification</h1>
            </div>
            <?php if (empty($restaurant)) : ?>
                <div class="col-lg-12">
                    <div class="d-block d-md-flex listing">
                        <div class="lh-content">
                            <div class="alert alert-danger text-center" role="alert">
                                Tidak Ada Pengajuan Verifikasi Restaurant
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
                            <h4><a href="<?= base_url('restaurant/declineVerifikasi/' . $rst['id']) ?>" class="badge badge-pill badge-danger float-right"
                            onclick="return confirm('Are you sure want to decline this verification?');">Decline</a></h4>
                            <h4><a href="<?= base_url('restaurant/acceptVerifikasi/' . $rst['id']) ?>" class="badge badge-pill badge-success float-right">
                                    Accept</a> </h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Decline Verification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to decline this verification?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="<?= base_url('restaurant/declineVerifikasi/' . $restaurant['id']) ?>" method="post">
                    <input type="hidden" name="id" value="<?= $restaurant['id'] ?>">
                    <button type="submit" class="btn btn-danger">Decline</button>
                </form>
            </div>
        </div>
    </div>
</div>