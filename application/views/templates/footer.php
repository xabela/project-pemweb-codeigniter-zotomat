<!-- <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="footer-heading mb-4">Navigations</h2>
                        <ul class="list-unstyled">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div> -->


<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.stellar.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.countdown.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/aos.js"></script>
<script src="<?= base_url(); ?>assets/js/rangeslider.min.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });
</script>

<script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>