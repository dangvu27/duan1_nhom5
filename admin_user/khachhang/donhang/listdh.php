
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
                 <h2>Trang lịch sử đặt hàng </h2>
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <!-- CUSTOMERS CHART -->
                    
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12">
                    <p>
                    <div class="box">
                        <div class="box-header">
                        <h4>Lịch sử đặt hàng</h4>
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
                                        foreach ($listdh as $key) {
                                            extract($key);
                                            $tenphong = loadten_phong($id_phong);
                                            echo'<tr>
                                                  <th>'.$id_DP.'</th>
                                                  <th>'.$tenphong.'</th>
                                                  <th>'.$ngay_dat.'</th>
                                                  <th>'.$thanh_tien.'</th>
                                                  <th>'.$trang_thai.'</th>
                                                <td><a href="indexuser.php?act=chitietdh&id='.$id_DP.'"><input type="submit" value="Xem chi tiết" class="btn btn-primary"></a></td>
                                            </tr>';
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
