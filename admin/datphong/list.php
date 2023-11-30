<div class="main">
    <div class="main-header">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu-alt-right'></i>
        </div>
        <div class="main-title">
            Quản lý Đặt Phòng
        </div>
    </div>
    <div class="main-content">


        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="row justify-content-between box-header">
                        <div class="col-4 ">
                            Danh sách đặt phòng
                        </div>
                        <div class="col-2">
                            <a href="index.php?act=adddp"><input type="submit" value="Thêm mới"
                                    class="btn btn-primary"></a>
                        </div>
                    </div>

                    <form action="index.php?act=listdp" method="post">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Lọc Phòng</label>
                            <select class="form-select" name="id_phong">
                                <option value="0">Choose...</option>
                                <?php
                                foreach ($listsp as $key) {
                                    extract($key);
                                    echo '
                                                <option value="' . $id_phong . '">' . $ten_phong . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm" name="kyw">
                            <input type="submit" value="Tìm kiếm" name="timkiemdp" class="btn btn-outline-secondary">
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>mã đơn</th>
                                        <th>Name</th>
                                        <th>ngày đặt</th>
                                        <th>Số tiền</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($listdp as $key) {
                                            extract($key);
                                            $tenphong = loadten_phong($id_phong);
                                            $tentt = ten_trangthai($trang_thai);
                                            echo'<tr>
                                                  <th>'.$id_DP.'</th>
                                                  <th>'.$tenphong.'</th>
                                                  <th>'.$ngay_dat.'</th>
                                                  <th>'.$thanh_tien.'</th>
                                                  <th><span class="order-status order-cho">'.$tentt.'</span></th> 
                                                  <td><a href="index.php?act=chitietdh&id='.$id_DP.'"><input type="button"
                                                value="Xem chi tiết" class="btn btn-primary"></a></td>
                                    </tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
</div>