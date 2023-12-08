
   

    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Bảng điều khiển
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
                
    
                <div class="col-12 col-md-12 col-sm-12">
                    <!-- CUSTOMERS CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            Thống kê
                        </div>
                        <div class="box-body" >
                            <div id="area-chart"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                            Danh sách thống kê theo loại phòng
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Loại Phòng</th>
                                        <th>Số lượng</th>
                                        <th>Giá thấp nhất</th>
                                        <th>Giá cao nhất</th>
                                        <th>Giá trung bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            foreach ($listthongke as $as) {
                                                extract($as);
                                                echo '<tr><td>'.$maloai.'</td>
                                                <td>'.$tenloai.'</td>
                                                <td>'.$soluong.'</td>
                                                <td>'.$mingia.'</td>
                                                <td>'.$maxgia.'</td>
                                                <td>'.$avggia.'</td> </tr>';
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