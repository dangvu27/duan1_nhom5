<?php
    function all_trangthai() {
        $sql = "SELECT * FROM trangthai WHERE 1";
        $list = pdo_query($sql);
        return $list;
    }
    function ten_trangthai($id) {
        $sql = "SELECT * FROM trangthai WHERE id = '$id'";
        $list = pdo_query_one($sql);
        return $list['ten_tt'];
    }
?>