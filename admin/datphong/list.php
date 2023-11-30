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
                        <div class="col-4">
                            <a href="index.php?act=adddp"><input type="submit" value="Thêm mới" class="btn btn-primary"></a>
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
                                        <th>ID</th>
                                        <th>Tên Khách Hàng</th>
                                        <th>SĐT</th>
                                        <th>Ngày Đặt</th>
                                        <th>Ngày Đến</th>
                                        <th>Ngày Về</th>
                                        <th>Thành Tiền</th>
                                        <th>Khuyến Mãi</th>
                                        <th>Tài Khoản</th>
                                        <th>Tên Phòng</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listdp as $kk) {
                                        extract($kk);
                                        $trangthai = "chuaco";
                                        $ten_phong = loadten_phong($id_phong);
                                        echo '<tr>
                                                <td>' . $id_DP . '</td>
                                                <td>' . $ten_KH . '</td>
                                                <td>' . $SDT . '</td>
                                                <td>'.$ngay_dat.'</td>
                                                <td>'.$ngay_den.'</td>
                                                <td>'.$ngay_ve.'</td>
                                                <td>' . $thanh_tien . '</td>
                                                <td>' . $id_KM . '</td>
                                                <td>'.$id_TK.'</td>
                                                <td>' . $ten_phong . '</td>
                                                <td>' . $trangthai . '</td>
                                                
                                            </tr>';
                                    }
                                    ?>
                                            <!-- <td><span class="order-status order-ready">' . $trangthai . '</span></td> -->
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>