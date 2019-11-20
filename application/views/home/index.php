<div class="site-blocks-cover overlay" style="background-image: url(assets/images/bg.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1 class="" data-aos="fade-up">Good Food, Good Mood</h1>
                        <p data-aos="fade-up" class="text-white">Find the best restaurant for your mood</p>
                    </div>
                </div>
                <div class="form-search-wrap col-md-12" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="700" data-aos-delay="200">
                    <form method="post" action="<?= base_url('restaurant'); ?>">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" class="form-control rounded" name="keyword"
                                    placeholder="Search the restaurant">
                            </div>

                            <div class="col-md-3">
                                <input type="submit" class="btn btn-warning btn-block rounded" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-lg-right">
                <h1 class="font-weight-bold text-warning">Nearby</h1>
                <br> <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12  block-13">
                <div class="owl-carousel nonloop-block-13">
                    <div class="d-block d-md-flex listing vertical">
                        <a href="<?= base_url('restaurant/hanamasa'); ?>" class="img d-block"
                            style="background-image: url('assets/images/labore.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Beverages</span>
                            <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                            <h3><a href="<?= base_url('restaurant/hanamasa'); ?>" class="text-warning">Labore</a></h3>
                            <address>Jl. Soekarno Hatta No.25, Kota Malang</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(24 Reviews)</span>
                            </p>
                        </div>
                    </div>

                    <div class="d-block d-md-flex listing vertical">
                        <a href="listings-single.html" class="img d-block"
                            style="background-image: url('assets/images/nelongso.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Food</span>
                            <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                            <h3><a href="listings-single.html" class="text-warning">Ayam Nelongso</a></h3>
                            <address>Jl. Candi Panggung No.37, Kota Malang</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="review">(84 Reviews)</span>
                            </p>
                        </div>
                    </div>

                    <div class="d-block d-md-flex listing vertical">
                        <a href="listings-single.html" class="img d-block"
                            style="background-image: url('assets/images/upnormal.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Food and Beverages</span>
                            <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                            <h3><a href="listings-single.html" class="text-warning">Warunk Upnormal</a></h3>
                            <address>Jl. Borobudur Nomor 7, Kota Malang</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(25 Reviews)</span>
                            </p>
                        </div>
                    </div>

                    <div class="d-block d-md-flex listing vertical">
                        <a href="listings-single.html" class="img d-block"
                            style="background-image: url('assets/images/cakper.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Food</span>
                            <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                            <h3><a href="listings-single.html" class="text-warning">Ayam Bawang Cak Per</a></h3>
                            <address>Jl. Raya Sumbersari No.2, Kota Malang</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(33 Reviews)</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 text-lg-right">
                <h1 class="font-weight-bold text-warning">Popular</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block"
                        style="background-image: url('assets/images/domicile.jpeg')"></a>
                    <div class="lh-content">
                        <span class="category">Food & Beverage</span>
                        <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                        <h3><a href="listings-single.html" class="text-warning">Domicile</a></h3>
                        <address>Jl. Sumatra No. 35, Kota Surabaya</address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="review">(45 Reviews)</span>
                        </p>
                    </div>
                </div>
                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block"
                        style="background-image: url('assets/images/hanamasa.jpg')"></a>
                    <div class="lh-content">
                        <span class="category">Food</span>
                        <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                        <h3><a href="listings-single.html" class="text-warning">Hanamasa</a></h3>
                        <address>Tunjungan Plaza IV Lt. 4, Kota Surabaya</address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="review">(80 Reviews)</span>
                        </p>
                    </div>
                </div>

                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block"
                        style="background-image: url('assets/images/holycow.jpg')"></a>
                    <div class="lh-content">
                        <span class="category">Food</span>
                        <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                        <h3><a href="listings-single.html" class="text-warning">Steak by Holycow!</a></h3>
                        <address>Jl. Letjen Yono Suwoyo No.5, Kota Surabaya</address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="review">(58 Reviews)</span>
                        </p>
                    </div>
                </div>



            </div>
            <div class="col-lg-6">

                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block"
                        style="background-image: url('assets/images/soiree.jpeg')"></a>
                    <div class="lh-content">
                        <span class="category">Beverages</span>
                        <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                        <h3><a href="listings-single.html" class="text-warning">Soiree</a></h3>
                        <address>Jl. Barata Jaya III No.1, Kota Surabaya</address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="icon-star text-secondary"></span>
                            <span class="review">(39 Reviews)</span>
                        </p>
                    </div>
                </div>

                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block"
                        style="background-image: url('assets/images/vosco.png')"></a>
                    <div class="lh-content">
                        <span class="category">Beverages</span>
                        <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                        <h3><a href="listings-single.html" class="text-warning">Vosco Coffee</a></h3>
                        <address>Jl. Borobudur No.27A, Kota Malang</address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="review">(75 Reviews)</span>
                        </p>
                    </div>
                </div>
                <div class="d-block d-md-flex listing">
                    <a href="listings-single.html" class="img d-block"
                        style="background-image: url('assets/images/grandfather.jpg')"></a>
                    <div class="lh-content">
                        <span class="category">Beverages</span>
                        <a href="#" class="bookmark"><span class="icon-heart text-warning"></span></a>
                        <h3><a href="listings-single.html" class="text-warning">Grandfather Coffee Shop</a></h3>
                        <address>Jl. Kalasan No.25, Kota Surabaya</address>
                        <p class="mb-0">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="review">(30 Reviews)</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>