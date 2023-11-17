<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
            Quản lý Loại Phòng
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Danh sách loại phòng
                           
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?act=addlp"><input type="submit" value="Thêm mới" class="btn btn-primary"></a>    
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên loại phòng</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($listdm as $key) {
                                            extract($key);
                                            echo'<tr>
                                                <td>'.$id_loaiphong.'</td>
                                                <td>
                                                    <div class="order-owner">
                                                        <span>'.$ten_LP.'</span>
                                                    </div>
                                                </td>
                                                <td><a href="index.php?act=sualp&id='.$id_loaiphong.'">Update</a> | <a href="index.php?act=deletelp&id='.$id_loaiphong.'">Delete</a></td>
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