<div class="site-blocks-cover inner-page-cover overlay" style="background-image:url(<?= base_url('assets/images/register.jpg'); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Tambah Restaurant</h1>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 mb-5" data-aos="fade">
                <!-- <?= form_open_multipart('restaurant/tambah'); ?> -->
                <?php echo form_open("restaurant/tambah", array('enctype'=>'multipart/form-data')); ?>
                <!-- <form action=<?= base_url('restaurant/tambah') ?> method="post"></form> -->
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Restoran">
                        <small class="text-danger"><?= form_error('nama'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Restaurant">
                        <small class="text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Kota</label>
                        <input type="text" name="kota" class="form-control" placeholder="Kota Restaurant">
                        <small class="text-danger"><?= form_error('kota'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Jam Buka</label>
                        <input type="text" name="jambuka" class="form-control" placeholder="Jam Buka Restaurant">
                        <small class="text-danger"><?= form_error('jambuka'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control" placeholder="Fasilitas Restaurant">
                        <small class="text-danger"><?= form_error('fasilitas'); ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Nomor Telepon</label>
                        <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon Restaurant">
                        <small class="text-danger"><?= form_error('telepon'); ?></small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black">Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control" rows="10" placeholder="Deskripsi Restaurant">
                            </textarea>
                        <small class="text-danger"><?= form_error('deskripsi'); ?></small>
                    </div>
                </div>
                <!-- <div class="row form-group">
                    <div class="col-md-12">
                        <label for="exampleFormControlFile1">Foto Restaurant</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div> -->
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-warning py-2 px-4 text-white">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>