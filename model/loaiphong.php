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
        $sql ="select * from loai_phong where 1";
        // if ($kyw != "") {
        //     $sql.= " and ten_phong like %'$kyw'%";
        // }
        // if ($id_loaiphong >0) {
        //     $sql.= " and id_loaiphong like %'$id_loaiphong'%";
        // }
        $list = pdo_query($sql);
        return $list;
    }
    function loadone_loai($id_loaiphong){
        $sql ="select * from loai_phong where id_loaiphong='$id_loaiphong'";
        $list = pdo_query_one($sql);
        return $list;
    }
    function delete_loai($id_loaiphong){
        $sql = "delete from loai_phong where id_loaiphong='$id_loaiphong'";
        pdo_execute($sql);
    }
?>