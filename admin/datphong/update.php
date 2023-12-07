<div class="main">
    <div class="main-header">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu-alt-right'></i>
        </div>
        <div class="main-title">
            Quản lý Đơn Đặt Phòng
        </div>
    </div>
    <div class="main-content">


        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="box-header">
                        Thêm Đơn Đặt Phòng
                    </div>
                    <div class="box-body">
                        <form action="index.php?act=capnhattrangthai" method="post" >

                            <div class="row justify-content-start col-10">
                                <select class="form-select" name ="trangthai" required>
                                    <?php
                                        extract($dh);
                                        foreach ($listtrangthai as $key) {
                                            extract($key);
                                            if ($id < $trang_thai) {
                                                echo '<option value="'.$id.'" disabled>'.$ten_tt.'</option>';
                                            } elseif ($id == '6') {
                                                echo '<option value="'.$id.'" disabled>'.$ten_tt.'</option>';
                                            } elseif ($id - $trang_thai >= 2) {
                                                echo '<option value="'.$id.'" disabled>'.$ten_tt.'</option>';
                                            } elseif ($id == $trang_thai) {
                                                echo '<option value="'.$id.'" selected>'.$ten_tt.'</option>';
                                            } else {
                                                echo '<option value="'.$id.'">'.$ten_tt.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="iddp" value="<?= $id_DP ?>">
                            <input type="submit" value="Cập Nhật" name="capnhattt" class="btn btn-primary">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>