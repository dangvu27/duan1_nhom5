<?php
    function loadall_thongke() {
        $sql = "select loai_phong.id_loaiphong as maloai, loai_phong.ten_LP as tenloai, count(phong.id_phong) as soluong, min(phong.gia) as mingia, max(phong.gia) as maxgia, avg(phong.gia) as avggia";
        $sql .=" from phong left join loai_phong on loai_phong.id_loaiphong = phong.id_loaiphong";
        $sql .=" group by loai_phong.id_loaiphong order by loai_phong.id_loaiphong desc";
        $list = pdo_query($sql);
        return $list;
    }
?>