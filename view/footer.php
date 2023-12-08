<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn mt-5" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">RoomBook</h1></a>
                            <p class="text-white mb-0">
                            Sự hiện diện trong không gian và thời gian là một trạng thái sống, nơi ta đắm chìm trong hiện tại và quá khứ đồng thời. Cảm xúc đầy mây mưa và đối mặt với thách thức cuộc sống. Mọi thứ là hành trình, nơi chúng ta đối mặt với khía cạnh đối lập và cùng tồn tại.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Liên hệ</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/dangvu.27"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Trang</h6>
                                <a class="btn btn-link" href="index.php">Trang chủ</a>
                                <a class="btn btn-link" href="index.php?act=gt">Giới thiệu</a>
                                <a class="btn btn-link" href="index.php?act=tksp">Phòng</a>
                                <!-- <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a> -->
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Dịch Vụ</h6>
                                <a class="btn btn-link" href="#">Đồ ăn & Nhà hàng</a>
                                <a class="btn btn-link" href="#">Spa & Thư giãn</a>
                                <a class="btn btn-link" href="#">Thể thao</a>
                                <a class="btn btn-link" href="#">Sự kiện & Tiệc tùng</a>
                                <a class="btn btn-link" href="#">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <a href="#">Cookies</a>
                                <a href="#">Help</a>
                                <a herf="#">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> 
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

     <!-- Template Javascript -->
    <script src="../js/main.js">
        // Lấy đối tượng nav links
        var navLinks = document.querySelectorAll('.navbar-nav1 .nav-link1');

        // Lặp qua từng nav link
        navLinks.forEach(function(navLink) {
            // Lắng nghe sự kiện click
            navLink.addEventListener('click', function() {
                // Loại bỏ lớp "active" từ tất cả các nav links
                navLinks.forEach(function(link) {
                    link.classList.remove('active');
                });

                // Thêm lớp "active" vào nav link được click
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>