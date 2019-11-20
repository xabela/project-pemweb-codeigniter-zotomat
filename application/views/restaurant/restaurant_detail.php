<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?= base_url('assets/images/' . $restaurant['gambar']); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1><?= $restaurant['nama']; ?></h1>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-11">
                <h1 class="font-weight-light text-warning" align="center">Description</h1> <br><br>
                <p> <b>Address </b> <br> <?= $restaurant['alamat']; ?> </p>
                <p> <b>City </b> <br> <?= $restaurant['kota']; ?> </p>
                <p> <b>Opening Hours </b> <br> <?= $restaurant['jambuka']; ?> </p>
                <p> <b>Facility </b> <br> <?= $restaurant['fasilitas']; ?> </p>
                <p align="justify"><?= $restaurant['deskripsi']; ?></p>
                <br><br>
                <?php if ($this->session->userdata('username') != null) : ?>
                    <button type="submit" class="btn btn-warning btn-block rounded" data-toggle="modal" 
                    data-target="#formModal">Post a Review</button><br><br>
                <?php endif; ?>
                <div class="col-lg-10">
                    <?php if (isset($komentarku)) : ?>
                        <div class="card">
                            <div class="card-header">
                                <?= $this->session->userdata('username') ?>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p><?= $komentarku['komentar'] ?></p>
                                    <a href="<?= base_url('restaurant/deleteKomentar()/' . $komentarku['id']) ?>" 
                                    class="badge badge-pill badge-danger float-right" 
                                    data-toggle="modal" data-target="#formModal3">
                                        delete</a>
                                    <a href="" class="badge badge-pill badge-primary float-right" data-toggle="modal" 
                                    data-target="#formModal2">edit</a>
                                    <p> <small class="text-muted text-black"> <?= date("D, d F Y (H:i:s)", 
                                    $komentarku['waktu']); ?> </small> </p>
                                </blockquote>
                            </div>
                        </div>
                    <?php endif; ?> <br>
                    <h3 class="font-weight-light">Read what others have said about us: </h3> <br>
                    <?php foreach ($komentar as $komen) : ?>
                        <div class="card">
                            <div class="card-header">
                                <?= $this->db->get_where('user', ['id' => $komen['id_user']])->row_array()['username']; ?>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p><?= $komen['komentar'] ?></p>
                                    <p> <small class="text-muted text-black"> <?= date("D, d F Y (H:i:s)", $komen['waktu']); ?> </small> </p>
                                </blockquote>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Post a Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('restaurant/tambahKomentar/' . $restaurant['id']); ?>" method="post">
                    <div class="form-group">
                        <label for="review">Write Your Review Here</label>
                        <textarea class="form-control" name="komentar" rows="10"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="formModal2" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Edit a Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('restaurant/editKomentar/' . $komentarku['id'].
                '/'.$restaurant['id']); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $komentarku['id'] ?>">
                    <div class="form-group">
                        <label for="review">Edit Your Review Here</label>
                        <textarea class="form-control" name="komentar" rows="10"><?= $komentarku['komentar']; ?>
                    </textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal3 -->
<div class="modal fade" id="formModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Delete Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this comment?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="<?= base_url('restaurant/deleteKomentar/' . $komentarku['id'].
                '/'.$restaurant['id']); ?>" method="post">
                <input type="hidden" name="id" value="<?= $komentarku['id'] ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>