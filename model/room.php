<?php 
    function insert_room($ten_phong, $gia, $mota, $id_loaiphong, $img){
        $sql = "insert into phong (ten_phong, gia, mota, id_loaiphong, img) values ('$ten_phong', '$gia', '$mota', '$id_loaiphong', '$img')";
        pdo_execute($sql);
    }
    function update_room($id_phong, $ten_phong, $gia, $mota, $id_loaiphong, $img){
        if ($img !='') {
            $sql = "update phong set ten_phong = '$ten_phong', gia = '$gia', mota = '$mota', id_loaiphong = '$id_loaiphong', img = '$img' where id_phong='$id_phong'";
        } else $sql = "update phong set ten_phong = '$ten_phong', gia = '$gia', mota = '$mota', id_loaiphong = '$id_loaiphong' where id_phong='$id_phong'";
        pdo_execute($sql);
    }
    function loadall_room($kyw,$id_loaiphong){
        $sql ="select * from phong where 1";
        if ($kyw != "") {
            $sql.= " and ten_phong like %'$kyw'%";
        }
        if ($id_loaiphong >0) {
            $sql.= " and id_loaiphong like %'$id_loaiphong'%";
        }
        $list = pdo_query($sql);
        return $list;
    }
    function loadone_room($id_phong){
        $sql ="select * from phong where id_phong='$id_phong'";
        $list = pdo_query_one($sql);
        return $list;
    }
    function delete_room($id_phong){
        $sql = "delete from phong where id_phong='$id_phong'";
        pdo_execute($sql);
    }
    function loadten_loai($id_loaiphong){
        if ($id_loaiphong>0) {
            $sql = "select * from loai_phong where id_loaiphong='$id_loaiphong'";
            $dm = pdo_query_one($sql);
            extract($dm);
            return $ten_LP;
        } else return "";
    }
?>