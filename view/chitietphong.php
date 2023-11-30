<div class="container-xxl py-5">
    <?php
        extract($phong);
        $tenloai = loadten_loai($id_loaiphong);
    ?>
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">NHỮNG CĂN PHÒNG CỦA CHÚNG TA</h6>
            <h1 class="mb-5">Welcome to <span class="text-primary text-uppercase"> RoomBook</span></h1>
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">Giới thiệu</h6>
                    <h1 class="mb-4"> <span
                            class="text-primary text-uppercase"><?php echo '<th>'.$ten_phong.'</th>' ?></span></h1>
                    <p class="mb-4"><?php echo '<th>'.$mota.'</th>' ?></p>
                    <h6 class="section-title text-start text-primary text-uppercase">Tiện ích</h6> <br>
                    <small class="border-end me-3 pe-3"><i
                            class="fa fa-bed text-primary me-2"></i><?php echo '<th>'.$tenloai.'</th>' ?></small>
                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small> <br>
                    <br>

                    <div class="row g-3 pb-4">
                        <a href="index.php?act=booking&id=<?php echo $id_phong?>" class="btn btn-outline-secondary">
                            <h6 class="section-title  text-primary text-uppercase">Đặt phòng</h6>
                        </a>
                    </div>
                    <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="index.php?act=gt">Explore More</a> -->
                </div>

                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <img src="upload/<?php echo "$img" ?>">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END PHẦN CHI TIẾT SẢN PHẨM -->

    <!-- PHẦM COD HTML BÌNH LUẬN -->
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 ml-3">
                <h6 class="section-title text-start text-primary text-uppercase">Bình luận</h6>
                <form action="index.php?act=binhluan" method="post">
                    <input type="hidden" name="id_phong" value="<?php echo $id_phong?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Comment" name="noi_dung">
                        <input type="submit" value="Bình Luận" class="btn btn-outline-secondary" name="guibl">
                    </div>
                </form>
                <?php
            foreach ($listbl as $key) {
                $tk = loadtk($key['id_TK']);
                echo '<div class="mb-4"> 
                        <span class="text-primary text-uppercase mr-3"><th>'.$tk['userName'].'</th></span> <span>'.$key['thoi_gian'].'</span>
                        <p class="mb-4"><th>'.$key['noi_dung'].'</th></p>
                    </div>';
            }
            ?>
            </div>
        </div>
    </div>