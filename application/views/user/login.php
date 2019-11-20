<div class="site-blocks-cover inner-page-cover overlay"
    style="background-image:url(<?= base_url('assets/images/login.jpg'); ?>);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Log In</h1>
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



                <form action="<?= base_url('user'); ?>" method="post" class="p-5 bg-white">
                    <?= $this->session->flashdata('message'); ?>
                    <?= $this->session->flashdata('message2'); ?>
                    
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username"
                                value="<?= set_value('username'); ?>">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <p>Belum Memiliki Akun? <a href="<?= base_url('user/register'); ?>">Daftar</a></p>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>