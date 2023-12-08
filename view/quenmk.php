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
                <h6 class="section-title text-start text-primary text-uppercase"> Quên Mật Khẩu</h6>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="Email" required placeholder="Email">
                                    <label for="name">vui lòng nhập Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                            <input type="submit" value="Gửi" class="btn btn-primary w-100 py-3" name="guimk">
                                
                            </div>
                        </div>
                        <h2>
                        <?php
                            if(isset($thongbao)&&($thongbao != "")){
                                echo $thongbao;
                            };
                         ?></h2>
                    </form>
                </div>
            </div>
        </div>

        

            
        </div>
    </div>
</div>