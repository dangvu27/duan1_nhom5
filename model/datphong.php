<?php
    function insert_dp($id_DP, $ten_KH, $email, $SDT, $ngay_dat, $ngay_den, $ngay_ve, $id_TK, $id_phong, $ghichu, $total){
        $sql = "insert into dat_phong (id_DP, ten_KH, email, SDT, ngay_dat, ngay_den, ngay_ve, id_TK, id_phong, ghichu, thanh_tien) values ('$id_DP','$ten_KH', '$email' ,'$SDT','$ngay_dat','$ngay_den','$ngay_ve','$id_TK', '$id_phong', '$ghichu', '$total')";
        pdo_execute($sql);
    }
    function update_dp($id_DP, $trang_thai){
        $sql = "UPDATE dat_phong SET trang_thai = '$trang_thai' WHERE id_DP = '$id_DP'";
        pdo_execute($sql);
    }
    function thanhtoan($id_DP){
        $sql = "update dat_phong set trang_thai = '2' where id_DP='$id_DP'";
        pdo_execute($sql);
    }
    function huy_don($id_DP){
        $sql = "update dat_phong set trang_thai = '6' where id_DP='$id_DP'";
        pdo_execute($sql);
    }
    function loadall_dp($id_phong, $kyw) {
        $sql = "select * from dat_phong where 1";
        if ($id_phong > 0) {
            $sql .= " and id_phong = '$id_phong'";
        }
        if (isset($kyw)&&($kyw != "")) {
            $sql .= " and ten_KH like '%".$kyw."%'";
        }
        $list = pdo_query($sql);
        return $list;
    }
    // function loadall_dpxoa($id_phong, $kyw) {
    //     $sql = "select * from dat_phong where active = '2'";
    //     if ($id_phong > 0) {
    //         $sql .= " and id_phong = '$id_phong'";
    //     }
    //     if (isset($kyw)&&($kyw != "")) {
    //         $sql .= " and ten_KH like '%".$kyw."%'";
    //     }
    //     $list = pdo_query($sql);
    //     return $list;
    // }
    function check_ngay($ngay_den,$ngay_ve,$id_phong) {
        $sql= "SELECT COUNT(*) as total_records
            FROM dat_phong 
            WHERE (id_phong = '$id_phong') and (trang_thai != '5') and (trang_thai != '6') and (
                ('$ngay_den' BETWEEN ngay_den AND ngay_ve) 
                OR ('$ngay_ve' BETWEEN ngay_den AND ngay_ve)
                OR (ngay_den BETWEEN '$ngay_den' AND '$ngay_ve')
                OR (ngay_ve BETWEEN '$ngay_den' AND '$ngay_ve')
        )";
        $kq = pdo_query_value($sql);
        return $kq;
    }
    function loadone_dp($id_DP){
        $sql ="select * from dat_phong where id_DP='$id_DP'";
        $list = pdo_query_one($sql);
        return $list;
    }
    function reload_trangthai($id_DP) {
        extract(loadone_dp($id_DP));
        $arrivalDate = new DateTime($ngay_dat);
        $departureDate = new DateTime(date('Y-m-d'));
        // Tính số ngày ở
        $interval = $arrivalDate->diff($departureDate);
        $numberOfDays = $interval->days;
        if (($numberOfDays > 2) and ($trang_thai == '1')) {
            huy_don($id_DP);
            $sqq = "update dat_phong set ghichu = CONCAT(ghichu, ' (Tự động hủy do quá hạn thanh toán)') where id_DP='$id_DP'";
            pdo_execute($sqq);
        }
    }
?>