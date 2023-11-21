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
    function loadall_room($kyw,$id_loaiphong, $checkin, $checkout){
        $sql ="select * from phong where 1";
        if ($kyw != "") {
            $sql.= " and ten_phong like '%".$kyw."%'";
        }
        if ($id_loaiphong >0) {
            $sql.= " and id_loaiphong='$id_loaiphong'";
        }
        if (($checkin != "") && ($checkout != "") ) {
            $sql.=" and id_phong NOT IN (
                SELECT id_phong FROM dat_phong
                WHERE ngay_den BETWEEN '$checkin' AND '$checkout'
                OR ngay_ve BETWEEN '$checkin' AND '$checkout'
            )";
        }
        $list = pdo_query($sql);
        return $list;
    }
    function load3_roomhome(){
        $sql ="SELECT phong.*, SUBSTRING(mota, 1, 70) AS mota_ngan, COUNT(dat_phong.id_phong) AS so_lan_dat
        FROM phong
        LEFT JOIN dat_phong ON phong.id_phong = dat_phong.id_phong
        GROUP BY phong.id_phong
        ORDER BY COUNT(dat_phong.id_phong) DESC
        LIMIT 3";
        $list = pdo_query($sql);
        return $list;
    }
    function load6_roomtk($id_loaiphong, $checkin, $checkout){
        $sql ="SELECT phong.*, SUBSTRING(mota, 1, 70) AS mota_ngan, COUNT(dat_phong.id_phong) AS so_lan_dat
        FROM phong
        LEFT JOIN dat_phong ON phong.id_phong = dat_phong.id_phong where 1";

        if ($id_loaiphong >0) {
            $sql.= " and id_loaiphong='$id_loaiphong'";
        }
        if (($checkin != "") && ($checkout != "") ) {
            $timestamp = strtotime($checkin);
            $ngayden = date("Y/m/d", $timestamp);
            $timestamp = strtotime($checkout);
            $ngayve = date("Y/m/d", $timestamp);
            $sql.=" and phong.id_phong NOT IN (
                SELECT id_phong FROM dat_phong
                WHERE (ngay_den BETWEEN '$ngayden' AND '$ngayve')
                OR (ngay_ve BETWEEN '$ngayden' AND '$ngayve')
            )";
        }

        $sql .= " GROUP BY phong.id_phong
        ORDER BY COUNT(dat_phong.id_phong) DESC
        LIMIT 6";
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
    function trangthai_room($id_phong){
        $sql = "select
        CASE
           WHEN dat_phong.ngay_den IS NULL AND dat_phong.ngay_ve IS NULL THEN 'Trống'
           WHEN CURDATE() > dat_phong.ngay_ve THEN 'Trống'
           WHEN CURDATE() BETWEEN dat_phong.ngay_den AND dat_phong.ngay_ve THEN 'Đã Check-in'
           ELSE 'Chờ'
        END AS trang_thai
        FROM phong
        LEFT JOIN dat_phong ON phong.id_phong = dat_phong.id_phong
        WHERE phong.id_phong = '$id_phong'";
        $list = pdo_query($sql);
        return $list;
    }
    function soluong_room(){
        $sql = "SELECT COUNT(id_phong) FROM phong"; 
        $dem = pdo_query_value($sql);
        return $dem;
    }
?>