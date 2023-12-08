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
                           Cập nhật tài khoản
                        </div>
                        <div class="box-body">
                            <form action="index.php?act=updatetk" method="post">
                                <?php
                                    if (is_array($taikhoan)) {
                                        extract($taikhoan);
                                    }
                                ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">UserName</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="userName" value="<?= $userName ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Pass</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="pass" value="<?= $pass ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="email" value="<?= $email ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">SĐT</span>
                                    <input type="text" class="form-control" placeholder="Nhập" name="SDT" value="<?= $SDT ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Vai Trò</span>
                                    <select class="form-select" name="vaitro">
                                        <?php 
                                            foreach ($listrole as $key) {
                                                extract($key);
                                                if ($role == $id_role) {
                                                    echo'<option value="'.$id_role.'" selected>'.$ten_role.'</option>';
                                                } else echo'<option value="'.$id_role.'">'.$ten_role.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="hidden" name="id_TK" value="<?= $id_TK ?>">
                                    <input type="submit" value="Cập Nhật" class="btn btn-primary" name="capnhattk">
                                    <a href="index.php?act=listtk"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                                </div>
                            </form>

                            <?php
                                if (isset($thongbao)) {
                                    echo'<div class="alert alert-primary" role="alert">'.$thongbao.'</div>';
                                }
                            ?>    


                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>