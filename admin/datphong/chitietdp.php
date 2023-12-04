
<style>
    button{
        width: 90px;
    }
</style>
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                 <h2>Trang thông tin cá nhân </h2>
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <!-- CUSTOMERS CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            Quản lý đặt phòng
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box">
                    <div class="row justify-content-between box-header">
                        <div class="col-4 ">
                            Thông tin đặt phòng
                        </div>
                        <div class="col-4">
                            <a href="index.php?act=listdp"><input type="submit" value="Danh Sách"
                                    class="btn btn-primary"></a>
                        </div>
                    </div>
                        <div class="container mt-3">       
                                <table class="table table-hover">
                                    <?php extract($listdh2);?>
                                    <tbody>
                                    <tr>
                                        <th>mã đơn</th>
                                        <td><?php echo"$id_DP"?></td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo"$ten_KH"?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo " $email" ?></td>
                                    </tr>
                                    <tr>
                                        <th>SDT</th>
                                        <td><?php echo"$SDT"?></td>
                                    </tr>
                                    <tr>
                                        <th>ngày đặt</th>
                                        <td><?php echo"$ngay_dat"?></td>
                                    </tr>
                                    <tr>
                                        <th>Ngày đến</th>
                                        <td><?php echo"$ngay_den"?></td>
                                    </tr>
                                    <tr>
                                        <th>Ngày về</th>
                                        <td><?php echo"$ngay_ve"?></td>
                                    </tr>
                                    <tr>
                                        <th>Trạng thái</th>
                                        <?php $tentt = ten_trangthai($trang_thai); ?>
                                        <td><span class="order-status order-cho"><?= $tentt ?></span></td>
                                    </tr>
                                    <tr>
                                        <th>Số tiền</th>
                                        <td><?php echo"$thanh_tien"?></td>
                                    </tr>
                                    <tr>
                                        <th>Ghi chú</th>
                                        <td><?php echo"$ghichu"?></td>
                                    </tr>
                                    </tbody>
                                </table>
                             <a href="index.php?act=suatrangthai&id=<?= $id_DP ?>"><button  type="button" class="btn btn-secondary text-white">Cập Nhật</button></a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>