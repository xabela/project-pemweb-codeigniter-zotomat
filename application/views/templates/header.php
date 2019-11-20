<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $judul ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/rangeslider.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar container py-0 bg-white" role="banner">
            <div class="row align-items-center">
                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="<?= base_url();  ?>" class="text-black mb-0">Zoto<span class="text-warning">mat</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <?php if ($this->session->userdata('username') == "admin") : ?>
                                <li><a href="<?= base_url('restaurant/verifikasi'); ?>">Restaurant Verification</a></li>
                                <li class="text-warning">|</li>
                            <?php endif; ?>
                            <li><a href="<?= base_url('restaurant'); ?>">Restaurant</a></li>
                            <li class="text-warning">|</li>
                            <li><a href="<?= base_url('home/about'); ?>">About</a></li>
                            <li class="text-warning">|</li>
                            <?php if ($this->session->userdata('username') != null) { ?>
                                <li class="has-children">
                                    <a href="">
                                        <?= $this->session->userdata('username') ?>
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('user/edit/' . $this->session->userdata('id')) ?>">Edit Profile</a></li>
                                        <li><a href="<?= base_url('user/logout') ?>">Log Out</a></li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li><a href="<?= base_url('user'); ?>">Login</a></li>
                                <li class="text-warning">|</li>
                                <li><a href="<?= base_url('user/register'); ?>">Register</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>