<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Quản lý Phòng
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Danh sách phòng
                           
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?act=addsp"><input type="submit" value="Thêm mới" class="btn btn-primary"></a>    
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên phòng</th>
                                        <th>Loại phòng</th>
                                        <th>Ảnh</th>
                                        <th>Mô tả</th>
                                        <th>Giá</th>
                                        <th>Action</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($listsp as $key) {
                                            extract($key);
                                            $ten_LP = loadten_loai($id_loaiphong);
                                            $url = "../images/".$img;
                                            echo'<tr>
                                                <td>'.$id_phong.'</td>
                                                <td>
                                                    <div class="order-owner">
                                                        <span>'.$ten_phong.'</span>
                                                    </div>
                                                </td>
                                                <td>'.$ten_LP.'</td>
                                                <td>
                                                    <img src="'.$url.'" style="width: 100px;">
                                                </td>
                                                <td>
                                                    <textarea rows="4" cols="50">'.$mota.'</textarea>
                                                </td>
                                                <td>'.$gia.' đ </td>
                                                <td><a href="index.php?act=update&id='.$id_phong.'">Update</a> | <a href="index.php?act=delete&id='.$id_phong.'">Delete</a></td>
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