<?php
    function insert_bl($noi_dung, $thoi_gian, $id_TK, $id_phong){
        $sql = "INSERT INTO binh_luan (noi_dung, thoi_gian, id_TK, id_phong) VALUES ('$noi_dung','$thoi_gian','$id_TK','$id_phong')";
        pdo_excute($sql);
    }
    function loadall_bl($id_phong) {
        $sql = "SELECT * FROM binh_luan WHERE 1";
        if ($id_phong > 0) {
            $sql .= " and id_phong = '$id_phong'";
        }
        $sql .= " order by id_BL desc";
        $list = pdo_query($sql);
        return $list;
    }
    function delete_bl($id_BL) {
        $sql = "delete from binh_luan where id_BL = '$id_BL'";
        pdo_excute($sql);
    }
?>