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
                    <div class="row justify-content-between box-header">
                        <div class="col-4 ">
                            Danh sách phòng đã xóa
                        </div>
                        <div class="col-2">
                            <!-- <a href="index.php?act=addsp"><input type="submit" value="Thêm mới" class="btn btn-primary"></a> -->
                            <a href="index.php?act=listsp"><input type="button" value="Danh Sách" class="btn btn-primary"></a>
                        </div>
                    </div>

                    <form action="index.php?act=listxoa" method="post">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Loại Phòng</label>
                            <select class="form-select" name="id_loaiphong">
                                <option value="0">Choose...</option>
                                <?php
                                foreach ($listdm as $key) {
                                    extract($key);
                                    echo '
                                                <option value="' . $id_loaiphong . '">' . $ten_LP . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm" name="kyw">
                            <input type="submit" value="Tìm kiếm" name="timkiemsp" class="btn btn-outline-secondary">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listsp as $key) {
                                        extract($key);
                                        $ten_LP = loadten_loai($id_loaiphong);
                                        $url = "../images/" . $img;
                                        echo '<tr>
                                                <td>' . $id_phong . '</td>
                                                <td>
                                                    <div class="order-owner">
                                                        <span>' . $ten_phong . '</span>
                                                    </div>
                                                </td>
                                                <td>' . $ten_LP . '</td>
                                                <td>
                                                    <img src="' . $url . '" style="width: 100px;">
                                                </td>
                                                <td>
                                                    <textarea rows="4" cols="50">' . $mota . '</textarea>
                                                </td>
                                                <td>' . $gia . '</td>
                                                <td><a href="index.php?act=suasp&id=' . $id_phong . '"><input type="button" value="Sửa" class="btn btn-primary"></a> | <a href="index.php?act=khoiphuc&id=' . $id_phong . '"><input type="button" value="Khôi Phục" class="btn btn-primary"></a></td>
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