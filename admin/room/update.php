<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Quản lý Phòng
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Sửa thông tin phòng
                        </div>
                        <div class="box-body">
                            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                                <?php
                                    if (is_array($sp)) {
                                        extract($sp);
                                        $url = "../images/".$img;
                                    }
                                ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tên Phòng</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="tenphong" value="<?php echo $ten_phong?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Giá</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="gia" value="<?php echo $gia?>">
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Loại Phòng</label>
                                    <select class="form-select" name="loai_phong">
                                        <option>Choose...</option>
                                        <?php
                                            foreach ($listdm as $key) {
                                                extract($key);
                                                if ($id_loaiphong == $sp['id_loaiphong']) {
                                                    echo '<option value="'.$id_loaiphong.'" selected>'.$ten_LP.'</option>';
                                                } else echo '<option value="'.$id_loaiphong.'">'.$ten_LP.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Hình ảnh</label>
                                    <input type="file" class="form-control" name="hinh">
                                    <img src="<?php echo $url ?>" style="width: 100px;">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Mô tả</span>
                                    <textarea class="form-control" aria-label="With textarea" name="mota"><?php echo $mota?></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="hidden" name="id_phong" value="<?php echo $sp['id_phong']?>">
                                    <input type="submit" value="Cập nhật" class="btn btn-primary" name="capnhat">
                                    
                                </div>
                            </form>

                            <?php
                                if (isset($thongbao)) {
                                    echo'<div class="alert alert-primary" role="alert">'.$thongbao.'</div>';
                                }
                            ?>    


                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>