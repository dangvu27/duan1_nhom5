<?php
    function insert_dp($ten_KH, $email, $SDT, $ngay_dat, $ngay_den, $ngay_ve, $id_TK, $id_KM, $id_phong, $ghichu){
        $sql = "insert into dat_phong (ten_KH, email, SDT, ngay_dat, ngay_den, ngay_ve, id_TK, id_KM, id_phong, ghichu) values ('$ten_KH', '$email' ,'$SDT','$ngay_dat','$ngay_den','$ngay_ve','$id_TK', '$id_KM','$id_phong', '$ghichu')";
        pdo_execute($sql);
    }
    function update_dp($id_DP, $ten_KH, $SDT, $ngay_dat, $ngay_den, $ngay_ve, $trang_thai, $thanh_tien, $id_KM, $id_TK, $id_phong){
        $sql = "UPDATE dat_phong SET ten_KH='$ten_KH',SDT='$SDT',ngay_dat='$ngay_dat',ngay_den='$ngay_den',ngay_ve='$ngay_ve',trang_thai='$trang_thai',thanh_tien='$thanh_tien',id_KM='$id_KM',id_TK='$id_TK',id_phong='$id_phong' WHERE id_DP = '$id_DP'";
        pdo_execute($sql);
    }
    function delete_dp($id_DP){
        $sql = "update dat_phong set active = '2' where id_DP='$id_DP'";
        pdo_execute($sql);
    }
    function loadall_dp($id_phong, $kyw) {
        $sql = "select * from dat_phong where active = '1'";
        if ($id_phong > 0) {
            $sql .= " and id_phong = '$id_phong'";
        }
        if (isset($kyw)&&($kyw != "")) {
            $sql .= " and ten_KH like '%".$kyw."%'";
        }
        $list = pdo_query($sql);
        return $list;
    }
?>