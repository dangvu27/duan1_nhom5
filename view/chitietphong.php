<style>
.preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

@media screen and (max-width: 996px) {
    .preview {
        margin-bottom: 20px;
    }
}

.preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-height: 300px;
}
.preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%;
}

.preview-thumbnail.nav-tabs li img {
    max-width: 100%;
    display: block;
}

.preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 0;
}



.tab-content {
    overflow: hidden;
}

.tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
}



@media screen and (min-width: 997px) {
    .wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}
img:hover {
  opacity: 0.5;
}
    </style>
<div class="container-xxl py-5">
    <?php
        extract($listphong);
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
                        <h1 class="mb-4"> <span class="text-primary text-uppercase"><?php echo '<th>'.$ten_phong.'</th>' ?></span></h1>
                        <p class="mb-4"><?php echo '<th>'.$mota.'</th>' ?></p>
                        <h6 class="section-title text-start text-primary text-uppercase">Tiện ích</h6> <br>
                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo '<th>'.$tenloai.'</th>' ?></small>
                        <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small> <br>
                                            <br>
                                   
                        <div class="row g-3 pb-4">
                        <button type="button" class="btn btn-outline-secondary"><h6 class="section-title  text-primary text-uppercase">Đặt phòng</h6></button>
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="index.php?act=gt">Explore More</a> -->
                    </div>
                    
                    <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                <img src="../upload/<?php echo "$img" ?>">
                                   <p class="mb-4"><?php echo '<th>'.$gia.'</th>' ?>$</p>
                                </div>

<!-- PHẦN COMMAND NÀY LÀ PHẦM TĂNG THÊM ẢNH  -->

                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                        <img src="../upload/<?php echo "$img" ?>">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                        <img src="../upload/<?php echo "$img" ?>">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                        <img src="../upload/<?php echo "$img" ?>">
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        
                    </div>
                </div>
          </div>

          <!-- END PHẦN CHI TIẾT SẢN PHẨM -->

          <!-- PHẦM COD HTML BÌNH LUẬN -->

         