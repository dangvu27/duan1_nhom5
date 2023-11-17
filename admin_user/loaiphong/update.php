<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Quản lý Loại Phòng
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Cập nhật loại phòng
                        </div>
                        <div class="box-body">
                            <form action="index.php?act=updatelp" method="post" enctype="multipart/form-data">
                                <?php
                                    if (is_array($dm)) {
                                        extract($dm);
                                    }
                                ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tên loại phòng</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="ten_LP" value="<?php echo $ten_LP?>">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="hidden" name="id_loai" value="<?php echo $id_loaiphong?>">
                                    <input type="submit" value="Cập nhật" class="btn btn-primary" name="capnhat">
                                    <a href="index.php?act=listdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
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