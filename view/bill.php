<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post"
                action="index.php?act=thanhtoan">
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin trước khi đặt phòng.</p>
                </div>

                <div class="row">
                    
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="kh_ten" id="kh_ten"
                                    value="<?= $ten ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai"
                                    value="<?= $sdt ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="kh_email" id="kh_email"
                                    value="<?= $email ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_ngaysinh">Ghi chú</label>
                                <input type="text" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh"
                                    value="<?= $ghichu ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="ngayden">Ngày Check-in</label>
                                <input type="text" class="form-control" name="ngayden" id="ngayden" value="<?= $ngayden ?>"
                                    readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="ngaydi">Ngày Check-out</label>
                                <input type="text" class="form-control" name="ngaydi" id="ngaydi" value="<?= $ngaydi ?>"
                                    readonly="">
                            </div>
                        </div>

                        <!-- //ggg -->
                    </div>

                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Phòng đặt</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?= loadten_phong($id_phong)?></h6>
                                    <small class="text-muted"><?= $room['gia']?> x <?= $numberOfDays ?> đêm </small>
                                </div>
                                <span class="text-muted"><?= $total ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong><?= $total ?></strong>
                            </li>
                        </ul>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Thanh toán qua VNPAY</label>
                            </div>
                            
                        </div>
                        <hr class="mb-4"> 
                        <input type="hidden" name="id_DP" value="<?= $id_DP ?>">
                        <input type="hidden" name="ten" value="<?= $ten ?>">
                        <input type="hidden" name="email" value="<?= $email ?>">
                        <input type="hidden" name="sdt" value="<?= $sdt ?>">
                        <input type="hidden" name="ngaydat" value="<?= $ngaydat ?>">
                        <input type="hidden" name="ngayden" value="<?= $ngayden ?>">
                        <input type="hidden" name="ngaydi" value="<?= $ngaydi ?>">
                        <input type="hidden" name="id_tk" value="<?= $_SESSION['user']['id_TK'] ?>">
                        <input type="hidden" name="id_phong" value="<?= $id_phong ?>">
                        <input type="hidden" name="ghichu" value="<?= $ghichu ?>">
                        <input type="hidden" name="total" value="<?= $total ?>">
                        <input class="btn btn-primary btn-lg btn-block" type="submit" name="thanh_toan" value="Thanh toán">

                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>