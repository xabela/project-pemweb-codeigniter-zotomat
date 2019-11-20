<div class="site-blocks-cover inner-page-cover overlay"
    style="background-image:url(<?= base_url('assets/images/register.jpg'); ?>);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Edit Profile</h1>
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



                <form action="" class="p-5 bg-white" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username"
                                value="<?= $user['username']; ?>">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email"
                                value="<?= $user['email']; ?>">
                            <small class="text-danger"><?= form_error('email'); ?></small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black">Password</label>
                            <input type="password" name="password1" class="form-control" placeholder="Password">
                            <small class="text-danger"><?= form_error('password1'); ?></small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black">Repeat Password</label>
                            <input type="password" name="password2" class="form-control" placeholder="Repeat Password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Edit" class="btn btn-warning py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>