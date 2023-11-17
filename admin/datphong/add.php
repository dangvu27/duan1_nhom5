<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Quản lý Đơn Đặt Phòng
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Thêm Đơn Đặt Phòng
                        </div>
                        <div class="box-body">
                            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tên Khách Hàng</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="ten_KH">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">SĐT</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="SDT">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Ngày Đặt</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="ngay_dat">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Ngày Đến</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="ngay_den">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Ngày Về</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="ngay_ve">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Trạng Thái</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="trang_thai">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tổng Tiền</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="thanh_tien">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">ID_KM</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="id_KM">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">ID_Phòng</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="id_phong">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">ID_TK</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="id_KM">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="submit" value="Thêm mới" class="btn btn-primary" name="themmoi">
                                    <a href="index.php?act=listdp"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
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