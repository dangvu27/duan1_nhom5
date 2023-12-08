<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Quản lý Tài Khoản
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Cập nhật tài khoản
                        </div>
                        <div class="box-body">
                            <form action="indexuser.php?act=themthongtinkh" method="post">
                                <?php
                                   
                                        // extract($listkh);
                                    
                                ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tên</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="ten" >
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tuổi</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="tuoi" >
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">SDT</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="SDT" >
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Địa Chỉ</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="diachi" >
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Số CCCD</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="CCCD" >
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="hidden" name="id_TK" value="<?= $id_TK ?>">
                                    <input type="submit" value="Lưu" class="btn btn-primary" name="themmoi">
                                  
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