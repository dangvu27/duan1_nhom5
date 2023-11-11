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
                           Thêm Phòng
                        </div>
                        <div class="box-body">
                            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tên Phòng</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="tenphong">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Giá</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="gia">
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Loại Phòng</label>
                                    <select class="form-select" name="loai_phong">
                                        <?php
                                            foreach ($listdm as $key) {
                                                extract($key);
                                                echo '
                                                <option value="'.$id_loaiphong.'">'.$ten_LP.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Hình ảnh</label>
                                    <input type="file" class="form-control" name="hinh">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Mô tả</span>
                                    <textarea class="form-control" aria-label="With textarea" name="mota"></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="submit" value="Thêm mới" class="btn btn-primary" name="themmoi">
                                    <a href="index.php?act=listsp"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
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