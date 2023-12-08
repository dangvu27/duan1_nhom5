<div class="main">
    <div class="main-header">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu-alt-right'></i>
        </div>
        <div class="main-title">
            Quản lý Bình Luận
        </div>
    </div>
    <div class="main-content">


        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="row justify-content-between box-header">
                        <div class="col-4 ">
                            Danh sách bình luận
                        </div>
                        <div class="col-1">
                            <a href="index.php?act=listblxoa"><input type="button" value="Đã Xóa" class="btn btn-primary"></a>
                        </div>
                    </div>

                    <form action="index.php?act=listbl" method="post">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Lọc Phòng</label>
                            <select class="form-select" name="id_phong">
                                <option value="0">Choose...</option>
                                <?php
                                    foreach ($listsp as $key) {
                                        extract($key);
                                        echo '<option value="' . $id_phong . '">' . $ten_phong . '</option>';
                                    }
                                ?>
                            </select>
                            <input type="submit" value="Tìm kiếm" name="timkiembl" class="btn btn-outline-secondary">
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nội Dung Bình Luận</th>
                                        <th>ID User</th>
                                        <th>ID Phòng</th>
                                        <th>Ngày Bình Luận</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listbl as $key) {
                                        extract($key);
                                        $tenphong = loadten_phong($id_phong);
                                        echo '<tr>
                                                <td>' . $id_BL . '</td>
                                                <td>
                                                    <textarea rows="4" cols="50">' . $noi_dung . '</textarea>
                                                </td>
                                                <td>' . $id_TK . '</td>
                                                <td>' . $tenphong . '</td>
                                                <td>' . $thoi_gian . ' </td>
                                                <td> <a href="index.php?act=deletebl&id=' . $id_BL . '"><input type="button" value="Xóa" class="btn btn-primary"></a></td>
                                            </tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>