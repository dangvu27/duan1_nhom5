<?php
    function insert_bl($noi_dung, $thoi_gian, $id_TK, $id_phong){
        $sql = "INSERT INTO binh_luan (noi_dung, thoi_gian, id_TK, id_phong) VALUES ('$noi_dung','$thoi_gian','$id_TK','$id_phong')";
        pdo_execute($sql);
    }
    function loadall_bl($id_phong) {
        $sql = "SELECT * FROM binh_luan WHERE active = '1'";
        if ($id_phong > 0) {
            $sql .= " and id_phong = '$id_phong'";
        }
        $sql .= " order by id_BL desc";
        $list = pdo_query($sql);
        return $list;
    }
    function loadall_blxoa($id_phong) {
        $sql = "SELECT * FROM binh_luan WHERE active = '2'";
        if ($id_phong > 0) {
            $sql .= " and id_phong = '$id_phong'";
        }
        $sql .= " order by id_BL desc";
        $list = pdo_query($sql);
        return $list;
    }
    function delete_bl($id_BL) {
        $sql = "update binh_luan set active = '2' where id_BL = '$id_BL'";
        pdo_execute($sql);
    }
    function return_bl($id_BL) {
        $sql = "update binh_luan set active = '1' where id_BL = '$id_BL'";
        pdo_execute($sql);
    }
?>