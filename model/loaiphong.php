<?php
    function insert_loai($ten_LP){
        $sql = "insert into loai_phong (ten_LP) values ('$ten_LP')";
        pdo_execute($sql);
    }
    function update_loai($id_loaiphong, $ten_LP){
        $sql = "update loai_phong set ten_LP = '$ten_LP' where id_loaiphong='$id_loaiphong'";
        pdo_execute($sql);
    }
    function loadall_loai(){
        $sql ="select * from loai_phong where active = '1'";
        $list = pdo_query($sql);
        return $list;
    }
    function loadall_loaixoa(){
        $sql ="select * from loai_phong where active = '2'";
        $list = pdo_query($sql);
        return $list;
    }
    function loadone_loai($id_loaiphong){
        $sql ="select * from loai_phong where id_loaiphong='$id_loaiphong'";
        $list = pdo_query_one($sql);
        return $list;
    }
    function delete_loai($id_loaiphong){
        $sql = "update loai_phong set active = '2' where id_loaiphong='$id_loaiphong'";
        pdo_execute($sql);
        $sqll = "UPDATE phong SET active = '2' WHERE active = '1' AND id_loaiphong = '$id_loaiphong'";
        pdo_execute($sqll);
    }
    function return_loai($id_loaiphong){
        $sql = "update loai_phong set active = '1' where id_loaiphong='$id_loaiphong'";
        pdo_execute($sql);
        $sqll = "UPDATE phong SET active = '1' WHERE active = '2' AND id_loaiphong = '$id_loaiphong'";
        pdo_execute($sqll);
    }
?>