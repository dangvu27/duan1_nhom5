<div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
            Quản lý Tài Khoản
            </div>
        </div>
        <div class="main-content">
           

            <div class="row">
            
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                           Danh sách tài khoản đã xóa
                           
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?act=listtk"><input type="submit" value="Danh Sách" class="btn btn-primary"></a>    
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>UserName</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>SĐT</th>
                                        <th>Vai trò</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($listtk as $key) {
                                            extract($key);
                                            $vaitro = loadten_role($role);
                                            echo'<tr>
                                                  <th>'.$id_TK.'</th>
                                                  <th>'.$userName.'</th>
                                                  <th>'.$pass.'</th>
                                                  <th>'.$email.'</th>
                                                  <th>'.$SDT.'</th>
                                                  <th>'.$vaitro.'</th>
                                                <td><a href="index.php?act=suatk&id='.$id_TK.'"><input type="submit" value="Sửa" class="btn btn-primary"></a> | <a href="index.php?act=khoiphuctk&id='.$id_TK.'"><input type="submit" value="Khôi Phục" class="btn btn-primary"></a></td>
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