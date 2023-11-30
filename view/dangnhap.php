<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-2.jpg"
                            style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-4.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-3.jpg">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h6 class="section-title text-start text-primary text-uppercase">Đăng Nhập</h6>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="userName" placeholder="UserName">
                                    <label for="name">UserName</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="pass" placeholder="Password">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="row col-12 mt-3">
                                <div class="col-md-4"><a href="index.php?act=quenmk" class="mr-3">Quên mật khẩu?</a></div>
                                <div class="col-md-4 offset-md-4"><a href="index.php?act=dangky">Đăng ký tài khoản</a></div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Đăng Nhập" class="btn btn-primary w-100 py-3" name="dangnhap">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>