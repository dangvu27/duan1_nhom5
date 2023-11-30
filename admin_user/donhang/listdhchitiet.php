
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
                            home
                        </div>
                        <div class="box-body" >
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                        <h4>Thông tin tài khoản</h4>
                        <div class="container mt-3">       
                                <table class="table table-hover">
                                    <?php extract($listdh2);
                                    $ten_KM = loadten_km($id_KM);
                                    ?>
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
                                        <th>SALE</th>
                                        <td><?php echo"$ten_KM"?></td>
                                    </tr>
                                    <tr>
                                        <th>Ghi chú</th>
                                        <td><?php echo"$ghichu"?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            <?php 
                                if ($trang_thai == 1) {
                                    echo '<a href="indexuser.php?act=huydon&id='.$id_DP.'"><button  type="button" class="btn btn-secondary text-white">Hủy đặt</button></a>';
                                }
                            ?> 
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>