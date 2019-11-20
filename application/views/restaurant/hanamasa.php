<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(assets/images/hanamasa.jpg);"
    data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Hanamasa Restaurant</h1>
                        <p class="mb-0">Tunjungan Plaza IV Lt. 4, Kota Surabaya</p>
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

                <div class="mb-4">
                    <div class="slide-one-item home-slider owl-carousel">
                        <div><img src="assets/images/hanamasa.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="assets/images/hanamasa2.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="assets/images/hanamasa3.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="assets/images/hanamasa4.jpg" alt="Image" class="img-fluid"></div>
                    </div>
                </div>
                <h2 class="font-weight-light text-warning" align="center">Description</h2> <br><br>
                <p align="justify">Hanamasa menyajikan menu utama yakiniku (makanan yang dibakar) dan syabu-syabu
                    (makanan yang direbus) dengan beragam makanan pilihan mulai dari daging Sapi, Ayam, Sea Food dan
                    Sayuran segar yang diolah secara higienis.</p>
                <p align="justify">Dilengkapi dengan saus tradisional khas Jepang, seperti Saus Niku Tare (saus
                    berwijen) dan Saus Soto Tare (saus tanpa wijen) untuk menambah citarasa masakan khas Hanamasa yang
                    enak dan lezat. Ada juga saus "Thai Suki" khas Thailand yang sangat segar dan lezat.Selain menu
                    utama, ada juga menu tambahan, seperti : Chicken Wing, Burger dan Sosis Goreng.Untuk hidangan
                    pembuka dan penutup tersedia aneka salad, jajan pasar, puding, buah es campur, juga minuman segar
                    khas Hanasa.
                    Semua bisa Anda nikmati, dengan satu harga makan sepuasnya di Hanamasa. Dijamin puas dan yang pasti
                    sehat.</p>
                <p align="justify">Open at : 10.00 AM - 10.00 PM </p>
                <p align="justify">Fasilitas : Wifi, Smoking Area, Indoor Seating, Brunch, Buffet</p> <br><br><br>

                <button type="submit" class="btn btn-warning btn-block rounded" data-toggle="modal"
                    data-target="#formModal">
                    Post a Review</button>



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
                <form action="<?= base_url('restaurant/tambahKomentar'); ?>" method="post">
                    <div class="form-group">
                        <label for="review">Write Your Review Here</label>
                        <textarea class="form-control" name="komentar" rows="10"></textarea>
                    </div>
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>