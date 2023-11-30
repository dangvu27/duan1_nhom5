<?php
    function insert_dp($ten_KH, $email, $SDT, $ngay_dat, $ngay_den, $ngay_ve, $id_TK, $id_KM, $id_phong, $ghichu){
        $sql = "insert into dat_phong (ten_KH, email, SDT, ngay_dat, ngay_den, ngay_ve, id_TK, id_KM, id_phong, ghichu) values ('$ten_KH', '$email' ,'$SDT','$ngay_dat','$ngay_den','$ngay_ve','$id_TK', '$id_KM','$id_phong', '$ghichu')";
        pdo_execute($sql);
    }
    function update_dp($id_DP, $trang_thai){
        $sql = "UPDATE dat_phong SET trang_thai = '$trang_thai' WHERE id_DP = '$id_DP'";
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