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
                        <div class="col-3">
                            <a href="index.php?act=adddp"><input type="submit" value="Thêm mới"
                                    class="btn btn-primary"></a>
                            <!-- <a href="index.php?act=listdpxoa"><input type="submit" value="Đơn Xóa"
                                    class="btn btn-primary"></a> -->
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
                                    // reload_trangthai($id_DP);
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
                                        <th>Mã đơn</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tên phòng</th>
                                        <th>Ngày đặt</th>
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
                                            if ($trang_thai == 6) {
                                                $class = 'order-status order-full';
                                            } elseif ($trang_thai == 5) {
                                                $class = 'order-status order-trong';
                                            } else {
                                                $class = 'order-status order-cho';
                                            }
                                            echo'<tr>
                                                  <th>'.$id_DP.'</th>
                                                  <th>'.$ten_KH.'</th>
                                                  <th>'.$tenphong.'</th>
                                                  <th>'.$ngay_dat.'</th>
                                                  <th>'.$thanh_tien.'</th>
                                                  <th><span class="'.$class.'">'.$tentt.'</span></th> 
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