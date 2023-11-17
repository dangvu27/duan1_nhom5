<?php
    function insert_dp($ten_KH, $SDT, $ngay_dat, $ngay_den, $ngay_ve, $trang_thai, $thanh_tien, $id_KM, $id_TK, $id_phong){
        $sql = "INSERT INTO dat_phong( ten_KH, SDT, ngay_dat, ngay_den, ngay_ve, trang_thai, thanh_tien, id_KM, id_TK, id_phong) VALUES ('$ten_KH','$SDT','$ngay_dat','$ngay_den','$ngay_ve','$trang_thai','$thanh_tien','$id_KM','$id_TK','$id_phong')";
        pdo_execute($sql);
    }
    function update_dp($id_DP, $ten_KH, $SDT, $ngay_dat, $ngay_den, $ngay_ve, $trang_thai, $thanh_tien, $id_KM, $id_TK, $id_phong){
        $sql = "UPDATE dat_phong SET ten_KH='$ten_KH',SDT='$SDT',ngay_dat='$ngay_dat',ngay_den='$ngay_den',ngay_ve='$ngay_ve',trang_thai='$trang_thai',thanh_tien='$thanh_tien',id_KM='$id_KM',id_TK='$id_TK',id_phong='$id_phong' WHERE id_DP = '$id_DP'";
        pdo_execute($sql);
    }
    function delete_room($id_DP){
        $sql = "delete from dat_phong where id_DP='$id_DP'";
        pdo_execute($sql);
    }
?>