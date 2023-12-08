<!-- Booking Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <?php ?>
            <h6 class="section-title text-center text-primary text-uppercase">Đặt Phòng</h6>
            <h1 class="mb-5">Phòng <span
                    class="text-primary text-uppercase"><?php $ten_phong = loadten_phong($_SESSION['id_phong']);echo $ten_phong?></span>
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"
                            style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            <?php
                $kh = loadone_kh($_SESSION['user']['id_TK']);
            ?>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="index.php?act=datphong" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="ten" class="form-control" id="name" required placeholder="Nhập Tên"
                                        value="<?php 
                                        if ((isset($kh['ten']))&&($kh['ten']!="")) {
                                            echo $kh['ten'];
                                        } elseif (isset($_SESSION['user']['userName'])&&($_SESSION['user']['userName']!="")) {
                                            echo $_SESSION['user']['userName'];  
                                        }?>">
                                    <label for="name">Nhập Tên</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="sdt" class="form-control" required placeholder="Nhập SĐT"
                                        value="<?php echo $_SESSION['user']['SDT']?>">
                                    <label>Nhập SĐT</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" required class="form-control" id="email"
                                        placeholder="Nhập Email" value="<?php echo $_SESSION['user']['email']?>">
                                    <label for="email">Email của bạn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="date" id="date3" data-target-input="nearest">
                                    <input type="text" name="ngayden" required class="form-control datetimepicker-input"
                                        placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" value="<?php 
                                        if (isset($_SESSION['checkin'])) {
                                            echo $_SESSION['checkin'];
                                        }?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="date" id="date4" data-target-input="nearest">
                                    <input type="text" name="ngaydi" required class="form-control datetimepicker-input"
                                        placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" value="<?php 
                                        if (isset($_SESSION['checkout'])) {
                                            echo $_SESSION['checkout'];
                                        }?>" />

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" id="message"
                                        name="ghichu" style="height: 100px"></textarea>
                                    <label for="message">Ghi Chú</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-primary w-100 py-3" type="submit" name="datphong"
                                    value="Đặt Ngay">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->