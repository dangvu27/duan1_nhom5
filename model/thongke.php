<?php
    function loadall_thongke() {
        $sql = "select loai_phong.id_loaiphong as maloai, loai_phong.ten_LP as tenloai, count(phong.id_phong) as soluong, min(phong.gia) as mingia, max(phong.gia) as maxgia, avg(phong.gia) as avggia";
        $sql .=" from phong left join loai_phong on loai_phong.id_loaiphong = phong.id_loaiphong";
        $sql .=" group by loai_phong.id_loaiphong order by loai_phong.id_loaiphong desc";
        $list = pdo_query($sql);
        return $list;
    }
    function thongketheothang() {
        $sql_loai_phong = "SELECT id_loaiphong, ten_LP FROM loai_phong";
        $loai_phongs = pdo_query($sql_loai_phong);
        $data = array();
        foreach ($loai_phongs as $loai_phong) {
            $id_loaiphong = $loai_phong['id_loaiphong'];
            $ten_loai_phong = $loai_phong['ten_LP'];

            $sql = "SELECT MONTH(ngay_dat) as month,
                        SUM(CASE WHEN dp.id_loaiphong = ? THEN dp.thanh_tien ELSE 0 END) as '$ten_loai_phong'
                    FROM dat_phong dp
                    WHERE YEAR(ngay_dat) = 2023
                    GROUP BY MONTH(ngay_dat)";

            $result = pdo_query($sql, $id_loaiphong);

            foreach ($result as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
?>